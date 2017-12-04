<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php

$dirname = "archive" ;
if (is_dir ($dirname))
{
   $filenames = scandir ($dirname);

   for ($i = 0; $i < count($filenames); $i++)
   {
      if ($filenames[$i] != "." && $filenames[$i] != "..")
      // skip over the current directory and the parent directory
      {
         if ( is_file ($dirname . "/" . $filenames[$i]))
         {
           print ( "<a href=\"$dirname/$filenames[$i]\">$filenames[$i]</a><br />\n" );
         }
      }
   }
}
?>
</body>
</html>