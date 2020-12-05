<?php
include_once 'setup.php';

$email = clean('email');
$password = clean('password');
$password = sha1(md5($password));

$login = $con->query("SELECT id from users where email = '$email' AND password = '$password' ");
if ($login->num_rows == 1) {
	$user = $login->fetch_assoc();
	$_SESSION['user_id'] = $user['id'];
	echo "logged in".$_SESSION['user_id'];
	header("location: account/");
}else{
	header("location: login.php?msg= User not found");
}

?>
