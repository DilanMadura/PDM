
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
                 
          <li><a href="Setting.php">Setting</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          
          
          
    </ul> 
        <a href="login1.php"style="color: #6699ff;text-decoration: none;left: 1100px;position: absolute;top: 10px">Log Out</a>   
    </div>  
    
    <div id="a5"><img src="home and calander.jpg"style="width: 1200px;height: 480px;" /></div>
    
    <div id="a4"><a href="home and calander.html"style="text-decoration: none;font-size: 18px;color: #ffffff">Loging</a> > Student Page</div>
    
	
	</div>
    
    <p style="top: 220px ;color: #000033;left: 150px;position: absolute;font-size: 30px">Selact Student Courses</p>

	<a href="faculty_of_comutring.html"id="a8"style="top: 320px">Faculty Of Computring</a>
  	<a href="faculty of medicing.html"id="a8"style="top: 365px">Faculty of Medicing</a>
  	<a href="creat_new _acount.html"id="a8"style="top: 410px">Faculty Of Engineering</a>
  	<a href="creat_new _acount.html"id="a8"style="top: 455px">Faculty of Business</a>
  	<a href="creat_new _acount.html"id="a8"style="top: 500px">Faculty of Art</a>
  	

	<?php

		
		$conn = new mysqli("localhost","root","","pdm");

        if ($conn->connect_error) {

			die("Connection failed: " . $conn->connect_error);
		}

		else{

			echo "";
		} 

		$sql = 'SELECT * FROM timetable';
		  
		$result = $conn->query($sql);
	?>
		 
		<div style="position:absolute;left:550px;top:230px">
		<h2>Time Table</h2>
		<table border="1" style= "background-color: ; margin: 0 auto;width:700px;border-collapse: collapse;
}" >
			<thead>
				<tr>
				  <th>Course</th>
				  <th>Year</th>
				  <th>Semester</th>
				  <th>Subject</th>
				  <th>Date</th>
				  <th>Time</th>
				  <th>Hall Number</th>
				  <th>Activity</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
				
					if ($result) {

					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
							echo
							"<tr>
								<td>".$row['course']."</td>
								<td>".$row['year']."</td>
								<td>".$row['semester']."</td>	
								<td>".$row['subject']."</td>
								<td>".$row['date']."</td>
								<td>".$row['time']."</td>
								<td>".$row['hall']."</td>	
								<td>".$row['mesage']."</td>								
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
			
	
	
 		

      
  </body>
</html>

