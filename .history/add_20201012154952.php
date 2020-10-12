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


//XSS Method
// if(isset($_POST['submit'])){
//     echo htmlspecialchars($_POST['email']);
//     echo  htmlspecialchars($_POST['title']);
//     echo  htmlspecialchars($_POST['ingredients']);
//     }


///POST FORM Validation
if(isset($_POST['submit'])){
    
    //for email
    if(empty($_POST['email'])){
        echo "<br>Enter Mail-ID :";
    }else{
        echo"<br>";
        echo htmlspecialchars($_POST['email']);
    }
    
    //for name
    if(empty($_POST['title'])){
        echo "<br>Enter title :";
    }else{
        echo"<br>";
        echo htmlspecialchars($_POST['title']);
    }
    
    //for ingredients
    if(empty($_POST['ingredients'])){
        echo "<br>Enter Atlist 1 Ingredient :";
    }else{
        echo"<br>";
        echo htmlspecialchars($_POST['ingredients']);
    }
    }

//end of POST form validation

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