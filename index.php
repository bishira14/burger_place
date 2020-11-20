<?php
 //this page retrives from database and outputs to html
  include('config/db_connect.php');

  // write query for all burgers
  $sql = 'SELECT title, ingredients, id FROM burgers';
  // make query and get result
  $result = mysqli_query($conn, $sql);
  // fetch the rows as an array
  $burgers = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result from memory
  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
   <?php include('header.php'); ?>
   <h2 class="text-center p-4">Burgers!</h2>
   <div class="container">
     <?php if(count($burgers) > 1){ ?>
     <p>There are currently <?php echo count($burgers) ?> burgers</p>
   <?php }else if(count($burgers) == 1){?>
     <p>There is currently <?php echo count($burgers) ?> burger</p>
     <?php }else{?>
     <p>There are currently <?php echo count($burgers) ?> burgers</p>
     <?php }?>


     <div class="row">
       <?php foreach($burgers as $burger){?>
         <div class="col-md-4 cards">
           <div class="card text-center ">
             <img class="card-img-top burgers" src="img/burger_img.png" alt="Card image cap">
             <div class="card-body">
               <ul class="">
                 <li class="h6"><?php echo htmlspecialchars($burger['title']);?></li>
                 <?php foreach(explode(',' , $burger['ingredients']) as $ing){?>
                   <li class=""><?php echo htmlspecialchars($ing); ?></li>
                 <?php };?>
                 </ul>
                <div class="card-action text-right">
                  <a class="brand-text" href="details.php?id=<?php echo $burger['id']?>">more info</a>
                </div>
             </div>
           </div>
         </div>
       <?php }; ?>


     </div>
   </div>
   <?php include('footer.php'); ?>
  </body>
</html>
