<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8" />
        <style>
            table 
            { 
                border:2px solid blue; 
                text-align:right; 
                width: 80%; 
                margin: 10%; 
                font-size: 2em
            }
            th 
            { 
                width:30px;
                color: red; 
                border:1px solid yellow; 
                width: 8%
            }
            td 
            { 
                border:1px dashed green
            }
        </style>
    </head>
    <body>
        <?php
            if( !IsSet($_POST["trasfer"]) || !IsSet($_POST["start"]) ||
             !IsSet($_POST["end"]) || !IsSet($_POST["increment"]) )
            {
        ?>
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                <select name="trasfer">
                <option value="f2c">F to C</option>
                <option value="c2f">C to F</option>
                </select>
                Start: <input type="text" name="start">
                End: <input type="text" name="end">
                Increment: <input type="text" name="increment">
                <input type="Submit" value="Click">
                </form>
        <?php
            }
            // Sample PHP to display a multiplication table
            else if ( $_POST["trasfer"]) == "f2c")
            {
                print("<t1>Temperature Conversion <t1>");
                print("<table>\n");
                print("<tr>\n"); // table row for the heading`
                print("<th> </th>"); // top left corner is an empty cell
                print ("<th>Fahrenheit </th>");
                print ("<th>Celsius </th>");
                print("</tr>\n"); // end of the heading row
                for ( $i =  $_POST["start"] ; $i <=  $_POST["end"] ; $i = $i +  $_POST["increment"] )
                {
                    print("<tr>");
                    print("<th>$i</th>");
                    print("<td>" . (($i / 9) * 5) -32  . "</td>" ) ;
                    print("</tr>");
                }
                print("</table>\n");
            }
            else if ( $_POST["trasfer"]) == "c2f")
            {
                print("<t1>Temperature Conversion <t1>");
                print("<table>\n");
                print("<tr>\n"); // table row for the heading`
                print("<th> </th>"); // top left corner is an empty cell
                print ("<th>Celsius </th>");
                print ("<th>Fahrenheit </th>");
                print("</tr>\n"); // end of the heading row
                for ( $i =  $_POST["start"] ; $i <=  $_POST["end"] ; $i = $i +  $_POST["increment"] )
                {
                    print("<tr>");
                    print("<th>$i</th>");
                    print("<td>" . (($i * 9) / 5) + 32  . "</td>" ) ;
                    print("</tr>");
                }
                print("</table>\n");
            }
        ?>
    </body>
</html>
