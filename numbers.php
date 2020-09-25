<?php 

//operations (B I D M A S)
$pi=3.143;
$num="10";
$a=123e456;
$b="Hello";

 echo $num**2; //<I> i.e its rais to value same as ^

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>

    <div>
<?php 

//Incremental
echo "<br>".$num++;
echo "<br>".$num;

//Decremental
echo "<br>".$num--;
echo "<br>".$num;

//floor()
echo "<br>".floor($pi);

//ceil()
echo "<br>".ceil($pi);

//var_dump()
echo "<br>";
echo "<br>".var_dump($pi);
echo "<br>".var_dump($num);

//is_int(), is_integer(), is_long()
echo "<br>";
echo "<br>".var_dump(is_long($pi));

//is_float(), is_double()
echo "<br>";
echo "<br>".var_dump(is_float($pi));
echo "<br>".var_dump(is_double($pi));


//is_finite(), is_infinite()
echo "<br>";
echo "<br>".var_dump(is_finite($a));
echo "<br>".var_dump(is_infinite($a));

//is_nan()
echo "<br>";
echo "<br>".var_dump(is_nan($a));

//is_numeric()
echo "<br>";
echo "<br>".var_dump(is_numeric($b));

//Casting Strings and Floats to Integers >>> The (int), (integer), or intval() function are often used to convert a value to an integer.
echo "<br>";
$int_cast=(intval($pi));
echo $int_cast;

echo "<br>";
$int_cast=(int)$b;
echo $int_cast;

?>
</div>

</body>
</html>