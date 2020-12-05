<?php
include_once 'auth.php';

$msg = '';
$doit = 1;

/* Get the details from the form */
$user_id = $auth_user['id'];
$name = clean('name');
$phone = clean('phone');
$bio = clean('bio');

$update = $con->query("UPDATE users set name = '$name', phone = '$phone', bio = '$bio'  WHERE id = '$user_id'  ");

if (!$update) {
	$doit = 0;
	$msg .= 'Could not update '.$con->error;
}else{
	$msg = 'Profile updated';
	$doit = 1;
}



/* check if there is an image */
if ($_FILES['avatar']['name'] && $doit == 1 ) {
	$image = $_FILES['avatar']['name'];
	$filename = $auth_user['email'].basename($image);

	$target = "../avatars/".basename($filename);

	$upload = move_uploaded_file($_FILES['avatar']['tmp_name'], $target);

	if ($upload) {
		$sql = $con->query("UPDATE users set avatar = '$filename'  WHERE id = '$user_id' ");
		$msg = 'Proile updated';
	} else {
		$doit = 0;
		$msg .= 'Image could not be uploaded';
	}

} 
if ($doit == 1 ) {
	header('location: profile.php?msg=Profile updated');
} else {
	/* header('location: profile.php?msg='.$msg); */
	echo $msg;
}





?>