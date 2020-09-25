<?php 

//indexed arry
$cars= ["BMW","Audi","Jaguar"];
$cars_length=count($cars);

//associative array
$planes= ["AirIndia"=>"50","Kingfisher"=>"100","JetAirways"=>"150"];
$planes_length=count($planes);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <div>
    
    <?php 

    //Indexed Array
    echo "<br>"."INDEXED ARRAY";
    echo $cars;
    echo "<br>";

    echo $cars[0];
    echo "<br>";

    echo count($cars);
    echo "<br>";

    //looping for indexed array
    echo "<br>";
    for($x=0; $x < $cars_length; $x++){
    echo $cars[$x];
    echo "<br>";
}

   //Push array elements into array
   $cars[]="Honda";
   array_push($cars,"Suzuki");
   echo "<br>";
   echo count($cars);
   echo "<br>";

   print_r($cars);
   echo "<br>";


//Associative Array
echo "<br>"."<br>"."ASSOCIATIVE ARRAY";
echo $planes;
echo "<br>";

echo $planes['AirIndia'];
echo "<br>";

echo $planes_length;

//looping for Associative Array
echo "<br>";
echo "<br>";

foreach($planes as $x => $x_value){
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>"; 
}

//push elements into array
$planes["Airforce"]="300";
$planes["Sukhoi"]="500";
echo "<br>"; 
echo count($planes);
echo "<br>"; 
print_r($planes);


//Merge Two Arrays
echo "<br>"; 
echo "<br>"; 
echo "MERGE TWO ARRAYS";
echo "<br>"; 
$both=array_merge($cars,$planes);
print_r($both);
echo "<br>"; 
echo count($both);


    ?>
    
    </div>
</body>
</html>