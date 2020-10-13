<?php

//connect to database 

$conn=mysqli_connect('localhost','prathmesh','prathmesh1181995','pizza_hut');

//check connection
if(!$conn){
    echo 'Connection Error '. mysqli_connect_error();
}

//Write Query for all type pizzas
$sql='SELECT id,title,ingredients FROM pizzas';

//Make Query & get result
$result=mysqli_query($conn,$sql);

//fetch the resulting rows as an array
$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close_connection
mysqli_close($conn);

print_r($pizzas);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('template/header.php');?>

<?php include('template/footer.php');?>


</html>