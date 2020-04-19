<?php

	//session_start();
	define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
   // define("DB_DATABASE", "userregistration");

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

	mysqli_select_db($con,'userregistration');

	
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$s = " select * from usertable where email ='$email' && password ='$pass'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1){
		$_SESSION['username'] = $name;
		header("loaction:index.html");	
	}
	else{
		header('location:sign-up.php');
	}

?> 