<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8" />
            <title>Temperature Conversion</title>
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
            else
            {
                $type = $_POST["trasfer"];
                if($type == "f2c")
                {
                    print("<h1>Temperature Conversion</h1>\n");
                    print("<table>\n");
                    print("<tr>\n"); // table row for the heading
                    print ("<th>Fahrenheit </th>");
                    print ("<th>Celsius </th>");
                    print("</tr>\n"); // end of the heading row
                    for ( $i =  $_POST["start"] ; $i <=  $_POST["end"] ; $i = $i +  $_POST["increment"] )
                    {
                        print("<tr>");
                        print("<th>$i</th>");
                        print("<td>" . ((($i-32) / 9) * 5)  ."</td>" ) ;
                        print("</tr>");
                    }
                    print("</table>\n");
                }
                if($type == "c2f")
                {
                    print("<h1>Temperature Conversion</h1>\n");
                    print("<table>\n");
                    print("<tr>\n"); // table row for the heading
                    print ("<th>Celsius </th>");
                    print ("<th>Fahrenheit </th>");
                    print("</tr>\n"); // end of the heading row
                    for ( $i =  $_POST["start"] ; $i <=  $_POST["end"] ; $i = $i +  $_POST["increment"] )
                    {
                        print("<tr>");
                        print("<th>$i</th>");
                        print("<td>" . ((($i * 9) / 5) + 32)  . "</td>" ) ;
                        print("</tr>");
                    }
                    print("</table>\n");
                }
            }
        ?>
    </body>
</html>
