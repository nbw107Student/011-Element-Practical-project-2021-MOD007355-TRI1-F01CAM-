<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'osiris';
$DATABASE_PASS = 'Newpass59#';
$DATABASE_NAME = 'Storage';

$connection = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
if ($stmt = $connection->prepare('SELECT id, password FROM users WHERE username = ?')) {
	$USER2 = $_POST['username'];
	$USER3 = trim($USER2);
	echo $USER3;
	echo 'testing';
	$stmt->bind_param('s', $USER3);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	        $stmt->bind_result($id, $password);
	        $stmt->fetch();
	        $getpassword = $_POST['password'];
	        $newpassmd5 = md5(trim($getpassword));
	        if ($newpassmd5 == $password) {
		         session_regenerate_id();
		         $_SESSION['loggedin'] = TRUE;
		         header("Location: LoggedIn.php");
		} else {
		header("Location: Loginpass.php");
		}
	} else {
	header("Location: Loginuser.php");
	}


	$stmt->close();
}
?>


