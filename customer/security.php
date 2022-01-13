<?php
session_start();
iclude('database/dbconfig.php');

if($dbconfig)
{
	//echo "database connected";
}
else
{
	header("Location:database/dbconfig.php");
}
if(!$_SESSION['name'])
{
	header('Location:login.php');
}
?>