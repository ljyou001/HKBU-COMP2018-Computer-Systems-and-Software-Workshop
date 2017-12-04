<?php

if ( php_sapi_name() == "cli" )
{
   fprintf(STDERR, "Please entry 2 numbers: ");
   fscanf(STDIN,"%f %f", $a, $b);
   fprintf(STDOUT, "$a add to $b is %7.2f\n" , $a+$b ) ;
}
else
{
   print("<!DOCTYPE html>\n<html>\n<head>\n<meta charset=\"UTF-8\" />\n</head>\n<body>\n");
   print("This program can only be run using CLI (Command Line Interface)!<br />\n");
   print("</body>\n</html>");
}
?>