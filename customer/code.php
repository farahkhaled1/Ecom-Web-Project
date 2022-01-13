<?php 
session_start();
$connection=mysqli_connect("localhost","root","","glowglam");


if(isset($_POST['registerbtn']))
{
    $id = $_POST['id'];
    $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role=$_POST['role'];
    $image=$_FILES['userimage']['name'];
    $cpassword = $_POST['confirmpassword'];

   
        if($password === $cpassword)
        {
            if(file_exists("uploads/user/".$_FILES["userimage"]["name"])){
                $store=$_FILES["userimage"]["name"];
                $_SESSION['status']="image already exists.'.$store.'";
                header('Location:register.php');
            }
            else{
            $query = "INSERT INTO user (id,name,email,password,picture,role) VALUES ('$id','$name','$email','$password','$picture','$role')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                move_uploaded_file($_FILES["userimage"]["tmp_name"], "uploads/user/".$_FILES["userimage"]["name"]);
                $_SESSION['success'] = "customer Profile Added";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "customer Profile Not Added";
                header('Location: register.php');  
            }
        }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            header('Location: register.php');  
        }
    }

if(isset($_POST['updatebtn']))
{
    $id=$_POST['edit_id'];
    $name=$_POST['edit_name'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];
    $image=$_FILES['userimage']['name'];

    $query="UPDATE user SET id='$id', name='$name',email='$email',password='$password',picture='$image' WHERE id='$id'";
    $query_run= mysqli_query($connection,$query);


    if($query_run){
        move_uploaded_file($_FILES["userimage"]["tmp_name"],"uploads/user/".$_FILES["userimage"]["name"]);
      $_SESSION['success']= "Your data is updated!";
      header('Location: register.php');
    }
    else {
         $_SESSION['status']= "Your data is NOT updated!";
      header('Location: register.php');

    }
}

if(isset($_POST['delete_btn']))
{
    $id=$_POST['delete_id'];

    $query="DELETE FROM user WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="Your data is deleted!";
        header('Location: register.php');
    }
    else
    { 
      $_SESSION['status']= "Your data is NOT deleted!";
      header('Location: register.php');
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