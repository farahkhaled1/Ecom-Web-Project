<html>
<link rel="stylesheet" href="style.css">
<?php 

$conn= new mysqli("localhost","root","","web");
if($conn->connect_error)
die("fatal error - cannot connect to db");

$query="select *from product WHERE id=2";
$results=$conn->query($query);
while($row=$results->fetch_array(MYSQLI_ASSOC)){
 	  
 	 echo "<br>";
 	 ?> <h1> <?php
 	  echo $row['name']; ?>

 	  </h1> ID: <?php
 	  echo $row['id'];
 	  echo "<br>";
 	  ?> Price:
 	  <?php
 	   echo $row['price'];
 	   echo "<br>";
 	   ?><h2> Product Description: </h2>
 	   <?php
 	    echo $row['description'];
 	    echo "<br>"."<br>";
 	    ?>
 	    <img src="<?php echo $row['picture']; ?>" /> 
 	    
 	 <h3> avg rate: </h3>
 	   <?php
 	      echo $row['avg_rate'];
 	      echo "<br>";
 	  ?> <h3>category:</h3> <?php echo $row['category'];
 	       echo "<br>";
 	       ?> status:
 	       <?php
 	        echo $row['status'];
	        
}
?>
<button type="button">Add To Cart</button>

 <!-- review: --> 
<section > 
<h1> Add a review </h1>
<form action='review1.php' method='POST'>

<!-- Name:<input type='text' name='name'> 
Address: <input type='text' name='address'>  -->



 <!-- <input type="text" name="reviewheadline" placeholder="review headline"> -->
<input type='text' name='name'> 
<textarea name='review' placeholder='review' ></textarea> 
 <p> how much you liked the product</p>
 <input type ='submit'>
<!-- <button type="button" >add review</button>  -->
</form>
 </section> 
</html>