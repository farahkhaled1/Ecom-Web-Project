<?php

$db_name="glowglam";
$connection=mysqli_connect("localhost","root","","glowglam");
$dbconfig=mysqli_select_db($connection,$db_name);

if($dbconfig)
{
	echo "database connected";
}
else
{
	echo "database not connected";
}

?>