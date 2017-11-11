<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
        $dirname = "archive" ;
        if ( !IsSet($_POST["action"]) || $_POST["action"] == "goback" )
        {
        ?>
            <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
        <?php
            $filenames = scandir ($dirname);
            for ($i = 0; $i < count($filenames); $i++)
            {
                if ($filenames[$i] != "." && $filenames[$i] != "..")
                {
                    if ( is_file ($dirname . "/" . $filenames[$i]))
                    {
                        print ("<input type=\"checkbox\" name=\"namefile[]\" 
                                value=\"$filenames[$i]\" />
                                <a href= \" $dirname/$filenames[$i] \" >
                                $filenames[$i]</a><br />\n" );
                    }
                }
            }
        ?>
            <input type="submit" name="action" value="delete" />
            <input type="submit" name="action" value="rename" />
            <input type="submit" name="action" value="upload" />
            </form>
        <?php
        }
        
            else if( $_POST["action"] == "upload")
            {
        ?>
                <h1>upload a file to archive</h1>
                <form enctype="multipart/form-data" action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
                <!-- MAX_FILE_SIZE must be larger than the expect file size -->
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000000" />
                File to be uploaded: <input name="myfile" type="file" />
                <input type="submit" name="action" value="doupload" />
                </form>
        <?php
            }
            else if( $_POST["action"] == "doupload")
            {
                $uploaddir = 'archive';
                if ( !Is_Dir( $uploaddir ) )
                {
                    mkdir( $uploaddir );
                }
                $uploadname = $uploaddir . "/" . basename($_FILES['myfile']['name']);
                if ( file_exists( $uploadname ) )
                {
                    print ("Upload not done! File already exist!<br />\n");
                }
                else if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadname ))
                {
                    print ("File uploaded successfully.<br>\n");
                    print ("File name on client: " . $_FILES['myfile']['name'] . "<br>\n");
                    print ("File type as passed by browser: " . $_FILES['myfile']['type'] . "<br>\n");
                    print ("File size: " . $_FILES['myfile']['size'] . "<br>\n");
                    print ("File name on server: $uploadname<br>\n");
                }
                else
                {
                    print ("File uploaded may be corrupted!<br>\n");
                    print ("Error code: " . $_FILES['myfile']['error'] . "<br>\n");
                }
        ?>
                <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
                <input type="submit" name="action" value="goback" />
                </form>
        <?php
            }
            else if( $_POST["action"] == "rename")
            {
                $dirname = "archive" ;
                $fromfile = $_POST["namefile"] ;
        ?>        
                <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
        <?php            
                if (count($fromfile)==1)
                {
                    print("You want to rename $fromfile[0] to\n");
        ?>
                    <input type="hidden" name="fromfile" value="<?php print $fromfile[0] ?>"/>
                    <input type="text" name="tofile" />
                    <input type="submit" name="action" value="dorename" />
                    <input type="submit" name="action" value="goback" />
                    </form>
        <?php
                }
                else
                {
                    print("You can only modify one file.<br>\n");
                    print("<input type=\"submit\" name=\"action\" value=\"goback\" />");
                }
            }
            else if ($_POST["action"] == "dorename")
            {
                $fromname = $dirname . "/" . $_POST["fromfile"] ;
                $toname = $dirname . "/" . $_POST["tofile"] ;
                if ( rename( $fromname, $toname ) )
                {
                    print ("File renamed!<br />\n") ;
                }
                else
                {
                    print("Failed to rename<br />\n");
                }
        ?>
                <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
                <input type="submit" name="action" value="goback" />
                </form>
        <?php
            }
            
            else if( $_POST["action"] == "delete")
            {
                $dirname = "archive" ;
                $delfile = $_POST["namefile"] ;
                for ($i = 0; $i < count($delfile); $i++)
                {
                    if ( unlink(  $dirname . "/" . $delfile[$i] ))
                    {
                        print("$delfile[$i] deleted<br />\n");
                    }
                    else 
                    {
                        print("Delete $delfile[$i] error <br />\n");
                    }
                }
        ?>
                <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="POST">
                <input type="submit" name="action" value="goback" />
                </form>
        <?php
            }
        ?>
    </body>
</html>
