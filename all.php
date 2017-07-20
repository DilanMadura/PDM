<?php

include ("db_connect.php");
//$users = "user_name";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['insert'])){

	
	$reno = $_POST["reno"];
	$lname = $_POST["lname"];
	$ltype= $_POST["ltype"];
	$subject = $_POST["subject"];
	$email= $_POST["email"];
	$address = $_POST["address"];
	$bday= $_POST["bday"];
	$cont_num= $_POST["cont_num"];
	$password= $_POST["password"];	

	$sql = "INSERT INTO lecturer(reno, lname, ltype, subject, email, address, bday ,cont_num, password) VALUES ('$reno','$lname','$ltype','$subject','$email','$address','$bday','$cont_num','$password')";
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





if(isset($_POST["fullname"]) && isset($_POST["regNo"]) && isset($_POST["comment"])) { $name = $_POST["fullname"]; $regNumber = $_POST["regNo"]; $comment = $_POST["comment"]; } else { $error = "One or more fields are not filled"; echo $error; } if(isset($_POST["insert"])) { $insertString = "INSERT INTO ITA_Comments VALUES('$regNumber','$name','$comment')"; if(!mysql_query($insertString)) { die('Error : '.mysql_error()); } else { echo '<br/>'; echo '1 record added...'; }




