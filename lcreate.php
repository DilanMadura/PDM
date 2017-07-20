<?php

include ("db_connect.php");
//$users = "user_name";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['lecture_name']) && isset($_POST['lec_id']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['password'])) {
	$lecture_name = ($_POST['lecture_name']);
	$lec_id = $_POST['lec_id'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$password = $_POST['password'];
	
	//
	//Get MD5 hash of password
	//$password = md5($_POST['password']);
	//Check to see if username exists
	//$sql = mysql_query("SELECT username FROM usersystem WHERE username = '".$username."'");
	//if (mysql_num_rows($sql)>0)
	//{
	//die (&quot;Username taken.&quot;);
	//}

	$sql = "INSERT INTO lecture (lecture_name, lec_id,email,address,password) VALUES ('$lecture_name', '$lec_id','$email','$address','$password')";
	$res = mysqli_query($conn, $sql);
//$count = mysqli_num_rows($res);
	//if ($count == 1) {
		//$_SESSION['logged_user'] = $email;
		//header("Location: Student.php");
	//}
	
}
else
{
		echo "Login Error";
}

?>







