<?php

//numbers
//strings
//loosely vs strictly 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean & Comparison</title>
</head>
<body>
    
<div>

<?php

//numbers
echo "NUMBERS"."<br/>";
echo 5 == 5;
echo "<br/>"; 
echo 5 == 10; 
echo "<br/>";
echo 5 > 10; 
echo "<br/>";
echo 5 >= 5; 
echo "<br/>";
echo 5 <= 10;
echo "<br/>";
echo 5 != 10;
echo "<br/>";

//strings
echo "<br/>"."STRINGS"."<br/>";
echo "dev" == "dev";
echo "<br/>";
echo "dev"=="Dev"; 
echo "<br/>";

//lose vs strictly
echo "<br/>"."LOSE vs STRICTLY"."<br/>";
echo 5 =="5";
echo "<br/>";
echo 5 =="10";
echo "<br/>";
echo 10 =="10";
echo "<br/>";
echo 5 === "5";
echo "<br/>";

?>

</div>

</body>
</html>