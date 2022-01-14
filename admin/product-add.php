<?php
include('includes/header.php');
?>

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
								<a href="product.php" class="btn btn-danger float-right">BACK</a>
							</h4>
						</div>
						<div class="card-body">
							<form action="code.php" method="POST" enctype="multipart/form-data">

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Product Name</label>
										<input type="text" name="name" class="form-control" placeholder="enter product name">
							</div>
						</div>

						<div class="col-md-12">
									<div class="form-group">
										<label>ID</label>
										<input type="text" name="id" class="form-control" placeholder="enter ID">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Description</label>
										<textarea name="description" class="form-control" required rows="3" placeholder="enter description"></textarea>
							</div>
						</div>

							<div class="col-md-6">
									<div class="form-group">
										<label>Price</label>
										<input type="text" name="price" class="form-control" placeholder="enter price">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Average Rate</label>
										<input type="text" name="avgrate" class="form-control" placeholder="enter average rate">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Category</label>
										<input type="text" name="category" class="form-control" placeholder="enter category">
							</div>
						</div>

							<div class="col-md-12">
									<div class="form-group">
										<label>Status(checked = show | Hide)</label> <br>
										<input type="checkbox" name="status" class="form-control" required>
							</div>
						</div>

						<div class="col-md-8">
									<div class="form-group">
										<label>Upload Image</label>
										<input type="file" name="image" class="form-control" required>
							</div>
						</div>

						<div class="col-md-4">
									<div class="form-group">
										<label>Click To Save</label>
										<button type="submit" name="product_save" class="btn btn-primary btn-block">Save</button>
							</div>
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