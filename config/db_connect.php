<?php

//connect to database
// $conn = mysqli_connect('localhost', 'uroot', 'uroot12', 'burger_place');
$conn = mysqli_connect('ivgz2rnl5rh7sphb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com', 'nqg8w1bhm1sna4h6', 'o1g16w757h23lnml', 'rddrf21ag8s5mv5v');

//check conncection
if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

?>
