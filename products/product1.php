<html>
<link rel="stylesheet" href="style.css">
<?php
$conn= new mysqli("localhost","root","","web");
if($conn->connect_error)
die("fatal error - cannot connect to db");

$query="select *from product WHERE id=1";
$results=$conn->query($query);
//$row=$results->fetch_assoc();
 // echo $row['id'];
	//  echo "<br>";
	  // echo $row['name'];
	  // echo "<br>";
	  //  echo $row['price'];
	  //  echo "<br>";
	  //   echo $row['description'];
	  //   echo "<br>";
	  //    echo $row['picture'];
	  //    echo "<br>";
	  //     echo $row['avg_rate'];
	  //     echo "<br>";
	  //      echo $row['category'];
	//        echo "<br>";
	//         echo $row['status'];
	        
 while($row=$results->fetch_array(MYSQLI_ASSOC)){
 	  
 	 echo "<br>";
 	 ?> <h1> <?php
 	  echo $row['name']; ?>
 	  </h1> <?php
 	  echo $row['id'];
 	  echo "<br>";
 	   echo $row['price'];
 	   echo "<br>";
 	   ?><h2> Product Description: </h2>
 	   <?php
 	    echo $row['description'];
 	    echo "<br>"."<br>";
 	    ?>
 	    <img src="<?php echo $row['picture']; ?>" /> 
 	    <?php
 	     echo "<br>";
 	      echo "avg rate: ".$row['avg_rate'];
 	      echo "<br>";
 	  ?> <h3>category:</h3> <?php echo $row['category'];
 	       echo "<br>";
 	        echo $row['status'];
 	          echo "<br>";
	        
}
?>
<button type="button">Add To Cart</button>

<!-- <div class="small-container single-product">
	<div class="row">
		<div class="col-2"> 
		    <img src="redlipstick.jpg" width="300"  >

		<div class="small-img-row">
			<div class="small-img-col">
				<img src="redlipstick1.png" width="100" ><div>
					</div>
					<div class="small-img-col">
				<img src="redlipstick2.jpg" width="100"><div>
					 </div>
				</div> -->
	<!--  </div>
	 <div class="col-2"> -->
	<!--  <p> Home / Lipstick </p>
	 <h1> Red Lipstick </h1>
	 <h4> 300EGP </h4>
	 <input type ="number" value="1">
	 <a href="" class="btn">Add To Cart </a>
	 	<h3> Product Details</h3>
	 	<p> detailssss </p>
</div>
</div>
</div>
 -->
</html>