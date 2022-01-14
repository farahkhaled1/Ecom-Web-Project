<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addcustomerprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Penalty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codepenalty.php" method="POST" enctype="multipart/form-data">
 
        <div class="modal-body">

            <div class="form-group">
                <label> HR ID </label>
                <input type="text" name="hr_id" class="form-control" placeholder="Enter HR ID">
            </div>
            <div class="form-group">
                <label> Admin ID </label>
                <input type="text" name="admin_id" class="form-control" placeholder="Enter Admin ID">
            </div>
            <div class="form-group">
                <label>HR Email</label>
                <input type="email" name="hr_email" class="form-control" placeholder="Enter HR Email">
            </div>
            <div class="form-group">
                <label>Admin Email</label>
                <input type="text" name="admin_email" class="form-control" placeholder="Enter Admin Email">
            </div>
            <div class="form-group">
                <label>Warning</label>
                <input type="text" name="warning" class="form-control" placeholder="Enter warning">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="penalty_btn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!--DataTales Example -->
<div class="card shadow mb-4">
 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Auditor
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addpenalty">
      
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
    $query="SELECT * FROM penalty";
    $query_run=mysqli_query($connection,$query);
    ?>

  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
  <tr>
  <th>HR ID</th>
  <th>Admin ID</th>
  <th>HR Email</th>
  <th>Admin ID</th>
  <th>Warning</th>
  <th>Add Penalty</th>
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
        <td><?php echo $row['hr_id']; ?> </td>
        <td><?php echo $row['admin_id']; ?> </td>
        <td><?php echo $row['hr_email']; ?> </td>
        <td><?php echo $row['admin_email']; ?> </td>
        <td><?php echo $row['warning']; ?> </td>

        <td>
            <form action="auditt.php" method="post">
                <input type="hidden" name="hr_id" value="<?php echo $row['hr_id']; ?>">
                <button type="submit" name="penalty_btn" class="btn btn-success"> Add penalty </button>
            </form>
        </td>
        <td>
 
    </tr>
    <?php 
        }
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
include ('includes/scripts.php');

?>