
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
    
	
	
	
  
	<script type="text/javascript">
	   <!--
		  // Form validation code will come here.
		  function validate()
		  {
			 var emailID = document.myForm.EMail.value;
				 atpos = emailID.indexOf("@");
				 dotpos = emailID.lastIndexOf(".");
				 
				 if (atpos < 1 || ( dotpos - atpos < 2 )) 
				 {
					alert("Please enter correct email ID")
					document.myForm.EMail.focus() ;
					return false;
				 }
			  
			  
			 if( document.myForm.Name.value == "" )
			 {
				alert( "Please provide your name!" );
				document.myForm.Name.focus() ;
				return false;
			 }

			 if( document.myForm.Address.value == "" )
			 {
				alert( "Please provide your name!" );
				document.myForm.Address.focus() ;
				return false;
			 }
			 
			 if( document.myForm.S_Regno.value == "" )
			 {
				alert( "Please provide your name!" );
				document.myForm.S_Regno.focus() ;
				return false;
			 }
			 return( true );
		  }
	</script>

	
	
	
	
	   
  </head>

  <body>
  

    <div id="a1">
    
    <div id="a2">City University Web Site</div> 
    <div style="position: absolute;left: 800px"><img src="student1.png" / style="width: 300px;height: 100px">
      </div>
  
    <div id="a3">
		<ul style="left: 550px">
          <li ><a href="login1.php">Home</a></li>         
          <li><a href="setting.php">Setting</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="aboutus.html">About Us</a></li> 
          
          
          
    </ul> 
    
      <a href="login1.php"style="color: #6699ff;text-decoration: none;left: 1100px;position: absolute;top: 10px">Log Out</a>   
    </div>  
    
    <div id="a5"><img src="key.jpg"style="width: 1200px;height: 480px;" /></div>
    
    <div id="a4">Home > Admin Page </div>
    
  
        <a id="a10"style="background-color:#666666;color:#ffffff">Student Registration</a> 
		<a href="studentlist.php"id="a10"style="left:300px">Student Information</a> 
        <a href="lecturer.php"id="a10"style="left:600px">Lectuer Registration</a>
        <a href="lecturelist.php"id="a10"style="left:900px">lecture Infromation</a>

	   
	

          
	
    
	 <div style="position: absolute;top: 250px;left: 150px">
	 	
	 	<form action="create.php" method="post"name="myForm" onsubmit="return(validate());">
	 		<table style="width: 500px;height: 320px;color: ">

	 			<tr>
	 				<td>Registration Number</td>
	 				<td><input type="text"id="S_Regno"name="S_Regno"style="width: 200px"required="" /></td>
	 			</tr>
	 			<tr>
	 				<td>Student Name</td>
	 				<td><input type="text"id="Name"name="Name"style="width: 200px"required="" /></td>
	 			</tr>
	 			<tr>
	 				<td>Course</td>
	 				<td>
	 					<select style="width: 200px"id="course"name="course">
	 						<option value="Faculty of Computing">Faculty of Computing</option>
	 						<option value="Faculty of Engineering">Faculty of Engineering</option>
	 						<option value="Faculty of Business">Faculty of Business</option>
	 						<option value="Faculty of Medicing">Faculty of Medicing</option>
	 					
	 					</select>
	 			</tr>
	 			
	 			<tr>
	 				<td>Email</td>
	 				<td><input type="text" id="Email"name="Email"style="width: 200px"required=""/></td>
	 			</tr>	 			
	 			 			
	 			<tr>
	 				<td>Address</td>
	 				<td><input type="text" id="Address"name="Address"style="width: 200px" required=""/></td>
	 			</tr>
	 			
	 			<tr>
	 				<td>Birth Day</td>
	 				<td><input type="date" id="bday"name="bday"style="width: 200px"required=""/></td>
				</tr>
	 			
	 		</table>
	 		
	 		
	 		<table style="left: 550px;position: absolute;top: 1px;width: 500px;height: 100px">
	 				 			
	 			<tr>
	 				<td>Contact Number</td>
	 				<td><input type="text" id="contact"name="contact"style="width: 200px"required=""/></td>
	 			</tr>	 			

 				<tr>
	 				<td>Password</td>
	 				<td><input type="text" id="password"name="password"style="width: 200px"required=""/></td>
	 			</tr>	 			
	 			
	 		</table>
	 		
	 	
	 		<input type="submit"style="width: 200px;height: 40px;position: absolute;left: 400px;top: 330px;background-color: #000033;color: #ffffff;border-radius: 10px"id="insert"name="insert"value="Save"onclick="myFunction()" />
		</form>
	 </div>



	  
    </div>
	
  </body>
</html>
