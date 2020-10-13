<?php

//connect to database 

$conn=mysqli_connect('localhost','prathmesh','prathmesh1181995','pizza_hut');

//check connection
if(!$conn){
    echo 'Connection Error '. mysqli_connect_error();
}

//Write Query for all type pizzas
// $sql='SELECT id,title,ingredients FROM pizzas';
$sql='SELECT id,title,ingredients,email FROM pizzas ORDER BY created_at';

//Make Query & get result
$result=mysqli_query($conn,$sql);

//fetch the resulting rows as an array
$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close_connection
mysqli_close($conn);

// print_r($pizzas);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('template/header.php');?>

<h4 class="center grey-text">Pizzas..!</h4>
    <div class="container">
        <div class="row">
                <?php foreach($pizzas as $pizza){?> 
                         <div class="col s6 md3">
                             <div class="card z-depth-0">
                                  <div class="card-content center">
                                      <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                                      <div><?php echo htmlspecialchars($pizza['ingredients']);?></div>
                                      <div><?php echo htmlspecialchars($pizza['email']);?></div>
                                  </div>
                                 <div class="card-action center-align">
                                    <a class="brand-text" href="#">More_Info</a>
                                 </div>
                            </div>
                         </div>
                <?php } ?>
        </div>
    </div>

<?php include('template/footer.php');?>
</html>