
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
    Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>HTML</title>
    <meta name="description" content="">
    <meta name="author" content="">

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
    <ul style="left:650px">
          
          
          <li><a href="setting.html">Setting</a></li>
          <li><a href="aboutus.html">About</a></li>         
          <li><a href="contactus.php">Contact Us</a></li>
         
		     

          
    </ul> 
      <a href="login1.php"style="color: #6699ff;text-decoration: none;left: 1100px;position: absolute;top: 10px">Log Out</a>   
	
    </div>  
    
    <div id="a5"><img src="home and calander.jpg"style="width: 1200px;height: 480px;" /></div>
    
    <div id="a4"><a href="home and calander.html"style="text-decoration: none;font-size: 18px;color: #ffffff">Loging</a> > Lecturer Page</div>
    
    
    <p style="top: 200px ;color: #000033;left: 550px;position: absolute;font-size: 30px">Add time table</p>
    
    		<div style="position: absolute;top:300px;left: 180px;text-align: center;height: 300px;width: 1000px;height: 500px">
			
			<form action="activity.php" method="post">
				<table style="width: 400px;height: 200px;font-size: 20px;position:absolute">
					<tr>
						<td>Course</p></td>
						<td><select type="text" name="course" id="course"style="width: 200px">
								<option value="Faculty Of Computring">Faculty Of Computring</option>
								<option value="Faculty Of Business">Faculty Of Business</option>
								<option value="Faculty Of Enginerering">Faculty Of Enginerering</option>
								<option value="Faculty Of Medicing">Faculty Of Medicing</option>
							</select>
						<td>
					</tr>
					<tr>
						<td>Year</td>
						<td><select type="text" name="year" id="year"style="width: 200px">
								<option value="1st Year">1st Year</option>
								<option value="2nd Year">2nd Year</option>
								<option value="3rd Year">3rd Year</option>
								<option value="4th Year">4th Year</option>
							</select>
						<td>
						
					</tr>
					<tr><td>Semester</td>
						<td><select type="text" name="semester" id="semester"style="width: 200px">
								<option value="1st Semester">1st Semester</option>
								<option value="2nd Semester">2nd Semester</option>
							</select>
						</td>
					</tr>
					<tr>
					<tr>
						<td>Subject</td>
						<td><select type="text" name="subject" id="subject"style="width: 200px">
								<option value="ITA">ITA</option>
								<option value="SETM">SETM</option>
								<option value="MIT">MIT</option>
								<option value="SPD">SPD</option>
								<option value="DBMS-1">DBMS-1</option>
								<option value="DBMS-2">DBMS-2</option>
								<option value="Se-1">SE-1</option>
								<option value="SE-2">SE-2</option>
								<option value="IPE">IPE</option>
								<option value="CNDI">CNDI</option>
								<option value="CDAP">CDAP</option>
								<option value="DAA">DAA</option>
								
							</select>
						</td>
					</tr>
				</table>


				<table style="width: 700px;height: 200px;font-size: 20px;padding-left:500px">
					<tr>
						<td>Date</p></td>
						<td style="padding-left:50px"><input type="date" name="date" id="date"style="width: 200px"/></td>
					</tr>
					<tr>
						<td>Time</td>
						<td style="padding-left:50px"><input type="time" name="time"style="width: 200px"/></td>
					</tr>
					<tr><td>Activity</td>
						<td style="padding-left:50px"><input type="text" name="activity" style="width: 200px"/></td>
					</tr>
					<tr><td style="width:200px">Hall Number</td>
						<td style="padding-left:50px"><input type="text" name="hall" style="width: 200px"/></td>
					</tr>					

				</table>				
					<input type="submit" name="submit" id="submit" style="width: 206px;height:40px;background-color: #000033;top: 250px ;font-size: 18px;left: 370px;position: absolute;color: #ffffff"value="submit" required=""/></td>
					
			</form>
			
		</div>
    
    
    
    
    
    
    
  </body>
</html>

