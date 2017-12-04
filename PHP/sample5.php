<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php

$a = 1;
print "Type of \$a is " . gettype( $a ) . "<br />\n" ;
print "Value of \$a is $a <br /><br />\n" ;

$a = 123.45;
print "Type of \$a is " . gettype( $a ) . "<br />\n" ;
print "Value of \$a is $a <br /><br />\n" ;

$a = "abcdefg" ;
print "Type of \$a is " . gettype( $a ) . "<br />\n" ;
print "Value of \$a is $a <br /><br />\n" ;


$a = TRUE ;
print "Type of \$a is " . gettype( $a ) . "<br />\n" ;
print "Value of \$a is $a <br /><br />\n" ;


print "Type of \$b is " . gettype( $b ) . "<br />\n" ;
print "Value of \$b is $b <br /><br />\n" ;
?>
</body>
</html>
