<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables & Contants</title>
</head>
<body>
    
<?php 

//Variable Declaration
$name="Dev";
$mobile=9087654321;
$marks=80.5;

$x=10;
$y=5;

$p=100;
$q=200;

//We can not access variables which is declared outside function into Inside Function.
function variable(){
    echo "<br> My name : $name Mobile number is : $mobile Marks : $marks";
}
variable();
// We can access variables OUTSIDE function only which is declared OUTSIDE function
echo "<br><br>My name : $name, Mobile number is : $mobile, Marks : $marks";



// We can access variables INSIDE function only which is declared INSIDE function
function variable_2(){
    $age=25;
    echo "<br><br>My age is : $age";
}
variable_2();



// The GLOBAL KEYWORD is used to access a global variable from within a function.
// To do this, use the global keyword before the variables (inside the function) 
function addition(){
    global $x,$y;
    $y = $x + $y;
}
addition();
echo "<br><br>Addition is :" . $y . "<br>";



// PHP also stores all global variables in an array called $GLOBALS[index]. 
// The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
function arrays() {
    $GLOBALS['q'] = $GLOBALS['p'] + $GLOBALS['q'];
}

 arrays();
 echo "<br>Addition is :" . $q . "<br>";



//  STATIC KEYWORD
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}
  
  echo"<br>";
  myTest();
  echo"<br>";
  myTest();
  echo"<br>";
  myTest();

?>



</body>
</html>