<?php
	mysql_connect('localhost','root','');
	mysql_select_db('pdm')
	
	$sql="SELECT * FROM hallarrangement";
	 
	 $records=mysql_query($sql)
?>




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
          <li ><a href="">Home</a></li>         
          <li><a href="Setting.html">Setting</a></li>
          <li><a href="contactus.html">Contact Us</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          
          
          
    </ul> 
        <a href="login.php"style="color: #6699ff;text-decoration: none;left: 1100px;position: absolute;top: 10px">Log Out</a>   
    </div>  
    
    <div id="a5"><img src="home and calander.jpg"style="width: 1200px;height: 480px;" /></div>
    
    <div id="a4"><a href="home and calander.html"style="text-decoration: none;font-size: 18px;color: #ffffff">Loging</a> > Student Page</div>
    
    
    <p style="top: 220px ;color: #000033;left: 150px;position: absolute;font-size: 30px">Selact Student Courses</p>
	<a href="faculty_of_comutring.html"id="a8"style="top: 300px">Faculty Of Computring</a>
  	<a href="faculty of medicing.html"id="a8"style="top: 345px">Faculty of Medicing<div > </div></a>
  	<a href="creat_new _acount.html"id="a8"style="top: 390px">Faculty Of Engineering<div > </div></a>
  	<a href="creat_new _acount.html"id="a8"style="top: 435px">Faculty of Business<div > </div></a>
  	<a href="creat_new _acount.html"id="a8"style="top: 480px">Faculty of Art<div > </div></a>
  	


	  <div style="position:absolute;left:600px;top:400px">
      <table border="2" style= "background-color: #84ed86; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Subject</th>
          <th>Date</th>
          <th>Time</th>
          <th>Hall Number</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $records ) ){
            echo
            "<tr>";
			echo	"<td>".$row['Subject']."</td>;
			echo	"<td>".$row['Date']."</td>;
			echo	"<td>".$row['Time']."</td>;
			 echo   "<td>".$row['Number']."</td>;
            echo</tr>;
          }
        ?>
      </tbody>
    </table>
	</div>
 
	
	
 		

    </div>  
  </body>
</html>

