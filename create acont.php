
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
    
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
	
   $(document).ready(function(){

        $("#insert").click(function(){

            var data_json = {
                    'jname': $("#name1").val(),
  					'jadd': $("#add1").val(),
  					'jcont': $("#cont1").val(),
  					'jemail': $("#email1").val(),
  					'jnum': $("#number1").val(),
  					'jpas': $("#pas1").val(),
  					'jid': $("#id1").val(),
                };

                $.ajax({

                    type: 'post',

                    url: "script.php",

                    data: data_json,

                    timeout: 10000, // sets timeout for the request (10 seconds)

                    error: function(xhr, status, error) {

                        alert('Error: ' + xhr.status + ' - ' + error);

                    },

                    success: function(result) {

                        alert(result);

                    }

                });
        });
   });
   
   

  </script>
    
    
   <script>
   	
   	
   	
   </script> 
    
    
    
  </head>

  <body>
    <div id="a1">
    
    <div id="a2">City University Web Site</div> 
    <div style="position: absolute;left: 800px"><img src="student1.png" / style="width: 300px;height: 100px">
      </div>
  
    <div id="a3">
    <ul style="left: 550px">
          <li ><a href="home and calander.html">Home</a></li>         
          <li><a href="Setting.html">Setting</a></li>
          <li><a href="contactus.html">Contact Us</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          
          
          
    </ul> 
    
      <a href="login.html"style="color: #6699ff;text-decoration: none;left: 1100px;position: absolute;top: 10px">Log Out</a>   
    </div>  
    
    <div id="a5"><img src="key.jpg"style="width: 1200px;height: 480px;" /></div>
    
    <div id="a4">Home > Admin Page >Create New Acount</div>
    
	 <div style="position: absolute;top: 220px;left: 150px">
	 	<form method="post"action="create.php">
	 		<table style="width: 500px;height: 320px;color: ">
	 			<tr>
	 				<td>User ID</td>
	 				<td><input type="text" id="d1"name="d1"/></td>
	 			</tr>
	 			<tr>
	 				<td>User Number</td>
	 				<td><input type="text"id="d2"name="d2" /></td>
	 			</tr>
	 			<tr>
	 				<td>User Name</td>
	 				<td><input type="text"id="d3"name="d3" /></td>
	 			</tr>
	 			<tr>
	 				<td>User Type</td>
	 				<td><input type="text"id="d4"name="d4" /></td>
	 			</tr>
	 			
	 			<tr>
	 				<td>Email</td>
	 				<td><input type="text" id="d5"name="d5"/></td>
	 			</tr>	 			
	 			 			
	 			<tr>
	 				<td>Address</td>
	 				<td><input type="text" id="d6"name="d6"/></td>
	 			</tr>
	 			
	 			<tr>
	 				<td>Birth day</td>
	 				<td><input type="date" id="d7"name="d7"/></td>
	 			</tr>	 			
	 			<tr>
	 				<td>Contact Number</td>
	 				<td><input type="text" id="d8"name="d8"/></td>
	 			</tr>	 			

 				<tr>
	 				<td>Password</td>
	 				<td><input type="text" id="d9"name="d9"/></td>
	 			</tr>
	 			
	 		</table>
	 		
	 		<input type="submit"style="width: 200px;height: 40px;position: absolute;left: 180px;top: 350px;background-color: #000033;color: #ffffff;border-radius: 10px"id="insert"name="insert" />
	 		<input type="button"style="width: 200px;height: 40px;position: absolute;left: 440px;top: 350px;background-color: #000033;color: #ffffff;border-radius: 10px" value="Delete"/>
	 		<input type="button"style="width: 200px;height: 40px;position: absolute;left: 700px;top: 350px;background-color: #000033;color: #ffffff;border-radius: 10px" value="Search"/>
	 	</form>
	 </div>
	 
	  
    </div>  
  </body>
</html>
