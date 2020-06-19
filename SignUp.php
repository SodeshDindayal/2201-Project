<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="Assets/wave.png">
	<div class="container">
		<div class="img">
			<a href="index.html">
			<img src="Assets/bg.svg">
			</a>
		</div>
		<div class="login-content">
			<form method="post" action="server.php">
				<?php require_once('server.php');
					include('errors.php'); 
				?>
				
				<img src="Assets/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
           		   		<input type="text" class="input" name="firstname">
           		   </div>
				</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Last Name</h5>
           		   		<input type="text" class="input" name="lastname">
           		   </div>
				</div>   
				<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Email</h5>
							<input type="text" class="input" name="email">
					</div>
				 </div>   
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
				</div>
				<a href="Login.php">Already have an Account?</a>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" name="reg_user" value="Sign Up">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
