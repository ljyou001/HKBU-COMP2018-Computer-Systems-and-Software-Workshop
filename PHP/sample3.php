<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php

$a = 1;

if ( IsSet( $a ) )
{ print "Value of \$a is " . $a . "<br />\n" ;
}
unset( $a );
print "Value of \$a after unset is " . $a . "<br />\n" ;

if ( $a == NULL )
{ print "Value of \$a is NULL<br />\n" ;
}


?>
</body>
</html>
