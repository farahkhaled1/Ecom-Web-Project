<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<!--content wrapper contains page content -->
<div class="content-wrapper">

	<section class="content mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>
								Products
								<a href="product-add.php" class="btn btn-primary float-right">Add</a>
							</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-7">

                                 <form action="" method="GET">
								<div class="input-group mb-3">
								  <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Search for a product">
								  <button type="submit" class="btn btn-primary">Search</button>
								</div>
							</form>
								</div>
							</div>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Price</th>
										<th>Description</th>
										<th>Average rate</th>
										<th>Category</th>
										<th>Status</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>

								<tbody>


<?php
$connection=mysqli_connect("localhost","root","","glowglam");
$query="SELECT * FROM product";
$query_run=mysqli_query($connection,$query);

if(isset($_GET['search'])){
	$filtervalues=$_GET['search'];
	$query="SELECT * FROM product WHERE CONCAT(id,name,price,description,category) LIKE '%$filtervalues%'";
	$query_run=mysqli_query($connection,$query);
	if(mysqli_num_rows($query_run)>0)
	{
     foreach($query_run as $items){
     	?>
     	<tr> 
     		<td><?= $items['id']; ?></td>
     		<td><?= $items['name']; ?></td>
     		<td><?= $items['price']; ?></td>
     		<td><?= $items['description']; ?></td>
     		<td><?= $items['avg_rate']; ?></td>
     		<td><?= $items['category']; ?></td>

     		<td>
 			<input type="checkbox" <?= $items['status'] == '1'? 'checked':'' ?> readonly />
 			</td>

 		<td>
 			<a href="product-edit.php?prod_id=<?=$items['id']?>" class="btn btn-success">EDIT</a>
 		</td>
 		<td>
 			<form action="code.php" method="post">
                <input type="hidden" name=delete_p value="<?php echo $items['id'];?>">
             <button type="submit" name="delete_product" class="btn btn-danger"> DELETE </button>
 		</td>
     	</tr>
     	<?php 
     }
	}
	else {
		?>
		<tr>
			<td colspan="9"> No record found</td>
		</tr>
		<?php
	}
}


else if(mysqli_num_rows($query_run)>0)
{
 foreach($query_run as $prod_item){
 	?>
 	<tr>
 		<td><?= $prod_item['id']; ?></td>
 		<td><?= $prod_item['name']; ?></td>
 		<td><?= $prod_item['price']; ?></td>
 		<td><?= $prod_item['description']; ?></td>
 		<td><?= $prod_item['avg_rate']; ?></td>
 		<td><?= $prod_item['category']; ?></td>

 		<td>
 			<input type="checkbox" <?= $prod_item['status'] == '1'? 'checked':'' ?> readonly />
 			</td>

 		<td>
 			<a href="product-edit.php?product_id=<?=$prod_item['id']?>" class="btn btn-success">EDIT</a>
 		</td>
 		<td>
 			<form action="code.php" method="post">
                <input type="hidden" name=delete_p value="<?php echo $prod_item['id'];?>">
             <button type="submit" name="delete_product" class="btn btn-danger"> DELETE </button>
 		</td>
 	</tr>
 	<?php
 }
}
else{

	?>
	<tr>
		<td colspan="7">No Record Found </td>
	</tr>
	<?php 

}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
</div>






<?php
include "includes/scripts.php";
include('includes/footer.php');
?>