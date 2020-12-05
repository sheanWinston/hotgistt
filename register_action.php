<?php
include_once 'setup.php';

$err = 0;
$msg = '';

$name = clean('name');
$email = clean('email');
$password = clean('password');
$c_password = clean('c_password');
$phone = clean('phone');

$exist = $con->query("SELECT * from users WHERE email = '$email' " );
if ($exist->num_rows > 0) {
	$err = 1;
	$msg = "Email already in use";
}

if ($password != $c_password) {
	$err = 1;
	$msg .= " <br>Passwords do not match";
}
$password = sha1(md5($password));

if ($err == 0) {
	$insert = $con->query("INSERT into users (name, email, phone, password) 
	VALUES('$name', '$email', '$phone', '$password' )  ");
	if ($insert == true) {
		/* Login user here */
	} else {
		$msg .= " <br>Error ".$con->error;
		header("location: login.php?msg=".$msg);
	}
}else{
	header("location: login.php?msg=".$msg);
}




?>