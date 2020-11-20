<?php

include('config/db_connect.php');

$title = $email = $ingredients = '';
$errors = array('email'=>'', 'title'=>'', 'ingredients'=> '' );
if(isset($_POST['submit'])){
  //check email
  if(empty($_POST['email'])){
    $errors['email'] = 'an email is required </ br>';
  }else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'email must be a valid email address';
    }
  }
  //check title
  if(empty($_POST['title'])){
    $errors['title'] = 'A title is required </ br>';
  }else{
    $title = $_POST['title'];
    if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
        $errors['title'] = 'Title must be letters and spaces and only';
    }
  }
  //check ingredients
  if(empty($_POST['ingredients'])){
   $errors['ingredients'] = 'at least one ingredient is required </ br>';
   }else{
   $ingredients = $_POST['ingredients'];
   if(!preg_match('/^([a-zA-Z\d]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
     $errors['ingredients'] = 'Ingredients must be a comma seperated list';
   }
   }

   if(array_filter($errors)){
     //echo 'errors in the form';
   }else{
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $title = mysqli_real_escape_string($conn, $_POST['title']);
     $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

     //create sql
     $sql = "INSERT INTO burgers(title,email,ingredients) VALUES('$title','$email','$ingredients')";
     if(mysqli_query($conn, $sql)){
       //success
       //echo 'form is valid'
       header('Location: index.php');
     } else{
       //error
       echo 'query error: ' . mysqli_error($conn);

     }

   }//end of post check
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <?php include('header.php'); ?>
   <section class="container">
      <p class="text-center title-brand p-3">Add a Burger</p>
      <form class="bg-white order_form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="text-danger err"><?php echo $errors['email'] ?></div>
        <label>Burger Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="text-danger err"><?php echo $errors['title'] ?></div>
        <label>Ingredients (comma seperated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="text-danger err"><?php echo $errors['ingredients'] ?></div>
        <div class="text-center">
          <input type="submit" name="submit" value="submit" class="btn brand">
        </div>
      </form>
   </section>
   <?php include('footer.php'); ?>
</html>
