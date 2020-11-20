<?php

//connect to database
$conn = mysqli_connect('localhost', 'uroot', 'uroot12', 'burger_place');

//check conncection
if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

?>
