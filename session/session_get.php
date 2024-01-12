<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       session_start();
       echo "welcome " .  $_SESSION["username"];
       echo"<br>";
       echo" you loves to playing ".$_SESSION["hobby"];
       
    ?>
</body>
</html>