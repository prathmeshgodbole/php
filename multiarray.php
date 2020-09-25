<?php 
//Multi diamensional array

$students=[
    ["dev","pune","10000"],
    ["bob","mumbai","20000"],
    ["jack","delhi","30000"]
];


//Multidimensional Associative Array
$students_two=[
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
    <title>MultiArray</title>
</head>
<body>
    
    <div>
    <?php
    
    echo $students;
    echo "<br>";
    echo $students[0][0];
    echo "<br>";
    echo $students[1][0];
    echo "<br>";
    echo $students[2][0];
    echo "<br>";
    echo count($students);
    echo "<br>";

    //push
    $students[]=["Joe","US","40000"];
    echo $students[3][0];
    echo "<br>";

    array_push($students,["Mak","AUS","50000"]);
    echo $students[4][0];
    echo "<br>";
    echo count($students);
    echo "<br>";

    echo "<br>"."Multidimensional Array :";
    echo "<br>";
    print_r($students);
    echo "<br>";

    
    //multidimensional Associative Array
    echo "<br>"."Multidimensional Associative Array :";
    echo "<br>";
print_r($students_two);
echo "<br>";


//pop array elements
echo "<br>"."Popped Array :";
echo "<br>";
$popped=array_pop($students_two);
print_r($popped);
echo "<br>";


//using for loop
for($row=0; $row<5; $row++){
echo "<p><b>Row $row</b></p>";
echo "<ul>";
    for($col=0; $col<3; $col++){
        echo "<li>".$students[$row][$col]."</li>";

    }
    echo "</ul>";
}


    ?>
    </div>

</body>
</html>