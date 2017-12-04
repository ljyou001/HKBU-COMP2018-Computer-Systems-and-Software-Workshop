<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
<?php
print("You have picked <span style=\"color:blue\" />");
if ( isSet ( $_GET["fruit"] ) )
{
    print( $_GET["fruit"] ) ;
}
else
{
    print "Nothing!" ;
}
print( "</span><br />\n" ) ;
?>
</body>
</html>
