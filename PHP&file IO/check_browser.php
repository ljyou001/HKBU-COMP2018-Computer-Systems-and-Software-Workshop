<?php

if ( php_sapi_name() == "cli" )
{
   print( "Program start with command line interface\n" ) ;
}
else
{
   $user_agent = $_SERVER["HTTP_USER_AGENT"] ;

   if ( isSet( $user_agent ) )
   {

      print("<!DOCTYPE html>\n<html>\n<head>\n<meta charset=\"UTF-8\" />\n</head>\n<body>\n");

// Uncomment the next line to debug this program 
# print ( $user_agent . "<br />\n" ) ;

      if ( strpos( $user_agent, "OPR" ) )
      {
         print( "You are using Opera Browser.<br />\n" ) ;
      }
      else if ( strpos( $user_agent, "Chrome" ) )
      {
         print( "You are using Chrome Browser.<br />\n" ) ;
      }
      else if ( strpos( $user_agent, "Firefox" ) )
      {
         print( "You are using Firefox Browser.<br />\n" ) ;
      }
      else if ( strpos( $user_agent, "Safari" ) )
      {
         print( "You are using Safari Browser.<br />\n" ) ;
      }
      else if ( strpos( $user_agent, "Windows" ) )
      {
         print( "You are using IE Browser.<br />\n" ) ;
      } 
      else
      {
         print( "I do not know which Browser you are using.<br />\n" ) ;
      } 

  print("</body>\n</html>");

  }
  else
  {
     print("Cannot find USER_AGENT! Something wrong in the configuration!\n");
  }
}
?>
