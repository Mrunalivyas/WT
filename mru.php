<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial program using loop in php</title>
</head>
<body>
    <form method="post">
        Enter the number ;<br>
        <input type="text" name="number" id="no">
        <input type="Submit">
    </form>
<?php
    if($_POST)
    {
        
        $n = $_POST['number'];
        echo "name ypur $n:<br><br>";

        
    }
?>
</body>
</html>