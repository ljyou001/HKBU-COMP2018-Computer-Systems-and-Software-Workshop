<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
</head>
<body>

<?php

$dirname = "archive" ;
if (!IsSet($_POST["action"]) || ($_POST["action"] == "goback") )
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
		   print ("<input type=\"radio\" name=\"renamefile\" value=\"$filenames[$i]\" />$filenames[$i]</a><br />\n" );
         }
      }
   }
?>
   <input type="submit" name="action" value="rename">
   </form>
<?php

}
else if ( $_POST["action"] == "doit" )
{
   $fromname = $dirname . "/" . $_POST["fromfile"] ;
   $toname = $dirname . "/" . $_POST["tofile"] ;

   if ( rename( $fromname, $toname ) )
   {
      print "File renamed!<br />\n" ;
   }
?>
   <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
   <input type="submit" name="action" value="goback" />
   </form>
<?php
}
else
{

$fromfile = $_POST["renamefile"] ;

?>
   <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
<?php
    print("You want to rename $fromfile to\n");
?>
    <input type="hidden" name="fromfile" value="<?php print $fromfile ?>"/>
	<input type="text" name="tofile" />
    <input type="submit" name="action" value="doit" />
    </form>
<?php
}
?>
</body>
</html>