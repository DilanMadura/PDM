<?php

include ("db_connect.php");
//$users = "user_name";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['insert'])){

	$m2 = $_POST["d2"];
	$m3 = $_POST["d3"];
	$m4 = $_POST["d4"];
	$m5 = $_POST["d5"];
	$m6 = $_POST["d6"];
	$m7 = $_POST["d7"];
	$m8 = $_POST["d8"];
	$m9 = $_POST["d9"];
	

	$sql = "INSERT INTO student(student_num, student_name, course, email, address, b_day, cont_num, password) VALUES ('$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9')";
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
		header("Location: Student.php");
}

?>







