<?php
include('includes/header.php');
$connection=mysqli_connect("localhost","root","","glowglam");
?>

<!--content wrapper contains page content -->
<div class="content-wrapper">


	<?php 
	if(isset($_GET['product_id']))
	{
		$product_id = $_GET['product_id'];
		$query= "SELECT * FROM product WHERE id='$product_id'";
		$query_run=mysqli_query($connection,$query);

		if(mysqli_num_rows($query_run)>0)
		{
         $prodItem=mysqli_fetch_array($query_run);
         ?>
         <h4><?=$prodItem['name']?></h4>

        

	<section class="content mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>
								Products - Edit
								<a href="product.php" class="btn btn-danger float-right">BACK</a>
							</h4>
						</div>
						<div class="card-body">
							<form action="code.php" method="POST" enctype="multipart/form-data">

								<input type="hidden" name="product_id" value="<?=$prodItem['id']?>">

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Product Name</label>
										<input type="text" name="name" class="form-control" value="<?=$prodItem['name']?>" required
									    placeholder="enter product name">
							</div>
						</div>

						<div class="col-md-12">
									<div class="form-group">
										<label>ID</label>
										<input type="text" name="product_id" value="<?=$prodItem['id']?>" class="form-control" placeholder="enter ID">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Description</label>
										<textarea name="description" class="form-control" required rows="3" placeholder="enter description"><?=$prodItem['description']?></textarea>
							</div>
						</div>

							<div class="col-md-6">
									<div class="form-group">
										<label>Price</label>
										<input type="text" name="price" value="<?=$prodItem['price']?>"class="form-control" placeholder="enter price">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Average Rate</label>
										<input type="text" name="avgrate" value="<?=$prodItem['avg_rate']?>"class="form-control" placeholder="enter average rate">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Category</label>
										<input type="text" name="category" value="<?=$prodItem['category']?>"class="form-control" placeholder="enter category">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Status(checked = show | Hide)</label> <br>
										<input type="checkbox" name="status" class="form-control">
							</div>
						</div>

						<div class="col-md-8">
									<div class="form-group">
										<label>Upload Image</label>
										<input type="file" name="image" class="form-control">
										<input type="hidden" name="old_image" value="<?=$prodItem['picture']?>">
							</div>
							<img src="uploads/product/<?=$prodItem['picture']?>" width="50px" height="50px" alt="Image">
						</div>

						<div class="col-md-4">
									<div class="form-group">
										<button type="submit" name="product-edit" class="btn btn-primary">Update</button>
							</div>
						</div>


</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
 <?php
		}
		else 
		{
         echo "no such product found";
		}
	}
	?>

</div>






<?php
include "includes/scripts.php";
include('includes/footer.php');
?>