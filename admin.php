<?php

include ("db_connect.php");
//$user = "uname";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['submit'])){

	$uname = $_POST['uname'];
	$password = $_POST['password'];

	$sql = "SELECT name,password FROM myadmin WHERE Name = '$uname' && password='$password'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if ($count == 1) {
		//$_SESSION['logged_user'] = $email;
		header("Location: student.php");
	}
	
}
else{
		echo "Login Error";
	}

?>



