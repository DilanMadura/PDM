<?php

include ("db_connect.php");
//$users = "user_name";
//if (isset($_GET['logout_button']) && $_GET['logout_button'] == "logout") {
//	session_unset();

if (isset($_POST['submit'])){

	$ename = $_POST['ename'];
	$mail = $_POST['mail'];
	$sub = $_POST['sub'];
	$msg = $_POST['msg'];

	$sql = "INSERT INTO contact(Name, Email, Subject, Message) VALUES ('$ename', '$mail', '$sub', '$msg')";
	$res = mysqli_query($conn, $sql);
	//$count = mysqli_num_rows($res);
	//if ($count == 1) {
		//$_SESSION['logged_user'] = $email;
		//header("Location: studentpage.php");
	//}
	header("Location: contactus.php");
	
}/*
else
{
		echo "Login Error";
}
$body = "this is my \n\n $msg";
$from_new = "mail: $mail";
mail($ename,$sub,$body,$from_new);

echo "mess sent! <a href='contact.html'>click here </a> to send another email";
*/
?>



