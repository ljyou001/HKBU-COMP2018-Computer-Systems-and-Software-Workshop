<?php

if ( php_sapi_name() == "cli" )
{
   $infilename = $_SERVER["argv"][1] ;
   $outfilename = $_SERVER["argv"][2] ;
   $buffer = file( $infilename) ;
   $outfile = fopen($outfilename,"w");
   sort($buffer);
   foreach( $buffer as $line )
   {
      $outline = chop( $line ) . "\n" ; // change \r\n to \n
	  fwrite($outfile, $outline ) ;
   }
   fclose( $outfile ) ;
}
else
{
   print("<!DOCTYPE html>\n<html>\n<head>\n<meta charset=\"UTF-8\" />\n</head>\n<body>\n");
   print("This program can only be run using CLI (Command Line Interface)!<br />\n");
   print("</body>\n</html>");
}
?>