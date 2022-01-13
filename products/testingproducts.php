<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Products</title>
    
</head>
<body>
    
<form class="d-flex">
        <input style="width: 20%;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="<?php if (isset($_GET['search'])){echo $_GET['search'];}?>">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    <h1>All Products</h1>
    <?php 
    $conn= new mysqli("localhost","root","","web");
    if($conn->connect_error)
    die("fatal error - cannot connect to db");
    $query="select *from product ";
    $results=$conn->query($query);

    $row1=$results->fetch_assoc();
    $row2=$results->fetch_assoc();
    $row3=$results->fetch_assoc();
    $row4=$results->fetch_assoc();
    $row5=$results->fetch_assoc();
    $row6=$results->fetch_assoc();
    $row7=$results->fetch_assoc();


    if(isset($_GET['search'])){
        $filtervalues=$_GET['search'];
        $query1="SELECT *FROM product WHERE CONCAT (name) LIKE '%$filtervalues'";
        $query_run=mysqli_query($conn,$query1);
        if(mysqli_num_rows($query_run)>0){
            foreach($query_run as $items){
                ?>
                
                <div id="cards">
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $items['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= $items[id].php?id=<?php echo $items['name']?>>
	<button type="button" class="btn"><?php  echo $items['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $items['price']; ?> EGP</div>
  </div>
</div>  
                <?php
            }
        }
    } 
 

else {
    ?>


    <div id="cards">
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $row1['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product1.php?id=<?php echo $row1['name']?>>
	<button type="button" class="btn"><?php  echo $row1['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row1['price']; ?> EGP</div>
  </div>
</div>  

<div class="card" style="width: 18rem;">
    <img src="<?php echo $row2['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product2.php?id=<?php echo $row2['name']?>>
	<button type="button" class="btn"><?php  echo $row2['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row2['price']; ?> EGP</div>
  </div>
</div>  


<div class="card" style="width: 18rem;">
    <img src="<?php echo $row3['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product3.php?id=<?php echo $row3['name']?>>
	<button type="button" class="btn"><?php  echo $row3['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row3['price']; ?> EGP</div>
  </div>
</div>  
    </div>


    <div id="cards">
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $row4['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product4.php?id=<?php echo $row4['name']?>>
	<button type="button" class="btn"><?php  echo $row4['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row4['price']; ?> EGP</div>
  </div>
</div>  

<div class="card" style="width: 18rem;">
    <img src="<?php echo $row5['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product5.php?id=<?php echo $row5['name']?>>
	<button type="button" class="btn"><?php  echo $row5['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row5['price']; ?> EGP</div>
  </div>
</div>  


<div class="card" style="width: 18rem;">
    <img src="<?php echo $row6['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product6.php?id=<?php echo $row6['name']?>>
	<button type="button" class="btn"><?php  echo $row6['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row6['price']; ?> EGP</div>
  </div>
</div>  
    </div>


    <div id="cards">
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $row7['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product7.php?id=<?php echo $row7['name']?>>
	<button type="button" class="btn"><?php  echo $row7['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row7['price']; ?> EGP</div>
  </div>
</div>  

<div class="card" style="width: 18rem;">
    <img src="<?php echo $row7['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product7.php?id=<?php echo $row7['name']?>>
	<button type="button" class="btn"><?php  echo $row7['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row7['price']; ?> EGP</div>
  </div>
</div>  


<div class="card" style="width: 18rem;">
    <img src="<?php echo $row7['picture']; ?>" class="card-img-top"/> 
  <div class="card-body">
  <a href= product7.php?id=<?php echo $row7['name']?>>
	<button type="button" class="btn"><?php  echo $row7['name'] ?></button>
</a><br>
<div class="item-price" style="margin-left:13px;"><?php  echo $row7['price']; ?> EGP</div>
  </div>
</div>  
    </div>
    <?php
}
?>
</body>
</html>