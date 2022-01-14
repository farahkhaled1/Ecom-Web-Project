<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

<!--DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Penalty</h6>
</div>
    <div class="card-body">  

<?php
$connection=mysqli_connect("localhost","root","","glowglam");

  if(isset($_GET['penalty_btn']))
{
    $hr_id = $_GET['hr_id'];
    $admin_id = $_GET['admin_id'];
    $hr_email = $_GET['hr_email'];
    $admin_email = $_GET['admin_email'];
    $warning = $_GET['warning'];

    $query = "INSERT INTO penalty SET hr_id='$hr_id', admin_id='$admin_id',hr_email='$hr_email',admin_email='$admin_email',warning='$warning' WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    foreach($query_run as $row)
    {
        ?>

    <form action="codepenalty.php" method="POST">


        <div class="form-group">
        </div>
            <div class="form-group">
                <label> HR ID </label>
                <input type="hidden" name="hr_id" value="<?php echo $row['hr_id'] ?>" class="form-control" placeholder="Enter HR ID">
            </div>
            <div class="form-group">
                <label> Admin ID </label>
                <input type="text" name="admin_id" value="<?php echo $row['admin_id'] ?>" class="form-control" placeholder="Enter Admin ID">
            </div>
            <div class="form-group">
                <label>HR Email</label>
                <input type="text" name="hr_email" value="<?php echo $row['hr_email'] ?>" class="form-control" placeholder="Enter HR Email">
            </div>
            <div class="form-group">
                <label>Admin Email</label>
                <input type="text" name="admin_email" value="<?php echo $row['admin_email'] ?>" class="form-control" placeholder="Enter Admin Email">
            </div>
             <div class="form-group">
                <label>Warning</label>
                <input type="text" name="warning" value="<?php echo $row['warning'] ?>" class="form-control" placeholder="Enter Warning">
            </div>
             <a href="audit.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="penalty_btn" class="btn btn-primary"> ADD </button>

            <?php
    }
}
?>
       
   </div>

</div>
</div>
</div>



<?php
include ('includes/scripts.php');
include('includes/footer.php');
?>