<?php
error_reporting(E_ALL ^ E_WARNING);
$con=mysqli_connect("localhost","root","","iwpproject"); 
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

?>
