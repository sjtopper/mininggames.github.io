<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>Signup</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<style type="text/css">

		    	  body, html {
  height: 100%;
  margin: 0;
}
	body {
 		background-image: url("http://3.bp.blogspot.com/-eBgIdDLVN4I/TejUn-f9P3I/AAAAAAAAAI8/243XOBhnYs0/s1600/wallpaper-182372.jpg");
     
     	
     	margin: auto;
     	  height: 100%; 
 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
		}
       
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: black;
		background-color: lightblue;
         border-radius: 25px 25px 0px 25px;
		border-radius:;
		font-size: 15px;
	}
	.warning{
		font-size: 30px;
		color: red;
	}
	.warning2{
		font-size: 15px;
		color: red;
		margin:0;
		padding: 0; 
	}
 	#button:hover{
 		background-color: white;
 		color: lightblue;
 		font-size: 13px;
 		transition-duration: 1s;

 	}
	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
     #box{

		background-color: #e7feff;
		margin: auto;
		width: 300px;
		padding: 20px;
		border-radius: 25px 25px 25px 25px;
		margin-top: 40px;
		
		
	}
	#box:hover
{
        box-shadow: inset 0 0 0 8px #d2bfc4;
       
        border-radius: 0px;
       background:#f3e2c6;
        transition-duration: 0.5s;
         -webkit-transform: scale(1.25, 1.25);
  transform: scale(1.1, 1.1);


}
	.sign-up{
		
		  height: 200px;
  background-color: white; /* For browsers that do not support gradients */

		display: block;
		width: 130px;
		height: 50px;
		border-radius: 20px 20px 20px 20px;
		font-family: bold;
		font-size: 20px;
		text-decoration: none;
	}
	.h41{
		margin-left: 5px;
		font-family: bold;
	}
	.click-here{
		text-decoration: underline;
		font-style: italic;
		font-family: bold;
	}
	
	.note-text2
	{
		font-size: 25px;
		color: orange;
	}
	.fb{
		font-size: 35px;
		color: orange;
		background-color: black;
	}
	
	@media screen and (max-width: 900px) {
    
   .note{
		margin-top: 25px;
	}
	.container{
		position: absolute;
	}
	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>

			<input id="text" type="email" name="E-mail" placeholder="E-mail"><br><br>
			
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="text" type="password" name="confirm-password" placeholder="Confirm Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>
			<h1 class="warning2">Warning:You cannot change anything later.</h1>

			<h4 class="h41"><a href="login.php" class="click-here">Click Here</a> if you already have an account</h4>
			
		</form>
    </div>
    <h1 class="warning">Note:You cannot change anything later.</h1>
  
  
    
 </body>
</html>