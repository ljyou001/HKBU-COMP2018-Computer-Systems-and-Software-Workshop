function outputArray( header, theArray )
   {
      document.writeln( "<h2>" + header + "</h2>" );
      document.writeln( "<table border = \"1\" width =" + "\"100%\">" );
      document.writeln( "<thead><th width = \"100\"" +
                        "align = \"left\">Subscript</th>" +
                        "<th align = \"left\">Value</th></thead><tbody>" ); 
      
      for ( var i = 0; i < theArray.length; i++ ) 
          document.writeln( "<tr><td>" + i + "</td><td>" +
                            theArray[ i ] + "</td></tr>" );
      document.writeln( "</tbody></table>" );
   }
