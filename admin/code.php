<?php 
session_start();
$connection=mysqli_connect("localhost","root","","glowglam");



if(isset($_POST['delete_product']))
{
    $id=$_POST['delete_p'];

    $query="DELETE FROM product WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="Your product is deleted!";
        header('Location: product.php');
    }
    else
    { 
      $_SESSION['status']= "Your product is NOT deleted!";
      header('Location: product.php');
    }
}


if(isset($_POST['product-edit']))

{

        $name=$_POST['name'];
        $ID=$_POST['product_id'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $AverageRate=$_POST['avgrate'];
        $Category=$_POST['category'];
        $status=$_POST['status'] == true ? '1':'0';
        $image=$_FILES['image']['name'];
        $old_image=$_POST['old_image'];

        if(!$image !=''){
            $update_filename=$_FILES['image']['name'];
            $allowed_extension = array('png','jpg','jpeg');
            $file_extension = pathinfo($update_filename,PATHINFO_EXTENSION);

        $filename= time().'.'.$file_extension;
        if(!in_array($file_extension, $allowed_extension)){
            $_SESSION['status']="you are allowed with only jpg, png, jpeg image";
            header('Location: product-add.php');
            exit(0);
        }
        $update_filename=$filename;
        
        }
        else{
        $update_filename=$old_image;
        }   


        $query="UPDATE product SET id='$ID',name='$name',description='$description',price='$price',avg_rate='$AverageRate',category='$Category',status='$status',image='$update_filename' WHERE id='$ID'";

        $query_run=mysqli_query($connection,$query);
        if($query_run){
            if($image!=''){
                 move_uploaded_file($_FILES['image']['tmp_name'],'uploads/product/'.$filename);
                 if(file_exists('uploads/product/'.$old_image)){
                    unlink('uploads/product/'.$old_image);
                 }
                
            }
            $_SESSION['success']="product updated successfully";
                header('Location: product-edit.php?product_id='.$ID);
                exit(0);
        }
        else {
                $_SESSION['status']="product not updated";
                header('Location: product-edit.php?product_id='.$ID);
                exit(0);
        }
}

if(isset($_POST['product_save']))
    {
        $name=$_POST['name'];
        $ID=$_POST['id'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $AverageRate=$_POST['avgrate'];
        $Category=$_POST['category'];
        $status=$_POST['status'] == true ? '1':'0';
        $image=$_FILES['image']['name'];
      

        $allowed_extension = array('png','jpg','jpeg');
        $file_extension = pathinfo($image,PATHINFO_EXTENSION);

        $filename= time().''.$file_extension;
        if(!in_array($file_extension, $allowed_extension)){
            $_SESSION['status']="you are allowed with only jpg, png, jpeg image";
            header('Location: product-add.php');
            exit(0);
        }
        else{
            $query="INSERT INTO product (id,name,price,description,picture,avg_rate,category,status) VALUES ('$ID','$name','$price','$description','$filename','$AverageRate','$Category','$status') ";
            $query_run=mysqli_query($connection,$query);
            if($query_run){
                move_uploaded_file($_FILES['image']['tmp_name'],'uploads/product/'.$filename);
                $_SESSION['success']="product added successfully";
                header('Location: product.php');
                exit(0);
            }
            else{
                $_SESSION['status']="something went wrong";
                header('Location: product.php');
                exit(0);
            }
        }
    }

if(isset($_POST['registerbtn']))
{
    $id = $_POST['id'];
    $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role=$_POST['role'];
    $cpassword = $_POST['confirmpassword'];
    $image=$_FILES['userimage']['name'];
    
   
        if($password === $cpassword)
        {
            if(file_exists("uploads/user/".$_FILES["userimage"]["name"])){
                $store=$_FILES["userimage"]["name"];
                $_SESSION['status']="image already exists.'.$store.'";
                header('Location:register.php');
            }
            else{
                $query = "INSERT INTO userr (id,username,email,password,picture,role) VALUES ('$id','$name','$email','$password','$image','$role')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                move_uploaded_file($_FILES["userimage"]["tmp_name"], "uploads/user/".$_FILES["userimage"]["name"]);
                $_SESSION['success'] = "Admin Profile Added";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
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
    $role=$_POST['edit_role'];
    $image=$_FILES['userimage']['name'];

    $query="UPDATE userr SET id='$id', username='$name',email='$email',password='$password',role='$role', picture='$image'  WHERE id='$id'";
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

    $query="DELETE FROM userr WHERE id='$id'";
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



?>

