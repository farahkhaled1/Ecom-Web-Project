<?php
session_start();
include('security.php');

$connection = mysqli_connect("localhost", "root", "", "glowglam");

if (isset($_POST['login_btn'])) {
	$username_login = $_POST['username'];
	$password_login = $_POST['password'];

	$query = "SELECT * FROM userr WHERE username='$username_login' AND password='$password_login'";
	$query_run = mysqli_query($connection, $query);
	$usertypes = mysqli_fetch_array($query_run);


	if ($usertypes['role'] == "admin") {
		$_SESSION['username'] = $username_login;
		header('Location:register.php ');
	} else if ($usertypes['role'] == "user") {
		$_SESSION['username'] = $username_login;
		header('Location:../pages/home.php');
	} else {
		$_SESSION['status'] = "email/ password is invalid";
		header('Location:../pages/Login.php');
	}
}
