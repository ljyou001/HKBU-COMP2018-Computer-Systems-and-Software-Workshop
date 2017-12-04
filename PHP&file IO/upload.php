<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php
if ( !IsSet($_POST["action"]) || ($_POST["action"] != "upload") )
{
?>
   <h1>upload a file to archive</h1>
   <form enctype="multipart/form-data" action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
   <!-- MAX_FILE_SIZE must be larger than the expect file size -->
   <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
   File to be uploaded: <input name="myfile" type="file" />
   <input type="submit" name="action" value="upload" />
   </form>
<?php
}
else
{
   $uploaddir = 'archive';
   if ( !Is_Dir( $uploaddir ) )
   {
      mkdir( $uploaddir );
   }
   $uploadname = $uploaddir . "/" . basename($_FILES['myfile']['name']);

   if ( file_exists( $uploadname ) )
   {
      print ("Upload not done! File already exist!<br />\n");
   }
   else if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadname ))
   {
      print ("File uploaded successfully.<br>\n");
      print ("File name on client: " . $_FILES['myfile']['name'] . "<br>\n");
      print ("File type as passed by browser: " .
                       $_FILES['myfile']['type'] . "<br>\n");
      print ("File size: " . $_FILES['myfile']['size'] . "<br>\n");
      print ("File name on server: $uploadname<br>\n");
   }
   else
   {
      print ("File uploaded may be corrupted!<br>\n");
      print ("Error code: " . $_FILES['myfile']['error'] . "<br>\n");
   }
?>   
   <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
   <input type="submit" name="action" value="goback" />
   </form>
<?php
}
?>
</body>
</html>