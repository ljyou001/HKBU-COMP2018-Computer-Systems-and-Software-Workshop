<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php

$a = 123;
print "Type of \$a is " . gettype( $a ) . "<br />\n" ;
print "Value of \$a is $a <br /><br />\n" ;

$b = "123";
print "Type of \$b is " . gettype( $b ) . "<br />\n" ;
print "Value of \$b is $b <br /><br />\n" ;

if ( $a == $b )
{
    print "\$a equals to \$b using the == operator<br /><br />\n" ;
}

if ( $a === $b )
{
    print "\$a equals to \$b using the === operator<br /><br />\n" ;
}

print "Value of \$a + \$b is " . ($a+$b) . "<br /><br />\n" ;

print "This is an error: Value of \$a + \$b is ($a+$b) <br /><br />\n" ;

?>
</body>
</html>
