<?php
	session_start();

	// variable declaration
	$email    = "";
	$errors = array();


	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'illustriousmarketing');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) { array_push($errors, "First Name is required"); }
		if (empty($lastname)) { array_push($errors, "Last Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO loginform (`firstname`, `lastname`, `email`, `password`)
					  VALUES('$firstname', '$lastname', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: indexloginbuyer.php');
		}

	}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM loginform WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {	
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: indexloginbuyer.php');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}

?>
