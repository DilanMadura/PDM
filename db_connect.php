<?php
$dbhost = "localhost"; 
$dbuname = "root";  
$dbpass = "";   
$dbname = "pdm";   

$conn = mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);

if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

?>

