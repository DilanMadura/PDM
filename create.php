<?php


include ("db_connect.php");
//$users = "user_name";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['S_Regno']) && isset($_POST['Name']) && isset($_POST['course']) && isset($_POST['Address']) && isset($_POST['Email']) &&  isset($_POST['contact']) && isset($_POST['password'])&& isset($_POST['bday'])) {
	$S_Regno = ($_POST['S_Regno']);
	$Name = $_POST['Name'];
	$course = $_POST['course'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	$bday = $_POST['bday'];
	//
	//Get MD5 hash of password
	//$password = md5($_POST['password']);
	//Check to see if username exists
	//$sql = mysql_query("SELECT username FROM usersystem WHERE username = '".$username."'");
	//if (mysql_num_rows($sql)>0)
	//{
	//die (&quot;Username taken.&quot;);
	//}

	$sql = "INSERT INTO student (S_Regno, Name, course,Address,Email,contact,password,Age) VALUES ('$S_Regno', '$Name', '$course','$Address','$Email','$contact','$password','$bday'  )";
	$res = mysqli_query($conn, $sql);
//$count = mysqli_num_rows($res);
	//if ($count == 1) {
		//$_SESSION['logged_user'] = $email;
		//header("Location: Student.php");
	//}
	header("Location: Student.php");
}
else
{
		echo "Login Error";
}

?>







