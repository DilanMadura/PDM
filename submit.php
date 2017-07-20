<?php
$name=$_POST['name'];
$email=$_POST['email'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];

$body = "this is my \n\n $Message";
$from_new = "Email: $email";
mail($name,$Subject,$body,$headers);

echo "mess sent! <a href='contact.html'>click here </a> to send another email";



?>