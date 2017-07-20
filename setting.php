
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
    Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>HTML</title>
    <meta name="description" content="">
    <meta name="author" content="Dilan">

    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <link rel="stylesheet" href="my1.css" />
	
	
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>	
	
	
	
	
	
  </head>

  <body>
    <div id="a1">
    
    <div id="a2">City University Web Site</div> 
    <div style="position: absolute;left: 800px"><img src="student1.png" / style="width: 300px;height: 100px">
      </div>
  
    <div id="a3">
    <ul style="left: 650px">
                   
          <li><a >Setting</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          
          
          
    </ul> 
        <a href="login1.php"style="color: #6699ff;text-decoration: none;left: 1100px;position: absolute;top: 10px">Log Out</a>    
    </div>  
    
    <div id="a5"><img src="Setting.jpg"style="width: 1200px;height: 480px;" /></div>
    
    <div id="a4">Setting </div>
    
    <div id="a6">Change user Password </div>
	
	<div style="position: absolute;top: 270px;left: 300px">
		<p>To Change your password,Entter your currect password.after you have enter your new password.</p>
	</div>

	<div style="position: absolute;top: 320px;text-align: center;left: 400px">
		
		<form>
			<table style="width: 400px;height: 180px">
				<tr>
					<td>Current Password</td>
					<td><input type="password"name="currentPassword" /></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="password"name="newPassword" /></td>
				</tr>
				<tr>
					<td>Retype New Password</td>
					<td><input type="password"name="confirmPassword" /></td>
				</tr>
												
			</table>
			<input type="submit"style="width: 250px;height: 36px;position: absolute;top: 200px;left: 80px;font-size: 20px;background-color: #000066;color: #ffffff"value="Change" />
		</form>
	</div>	 
	  
    </div>  
  </body>
</html>
