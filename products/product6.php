<html>
<?php
$conn= new mysqli("localhost","root","","web");
if($conn->connect_error)
die("fatal error - cannot connect to db");

$query="select *from product WHERE id=6";
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
 	    <?php
 	     echo "<br>";
 	      echo "avg rate: ".$row['avg_rate'];
 	      echo "<br>";
 	  ?> <h3>category:</h3> <?php echo $row['category'];
 	       echo "<br>";
 	       ?> status:
 	       <?php
 	        echo $row['status'];
	        
}
?>
<button type="button">Add To Cart</button>
</html>