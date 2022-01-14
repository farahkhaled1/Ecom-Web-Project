<?php 
session_start();
$connection=mysqli_connect("localhost","root","","glowglam");


if(isset($_GET['penalty_btn']))
{
    $hr_id = $_GET['hr_id'];
    $admin_id = $_GET['admin_id'];
    $hr_email = $_GET['hr_email'];
    $admin_email = $_GET['admin_email'];
    $warning = $_GET['warning'];

    $query = "INSERT INTO penalty (hr_id,admin_id,hr_email,admin_email,warning) VALUES ('$hr_id','$admin_id','$hr_email','$admin_email','$warning') WHERE hr_id='$hr_id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="Your penalty was added!";
        header('Location: audit.php');
    }
    else
    { 
      $_SESSION['status']= "Your penalty was NOT added!";
      header('Location: audit.php');
    }
}

if(isset($_POST['login_btn']))
{
    $email_login=$_POST['email'];
    $password_login=$_POST['password'];

    $query="SELECT * FROM user WHERE email='$email_login' AND password='$password_login'";
    $query_run=mysqli_query($connection,$query);

    if(mysqli_fetch_array($query_run)) 
    {
       $_SESSION['name']=$email_login;
       header('Location: index.php');
    }
    else
    {
      $_SESSION['status']= "email ID or password is invalid";
      header('Location: login.php');
    }

}



?>