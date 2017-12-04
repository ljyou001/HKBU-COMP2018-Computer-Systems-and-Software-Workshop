<head><title>Form Example</title>
</head>
<body>
<?php
if( !IsSet($_POST["name"]) )
{
?>
   <!-- This section of HTML code is part of the PHP if logic --!>
   <h1>Sample Form 1</h1>
   <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
   Name: <input type="text" name="name">
   Age: <input type="text" name="age">
   <input type="Submit" value="Click">
   </form>
<?php
}
else
{
?>
   <!-- This section of HTML code is part of the PHP else logic --!>
   Hi <?php echo $_POST["name"]?>,
   you are <?php echo $_POST["age"]?> years old
<?php
}
?>
</body>
</html>
