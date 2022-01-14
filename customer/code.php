<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "glowglam");


if (isset($_POST['registerbtn'])) {
    $id = $_POST['id'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $cpassword = $_POST['confirmpassword'];


    if ($password === $cpassword) {
        $query = "INSERT INTO userr (id,username,email,password,role) VALUES ('$id','$name','$email','$password','$role')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['success'] = "customer Profile Added";
            header('Location: register.php');
        } else {
            $_SESSION['status'] = "customer Profile Not Added";
            header('Location: register.php');
        }
    } else {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('Location: register.php');
    }
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE userr SET id='$id', username='$name',email='$email',password='$password' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        echo "your account is updated";
        // $_SESSION['success']= "Your data is updated!";
        // header('Location: register.php');
    } else {
        echo "your account is not updated";
        //    $_SESSION['status']= "Your data is NOT updated!";
        // header('Location: register.php');

    }
}

if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM userr WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo "your account is deleted";
        // $_SESSION['success']="Your data is deleted!";
        // header('Location: register.php');
    } else {
        echo "your account is not deleted";
        // $_SESSION['status']= "Your data is NOT deleted!";
        // header('Location: register.php');
    }
}

if (isset($_POST['login_btn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM userr WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "email ID or password is invalid";
        header('Location: login.php');
    }
}
