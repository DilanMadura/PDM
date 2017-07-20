<?php 

require 'db_connect.php';

$phpname = $_POST['jname'];  
$phadd = $_POST['jadd']; 
$phpcont = $_POST['jcont'];  
$phemail = $_POST['jemail']; 
$phbday = $_POST['jbday'];  
$phpnum = $_POST['jnum']; 
$phppas = $_POST['jpas'];  
$phpid = $_POST['jid'];


$dbCon = new Db_Connect();

$conn = $dbCon->connect();

$sql = 'INSERT INTO users (user_name,user_id,user_num,email,address,b_day,cont_num,password) VALUES ("'.$phpname.'","'.$phpid.'","'.$phpnum.'","'.$phpemail.'","'.$phpadd.'","'.$phpbday.'")';

if ($conn->query($sql) === TRUE) {

 echo "new record added";

 $id = $conn->insert_id;

} else {

   echo $conn->error;

}

$conn->close();

?>