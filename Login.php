<!DOCTYPE html>
<html>
<head>
	<title>Illustrious Marketing</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="Assets/wave.png">
	<div class="container">
		<div class="img">
			<a href="index.php">
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
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="SignUp.php">New Member?</a>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" name="login_user" value="Sign In">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
