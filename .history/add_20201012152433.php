<?php

//GET Method
// if(isset($_GET['submit'])){
// echo $_GET['email'];
// echo $_GET['title'];
// echo $_GET['ingredients'];
// }

//POST Method
// if(isset($_POST['submit'])){
//     echo $_POST['email'];
//     echo $_POST['title'];
//     echo $_POST['ingredients'];
//     }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('template/header.php');?>

<section class="container grey-text">
    <h4 class="center">Add Pizza</h4>
        <form action="add.php" method="POST" class="white">
            <label>E-mail :</label>
            <input type="text" name="email" >
            <label>Pizza Title :</label>
            <input type="text" name="title" >
            <label>Ingredients (comma seprated) :</label>
            <input type="text" name="ingredients" >
             <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
              </div>
        </form>
</section>

<?php include('template/footer.php');?>


</html>