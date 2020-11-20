<?php

$file = 'quotes.txt';

//opening a file for reading
$handle = fopen($file, a+);

//read the file
echo fread($handle, filesize($file));
echo fread($handle, 112);

//read a single file
echo fgets($handle);
echo fgets($handle);

//read a single character
echo fgetc($handle);
echo fgetc($handle);

//writing to a file
write($handle,"\n Everything.popular.is.wrong");
//closing the file of reading
// fclose($handle);

//delete file
// unlink($file);

 ?>
