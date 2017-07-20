<?php 

require 'db_connect.php';

$dbCon = new Db_Connect();

$conn = $dbCon->connect();

$sql = 'UPDATE tab SET name = "madu", age = "10" WHERE id = "5"';

if ($conn->query($sql) === TRUE) {

 echo "updated successfully";

} else {

   echo $conn->error;

}

$conn->close();

?>