<?php

include ('main.php');

echo"<br>";

require('main.php');

echo "<br>Hellow....";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCLUDE-REQUIRE</title>
</head>
<body>
    <?php 
    require('student.php');
    ?>
</body>
</html>