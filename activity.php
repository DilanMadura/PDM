<?php

include ("db_connect.php");
//$users = "user_name";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['submit'])){
	
	$Course = $_POST["course"];
	$Year = $_POST["year"];
	$Semester = $_POST["semester"];
	$Subject = $_POST["subject"];
	$Date = $_POST["date"];
	$Time = $_POST["time"];
	$Activity = $_POST["activity"];
	$Hall= $_POST["hall"];

	$sql = "INSERT INTO timetable(course, year, semester, subject, date, time, mesage, hall) VALUES ('$Course', '$Year', '$Semester', '$Subject', '$Date', '$Time' , '$Activity', '$Hall')";
	$res = mysqli_query($conn, $sql);
	//$count = mysqli_num_rows($res);
	//if ($count == 1) {
		//$_SESSION['logged_user'] = $email;
		
	//}
	header("Location: add_time_table.php");

}

?>







