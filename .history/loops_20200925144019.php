<?php 

//for loop
$cars= ["BMW","Audi","Jaguar"];



//foreach loop
$planes= ["AirIndia"=>"50","Kingfisher"=>"100","JetAirways"=>"150"];



//while loop
$students=[
    ["name"=> "dev","city"=> "pune","salary"=>"10000"],
    ["name"=> "bob","city"=> "mumbai","salary"=>"20000"],
    ["name"=> "jack","city"=> "delhi","salary"=>"30000"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
    
<div>

<?php 

//for loop
  for($i=0; $i < $cars_length; $i++){
    echo $cars[$i]."<br />";
  }

  //foreach loop
  echo "<br/>";
  foreach($planes as $x => $X_value){
    echo " Name : " . $x . " || " . " Count : " . $X_value . "<br />";
  }

//while loop
echo"<br>";
$x=0;
while($x < count($students)){
echo $students[$x]['name']." || ".$students[$x]['city']." || ".$students[$x]['salary']."<br/>";
$x++;
}



?>

</div>

</body>
</html>