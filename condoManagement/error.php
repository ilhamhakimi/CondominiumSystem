<?php

// Starting the session, necessary
// for using session variables
session_start();

// Declaring and hoisting the variables
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'systemcondo');

// Registration code
if (isset($_POST['resident'])) {

	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
	$residentid = mysqli_real_escape_string($db, $_POST['residentid']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$block = mysqli_real_escape_string($db, $_POST['block']);
	$unit = mysqli_real_escape_string($db, $_POST['unit']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
	$email = mysqli_real_escape_string($db, $_POST['email']);

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($residentid)) { array_push($errors, "ID is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }

	// If the form is error free, then register the user
	if (count($errors) == 0) {
		
		// Password encryption to increase data security
		$password = md5($password);
		
		// Inserting data into table
		$query = "INSERT INTO users (residentid, password, block, unit, name, phonenumber, email)
				VALUES('$residentid', '$password', '$block', '$unit', '$name', '$phonenumber', '$email')";
		
		mysqli_query($db, $query);

		// Storing username of the logged in user,
		// in the session variable
		$_SESSION['residentid'] = $residentid;
		
		// Welcome message
		$_SESSION['success'] = "You have logged in";
		
		// Page on which the user will be
		// redirected after logging in
		header('location: resdHomepage.php');
	}
}

// User login
if (isset($_POST['resident'])) {
	
	// Data sanitization to prevent SQL injection
	$residentid = mysqli_real_escape_string($db, $_POST['residentid']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	// Error message if the input field is left blank
	if (empty($residentid)) {
		array_push($errors, "residentid is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {
		
		// Password matching
		$password = md5($password);
		
		$query = "SELECT * FROM resident WHERE residentid=
				'$residentid' AND password='$password'";
		$results = mysqli_query($db, $query);

		// $results = 1 means that one user with the
		// entered username exists
		if (mysqli_num_rows($results) == 1) {
			
			// Storing username in session variable
			$_SESSION['residentid'] = $username;
			
			// Welcome message
			$_SESSION['success'] = "You have logged in!";
			
			// Page on which the user is sent
			// to after logging in
			header('location: resdHomepage.php');
		}
		else {
			
			// If the username and password doesn't match
			array_push($errors, "Username or password incorrect");
		}
	}
}

?>
