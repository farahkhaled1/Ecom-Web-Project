<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
 
        <div class="modal-body">

            <div class="form-group">
                <label> ID </label>
                <input type="text" name="id" class="form-control" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" name="role" class="form-control checking_email" placeholder="Enter Role">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="userimage" id="userimage" class="form-control" required>
            </div>
            

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!--DataTales Example -->
<div class="card shadow mb-4">
 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Admin Profile
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Admin Profile 
</button>
</h6>
</div>
<div class="card-body">

<?php 
 if(isset($_SESSION['success']) && $_SESSION['success'] !='')
 {
 	echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].' </h2>';
 	unset($_SESSION['success']);
 }

 if(isset($_SESSION['status']) && $_SESSION['status'] !='')
 {
    echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].' </h2>';
    unset($_SESSION['status']);
 }
 
?>

 <div class="table-responsive">
    <?php 
    $connection=mysqli_connect("localhost","root","","glowglam");
    $query="SELECT * FROM userr";
    $query_run=mysqli_query($connection,$query);
    ?>

  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Password</th>
  <th>Role</th>
  <th>Image</th>
  <th>EDIT</th>
  <th>DELETE</th>
  </tr>
  </thead>
  <tbody>
    <?php 
    if(mysqli_num_rows($query_run)>0)
    {
        while($row=mysqli_fetch_assoc($query_run))
        {
           ?>
         <tr>
        <td><?php echo $row['id']; ?> </td>
        <td><?php echo $row['username']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><?php echo $row['password']; ?> </td>
        <td><?php echo $row['role']; ?> </td>
        <td><?php echo '<img src="uploads/user/'.$row['picture'].'"width="100px;" height="100px;" alt="Image">'?></td>
        <td>
            <form action="register_edit.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="edit_btn" class="btn btn-success"> EDIT </button>
            </form>
        </td>
        <td>
            <form action="code.php" method="post">
                <input type="hidden" name=delete_id value="<?php echo $row['id'];?>">
             <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE </button>
         </td>
 
    </tr>
    <?php 
        }
    }
    else {
        echo "no record found";
    }
    ?>

    
    </tbody>
    </table>
    </div>
     </div>
      </div>


</div>
<!--/.container-fluid--> 

<?php
include "includes/scripts.php";
include('includes/footer.php');
?>