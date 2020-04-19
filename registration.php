<?php

	//session_start();
	//header('location:sign-up.php');
	define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
   // define("DB_DATABASE", "userregistration");

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

	mysqli_select_db($con,'userregistration');

	$name = $_POST['user'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$s = "select * from usertable ";

	$result = mysqli_query($con, $s);

	//$num = mysqli_num_rows($result);

	//if($num == 1){
	//	echo "Username Already Taken"; 
	//}
	//else{
	$reg ="insert into usertable (name,email,password) values ('$name','$email' ,'$pass')";
	mysqli_query($con, $reg);
	echo "Registration Sussessful";
	echo $result;	
	//}
	mysqli_close($con);
?> 