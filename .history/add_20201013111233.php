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



//POST FORM Validation
// if(isset($_POST['submit'])){
    
// //for email
// if(empty($_POST['email'])){
//     echo "<br>Enter Mail-ID :";
// }else{
//     echo"<br>";
//     echo htmlspecialchars($_POST['email']);
// }

// //for name
// if(empty($_POST['title'])){
//     echo "<br>Enter title :";
// }else{
//     echo"<br>";
//     echo htmlspecialchars($_POST['title']);
// }

// //for ingredients
// if(empty($_POST['ingredients'])){
//     echo "<br>Enter Atlist 1 Ingredient :";
// }else{
//     echo"<br>";
//     echo htmlspecialchars($_POST['ingredients']);
// }
// }



//FORM mail_name_ingredients Validation 
// if(isset($_POST['submit'])){
    
// //for email
// if(empty($_POST['email'])){
//     echo "<br>Enter Mail-ID :";
// }else{
//     echo"<br>";
//     $email=$_POST['email'];
//     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
// echo"<br>Email must be VALIDE !!";
//     }
// }


// //for name
// if(empty($_POST['title'])){
//     echo "<br>Enter title :";
// }else{
// echo "<br>";
// $title=$_POST['title'];
// if(!preg_match("/^[a-zA-Z\s]+$/",$title)){
// echo"<br>Please Enter Correct Title :";
// }
// }


// //for ingredients
// if(empty($_POST['ingredients'])){
//     echo "<br>Enter Atlist 1 Ingredient :";
// }
// else{
//     echo "<br>";
// $ingredients=$_POST['ingredients'];
// if(!preg_match("/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/",$ingredients)){
// echo"<br>Ingredients must be comma seprated value :";
// }
// }

// }


//Showing ERRORS 
$title=$ingredients=$email='';
$errors =array('email'=>'','title'=>'','ingredients'=>'');

if(isset($_POST['submit'])){
    
//for email
if(empty($_POST['email'])){
    $errors['email']="Mail-ID Required :";
}else{
    echo"<br>";
    $email=$_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$errors['email'] = "Email must be VALIDE !!";
    }
}


//for name
if(empty($_POST['title'])){
    $errors['title'] = "<br> Title Required :";
}else{
echo "<br>";
$title=$_POST['title'];
if(!preg_match("/^[a-zA-Z\s]+$/",$title)){
    $errors['title'] = "<br>Please Enter Correct Title :";
}
}


//for ingredients
if(empty($_POST['ingredients'])){
    $errors['ingredients'] = "<br> Atlist 1 Ingredient Required:";
}
else{
    echo "<br>";
$ingredients=$_POST['ingredients'];
if(!preg_match("/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/",$ingredients)){
    $errors['ingredients'] = "<br>Ingredients must be comma seprated value :";
}
}
//Redirect 
if(array_filter($errors)){
    // echo 'Form has some errors : ';
}
else{
    // echo 'Form is Valid : ';
    header('location: temp-index.php');
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
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" >
            <div class="red-text">
            <?php 
            echo $errors['email']; 
            ?>
            </div>

            <label>Pizza Title :</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text">
            <?php echo $errors['title']; 
            ?>
            </div>

            <label>Ingredients (comma seprated) :</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text">
            <?php echo $errors['ingredients']; 
            ?>
            </div>

             <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
              </div>
        </form>
</section>

<?php include('template/footer.php');?>

</html>