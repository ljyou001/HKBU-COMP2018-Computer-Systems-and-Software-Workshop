<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php

if ( isSet ( $_GET["fruits"] ) )
{
    $fruits = $_GET["fruits"] ;
}
print "You have entered <br />\n";
if (isSet( $fruits ))
{
    print "<span style=\"color:blue\">\n" ;
    foreach ( $fruits as $fruit )
    {
        print "$fruit <br \>\n"  ;
    }
}
else
{
    print "<span style=\"color:red\">\n" ;
    print "nothing<br />\n" ;
}
print "</span>\n";

?>
</body>
</html>
