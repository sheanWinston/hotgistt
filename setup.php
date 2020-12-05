<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'hotgist');

function clean($x){
	$con = new mysqli('localhost', 'root', '', 'hotgist');
	$x = trim(strip_tags($_POST[$x]));
	$x = mysqli_real_escape_string($con, $x);
	return $x;
}

function cleanx($x){
	$con = new mysqli('localhost', 'root', '', 'hotgist');
	$x = trim(strip_tags($_GET[$x]));
	$x = mysqli_real_escape_string($con, $x);
	return $x;
}
?>