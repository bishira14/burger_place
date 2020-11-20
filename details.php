<?php

include('config/db_connect.php');

if(isset($_POST['delete'])){
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

  $sql = "Delete FROM burgers WHERE id = $id_to_delete";

 // below to check if record(data) has been deleted
  if(mysqli_query($conn, $sql)){
    //success
    header('Location: index.php');
  }else{
    //failure
    echo'query error' . mysqli_error($conn);
  }
}
//check GET request id param
if(isset($_GET['id'])){

  $id = mysqli_real_escape_string($conn, $_GET['id']);

  //make sql
  $sql = "SELECT * FROM burgers WHERE id = $id";

  //get the query result
  $result = mysqli_query($conn, $sql);

  //fetch result in array format
  $burger = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('header.php');?>
<div class="container text-center p-4">
  <?php if($burger): ?>
  <p class="title-brand"><?php echo htmlspecialchars($burger['title']); ?></p>
  <p>Created by: <?php echo htmlspecialchars($burger['email']) ?></p>
  <p><?php echo date($burger['created_at']); ?></p>
  <h4>Ingredients</h4>
  <p><?php echo htmlspecialchars($burger['ingredients']); ?></p>
  <!-- delete form-->
  <form action="details.php" method="POST">
    <input type="hidden" name="id_to_delete" value="<?php echo $burger['id']?>">
    <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
  </form>
  <?php else: ?>
    <h5>No such burger</h5>
  <?php endif; ?>

</div>
<?php include('footer.php');?>
</html>
