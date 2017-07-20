<?php

include ("db_connect.php");
//$users = "user_name";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['submit'])){

	$Subject = $_POST["subject"];
	$Date = $_POST["Date"];
	$Time = $_POST["Time"];
	$Time= $_POST["Num"];

	$sql = "INSERT INTO hallarrangement(Subject, Date, Time, Number) VALUES ('$Subject', '$Date', '$Time', '$Time')";
	$res = mysqli_query($conn, $sql);
	//$count = mysqli_num_rows($res);
	//if ($count == 1) {
		//$_SESSION['logged_user'] = $email;
		//header("Location: studentpage.php");
	//}
	
}
else
{
		echo "Login Error";
}

?>







