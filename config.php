<?php 

$server="localhost:3307";
$username="root";
$password="jirrasrivani";
$db="id17252605_sparks_bank";
// $db="arcode_Harry";
// $server="localhost:3307";
// $username="root";
// $password="jirrasrivani";

// $con=mysqli_connect($server,$username,$password,$db);
$conn= mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
