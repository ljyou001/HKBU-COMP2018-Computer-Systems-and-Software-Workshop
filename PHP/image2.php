<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Image Example 1</title>
</head>
<body> 
<p>
<img src="image2.jpg" width="200" height="200" align="left" /> 
<b>This paragraph with picture on the left.</b>
<?php
for ( $i=0; $i<50; $i++ )
{ echo "The quick brown fox jumps over the lazy dog.\n" ; }
?>
</p>
<p>
<img src="image1.jpg" width="200" height="200" align="right" /> 
<b>This paragraph with picture on the right.</b>
<?php
for ( $i=0; $i<50; $i++ )
{ echo "The quick brown fox jumps over the lazy dog.\n" ; }
?>
</p>
</body> 
</html>
