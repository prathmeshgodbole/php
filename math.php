<?php 

//pi()
//min(), max()
//abs()
//sqrt()
//round()
//random()
$num=-5.59;
$a=16;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    
<div>

<?php 
echo pi();
echo "<br>";

echo (min(10,20,30,5,3,2));
echo "<br>";

echo (max(10,20,30,5,3,2));
echo "<br>";

echo abs($num);
echo "<br>";

echo sqrt($a);
echo "<br>";

echo round($num);
echo "<br>";

echo rand(10,100);
echo "<br>";
?>

</div>
    
</div>

</body>
</html>