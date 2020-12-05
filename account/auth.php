<?php
include_once '../setup.php';

if (isset($_SESSION['user_id'])) {
	$id = $_SESSION['user_id'];
	$details = $con->query("SELECT * from users where id = '$id'  ");
	$auth_user = $details->fetch_assoc();
} else {
	header("location:  ../login.php?msg=Please Login to continue");
}


?>