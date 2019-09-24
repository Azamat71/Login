<?php
	session_start();
	//Get values passe from form login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];

	//connect to the server and select database
	$db = mysqli_connect("localhost","root","","login");
	

	//Query the db for users
	$result = mysqli_query($db,"SELECT * FROM users WHERE username = '$username' and password = '$password'")
					or die("Failed to query database ". mysql_error());
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password){
		$_SESSION['message'] = "User id is ".$row['id']; 
	}
	else{
		$_SESSION['message'] = "Wrong username or password";
	}
	echo $_SESSION["message"];