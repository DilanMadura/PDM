<?php 

require 'db_connect.php';

$phpid = $_POST['jid'];

$dbCon = new Db_Connect();

$conn = $dbCon->connect();

$sql = 'DELETE FROM users WHERE id = "phpid"';

if ($conn->query($sql) === TRUE) {

 echo "deleted successfully";

} else {

   echo $conn->error;

}

$conn->close()

?>