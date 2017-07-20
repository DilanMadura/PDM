
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
  

        <a href="student.php"id="a10" >Student Registration</a> 
		<a href="studentlist.php"id="a10"style="left:300px">Student Information</a> 
        <a id="a10"style="left:600px;background-color:#666666;color:#ffffff">Lectuer Registration</a>
        <a href="lecturelist.php"id="a10"style="left:900px">lecture Infromation</a>


  
	 <div style="position: absolute;top: 250px;left: 150px">
	 	<form method="post"action="lecturer_create.php">
	 		<table style="width: 500px;height: 320px;color: ">

	 			<tr>
	 				<td>Registration Number</td>
	 				<td><input type="text"id="reno"name="reno"style="width: 200px"required="" /></td>
	 			</tr>
	 			<tr>
	 				<td>Lecturer Name</td>
	 				<td><input type="text"id="lname"name="lname"style="width: 200px"required="" /></td>
	 			</tr>
	 			<tr>
	 				<td>Lecturer Type</td>
	 				<td>
	 					<select style="width: 200px"id="ltype"name="ltype">
	 						<option value="Sineor Lecturer">Sineor Lecturer</option>
	 						<option value="Lecturer">Lecturer</option>
	 						<option value="Assitent Lecturer">Assitent Lecturer</option>
	 					
	 					</select>
	 			</tr>
	 			
	 			 <tr>
	 				<td>Subject</td>
	 				<td><select name="subject" id="subject"style="width: 200px">
							<option value="English-1">English-1</option>
							<option value="English-2">English-2</option>
							<option value="DAA">DAA</option>
							<option value="ITA">ITA</option>
							<option value="SPD">SPD</option>
							<option value="SE-1">SE-1</option>
							<option value="SE-2">SE-2</option>
							<option value="ARRT">ARRT</option>
							<option value="CDM">CGM</option>
							<option value="DBMS-1">DBMS-1</option>
							<option value="DBMS-2">DBMS-2</option>
							<option value="ITP">ITP</option>
						</select>
					</td>
	 			</tr>
	 			 			
	 			 			
	 			<tr>
	 				<td>Address</td>
	 				<td><input type="text" id="address"name="address"style="width: 200px"required=""/></td>
	 			</tr>
	 			
	 			<tr>
	 				<td>Birth day</td>
	 				<td><input type="date" id="bday"name="bday"style="width: 200px"/></td>
				</tr>
	 			
	 		</table>
	 		
	 		
	 		<table style="left: 550px;position: absolute;top: 1px;width: 500px;height: 150px">
	 			<tr>
	 				<td>Email</td>
	 				<td><input type="text" id="email"name="email"style="width: 200px"required=""/></td>
	 			</tr>	

	
	 			<tr>
	 				<td>Contact Number</td>
	 				<td><input type="text" id="cont_num"name="cont_num"style="width: 200px"required=""/></td>
	 			</tr>	 			

 				<tr>
	 				<td>Password</td>
	 				<td><input type="text" id="passowrd"name="password"style="width: 200px"required=""/></td>
	 			</tr>	 			

	 		</table>
	 		
	 		<p id="demo"></p>
	 		<input type="submit"style="width: 200px;height: 40px;position: absolute;left: 400px;top: 330px;background-color: #000033;color: #ffffff;border-radius: 10px"id="insert"name="insert"value="Save"onclick="myFunction()"/>
	</form>
	 </div>
	 
	  
    </div>  
  </body>
</html>
