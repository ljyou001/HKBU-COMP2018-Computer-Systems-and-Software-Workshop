<?php
$highs = array("Mon" => 74, "Tue" => 70,
               "Wed" => 67, "Thu" => 62,
               "Fri" => 65);
$days = array_keys($highs);
$temps = array_values($highs);

print_r( $highs ) ;
print("<hr />") ;
print_r( $days ) ;
print("<hr />") ;
print_r( $temps ) ;

?>
