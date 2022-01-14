<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

<!--DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT Admin Profile </h6>
</div>
    <div class="card-body">  

<?php
$connection=mysqli_connect("localhost","root","","glowglam");

  if(isset($_POST['edit_btn']))
{
    $id=$_POST['edit_id'];

    $query="SELECT * FROM userr WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    foreach($query_run as $row)
    {
    	?>

    <form action="code.php" method="POST" enctype="multipart/form-data">
        

    	<div class="form-group">
                <label> ID </label>
                <input type="text" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label> Name </label>
                <input type="text" name="edit_name" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" name="edit_role" value="<?php echo $row['role'] ?>" class="form-control checking_email" placeholder="Enter Role">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="userimage" value="<?php echo $row['picture'] ?>" class="form-control" >
            </div>
             <a href="register.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                	<?php
    }
}
?>
       
   </div>

</div>
</div>
</div>



<?php
include "includes/scripts.php";
include('includes/footer.php');
?>