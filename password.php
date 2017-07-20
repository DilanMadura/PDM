<?php
$_SESSION["userId"] = "24";
$conn = mysqli_connect("localhost","root","");
mysqli_select_db("phppot_examples",$conn);
if(count($_POST)>0) {
$result = mysql_query("SELECT *from student WHERE Name='" . $_SESSION["userId"] . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysqli_query("UPDATE users set password='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>