<?php

if ( php_sapi_name() == "cli" )
{
   $count = 0 ;
   $filename = $_SERVER["argv"][1] ;
   $infile = fopen( $filename, "rt" ) ;
   while( !feof( $infile ) )
   {
      $buf = fgetc( $infile ) ;
	  if ( $buf ) $count++ ;
   }
   fprintf(STDERR, "The file size is %d byte", $count ) ;
   fclose( $infile ) ;
}
else
{
   print("<!DOCTYPE html>\n<html>\n<head>\n<meta charset=\"UTF-8\" />\n</head>\n<body>\n");
   print("This program can only be run using CLI (Command Line Interface)!<br />\n");
   print("</body>\n</html>");
}
?>