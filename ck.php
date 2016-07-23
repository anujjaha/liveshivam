<?php
$username = $_POST['username'];
$password = $_POST['password'];


if($username == "shiva_176774" and $password == "kushdinesh6774") {
	session_start();
	$_SESSION['login'] = "true";
	$_SESSION['username'] = "Kush Chauhan";
	header("location:home.php");
}
else {
	header("location:index.php?status=404");
}
?>