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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: dashboard.html");
						die;
					}
				}
			}
			
			echo '<span style="color:white;text-align:right;">Please Enter correct details</span>';
		}else
		{
			echo '<span style="color:white;text-align:right;">Please Enter correct details</span>';
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	    	  body, html {
  height: 100%;
  margin: 0;
}
	body {
 		background-image: url("http://3.bp.blogspot.com/-eBgIdDLVN4I/TejUn-f9P3I/AAAAAAAAAI8/243XOBhnYs0/s1600/wallpaper-182372.jpg");
     	background-size: 100%;
     	background-repeat: no-repeat; 
     	width: auto;
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
		border: none;
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
	/*
	=====================css button===============
	*/
	@media screen and (max-width: 900px) {
    body {
 		background-image: url("http://3.bp.blogspot.com/-eBgIdDLVN4I/TejUn-f9P3I/AAAAAAAAAI8/243XOBhnYs0/s1600/wallpaper-182372.jpg");
     	  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
		}

}
	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
			<div class="text-box">
   
</div>
			<h4 class="h41"><a href="signup.php" class="click-here">Click Here</a> if you don't have an account</h4>
			
		</form>
	</div>

</body>
</html>