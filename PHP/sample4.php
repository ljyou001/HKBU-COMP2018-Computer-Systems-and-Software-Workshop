<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php

$a = 1;

error_reporting( 0 ) ; // ignore all errors and warnings

$c = $a ;
$d = $b ; // $b is undefined

print "Value of \$a is " . $a . "<br />\n" ;
print "Value of \$b is " . $b . "<br />\n" ;
print "Value of \$c is " . $c . "<br />\n" ;
print "Value of \$d is " . $d . "<br />\n" ;

error_reporting( E_ALL ) ; // Display all errors or warnings
print "We have set error_report to E_ALL <br />\n" ;

$c = $a ;
$d = $b ; // $b is still undefined

print "Value of \$a is " . $a . "<br />\n" ;
print "Value of \$b is " . $b . "<br />\n" ;
print "Value of \$c is " . $c . "<br />\n" ;
print "Value of \$d is " . $d . "<br />\n" ;


?>
</body>
</html>
