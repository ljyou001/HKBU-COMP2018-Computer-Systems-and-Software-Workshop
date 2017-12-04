<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php

$dirname = "archive" ;
if (!IsSet($_POST["action"]) || ($_POST["action"]!="delete") )
{
?>
   <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
<?php
   $filenames = scandir ($dirname);

   for ($i = 0; $i < count($filenames); $i++)
   {
      if ($filenames[$i] != "." && $filenames[$i] != "..")
      // skip over the current directory and the parent directory
      {
         if ( is_file ($dirname . "/" . $filenames[$i]))
         {
		   print ("<input type=\"radio\" name=\"delname\" value=\"$filenames[$i]\" />$filenames[$i]</a><br />\n" );
         }
      }
   }
?>
   <input type="submit" name="action" value="delete">
   </form>
<?php

}
else
{

$delfile = $dirname . "/" . $_POST["delname"] ;

if ( unlink( $delfile ))
{
   print("$delfile deleted<br />\n");
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