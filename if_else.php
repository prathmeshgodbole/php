<?php

//if statement
//if else statement
//elseif statement
$students=[
    ["name" => "abc", "age" => 15, "salary" => 30000],
["name" => "pqr", "age" => 25, "salary" => 25000],
["name" => "xyz", "age" => 20, "salary" => 40000],
["name" => "bob", "age" => 35, "salary" => 15000],
["name" => "dev", "age" => 30, "salary" =>20000 ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_Else</title>
<body>
<div>
   <?php 

   foreach($students as $student){
   if($student["age"] < 10){
       echo $student["name"]. " || ". $student["age"]."<br/>";
   }
   else{
       echo "<br/>"."No result found";
   }
}

echo "<br/>"."<br/>"."ELSE_IF"."<br/>";

foreach($students as $student){
if($student["age"]>15 || $student["salary"]<25000){
    echo "<br/>".$student["name"]."||".$student["age"]."<br/>";
}
// elseif($student["age"]>15 && $student["salary"]<25000){
//     echo $student["name"]."||".$student["salary"]."<br/>";
// }else{
//     echo "No result Found";
// }

}
?> 
</div>



<div>

<h2>Listing </h2>
<ul>

<?php foreach($students as $student){ ?>

<?php if($student["age"]>25){ ?>

<li><?php echo $student["name"]; ?></li>

<?php } ?>

<?php } ?>
</ul>  

</div>

</head>
  
</body>
</html>