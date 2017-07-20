
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
		<a id="a10"style="left:300px;background-color:#666666;color:#ffffff">Student Information</a> 
        <a id="a10"style="left:600px"href="lecturer.php">Lectuer Registration</a>
        <a href="lecturelist.php"id="a10"style="left:900px">lecture Infromation</a>


		
	<?php

		
		$conn = new mysqli("localhost","root","","pdm");

        if ($conn->connect_error) {

			die("Connection failed: " . $conn->connect_error);
		}

		else{

			echo "";
		} 

		$sql = 'SELECT * FROM student';
		  
		$result = $conn->query($sql);
	?>
		 
		<div style="position:absolute;left:50px;top:230px">
		<h2>Student Information</h2>
		<table border="1" style= "background-color: ; margin: 0 auto;width:1100px;border-collapse: collapse;
}" >
			<thead>
				<tr>
				  <th>Student ID</th>
				  <th>Name</th>
				  <th>Course</th>
				  <th>Address</th>
				  <th>Email</th>
				  <th>Birth Day</th>
				  <th>Cunt-Num</th>
				  <th>Password</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
				
					if ($result) {

					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
							echo
							"<tr>
								<td>".$row['S_Regno']."</td>
								<td>".$row['Name']."</td>
								<td>".$row['course']."</td>	
								<td>".$row['Address']."</td>
								<td>".$row['Email']."</td>
								<td>".$row['Age']."</td>
								<td>".$row['contact']."</td>	
								<td>".$row['password']."</td>								
							</tr>\n";
						}
						
						} 
						else {
					
							echo "no results was found"; 

						}

						} else {

							echo $conn->error;

						} 

					$conn->close();
					
					?>
				</tbody>
			</table>
			</div>	
		
		
  
	 
	  
    </div>  
  </body>
</html>
