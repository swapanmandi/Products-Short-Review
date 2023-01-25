<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  
  
  <link rel="icon" href="upload/icon.png" type="image/icon">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>TheShortReviews- Helps you to buy best Products, Gadgets,Gifts and more.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="no-cache">
  
  
  <meta name="keywords" content="products, gadegts, cool gadgets, amazing products, gift">
  <meta name="description" content="The Short Reviews helps You to find all categories of amazing products, cool gadgets and unique gift ideas">
  <meta name="robots" content="index, follow">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	
  </head>
<body>
	
	<!--header section -->


   <div class="navbar">
    
   <div class="logo-div"><img src='sm/upload/tsr-logo.png'/></div>

   <div class="cont">

   
    <a href="index.php">HOME</a>

     <a href="##">LATEST</a>
	   
	   <!--
      
      <div class="dropdown1">
        <button class="d-btn">GIFTS</button>
                <div class="d-element">
                   <a href="##">Birthday</a>
                   <a href="##">Special</a>
                   <a href="##">Mothersday</a>
                </div>
      </div>

       -->
	   
	    <a href="category.php?id=gifts">GIFTS</a>

      <div class="dropdown1">
        <button class="d-btn">CATEGORIES</button>
                <div class="d-element">
          <a href="category.php?id=pets">Pets</a>
          <a href="category.php?id=b&k">Baby & Kids</a>
          <a href="category.php?id=travel">Travel</a>
          <a href="category.php?id=h&g">Home & Garden</a>
          <a href="category.php?id=outdoors">Outdoors</a>
          <a href="category.php?id=kitchen">Kitchen</a>
          <a href="category.php?id=appliances">Appliances</a>
          <a href="category.php?id=mobile">Mobile</a>
          <a href="category.php?id=electronics">Electronics</a>
          <a href="category.php?id=gadgets">Gadgets</a>
          <a href="category.php?id=h&f">Health & Fitness</a>
          
    
        </div>
      </div>


      <a href="category.php?id=cloths">CLOTHS</a>
     <a href="category.php?id=tech">TECHNOLOGY</a>

</div>
	   
      <form method="GET">
      <input type="search" name="search" class="search"  placeholder="search name or id" >

</form>

<div class="burger" onclick="myFunction()">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>
</div>
	 
<!--body section-->
     <div class="body-div">
     

	 <div class="latest">

	 
	 </div>

<!--from databas-->
	     
	     include 'conn.php';

      

if (isset($_GET['search'])){
	$name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
	$sql = "SELECT * FROM `test` WHERE name LIKE '%$name%' || id='$name'";
  $result = mysqli_query($con, $sql);
	     
	         
  while($row = $result->fetch_assoc() ){

        
        <div class = "all product-div">
       
        <img class="product-img" src="sm/<?php echo $row["image"];?>"><br>
        <input type="hidden"   name="image" value="<?= $row['image'];?>">
        <input type="hidden" class="product-name" i="myh3" name="name" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?> <br>
        <p class="product-desc"><?php echo $row["description"]."<br>" ?></p>
     
        <input type="submit" id="cart-btn" tyle=" height:30px; width:100px; background-color:#ff9800; border:none;
          border-radius:5px;" name="add_to_cart" value="Add to Cart"/>

        <input type="hidden" value="<?php echo $row['link']; ?>" name="link"><button id="product-btn" ><a href="<?php echo $row['link']; ?>">View Product</a></button>

        
      </div>

<?php

    }
  

?>



</div>
</div>
	
<!-- bottom section-->

<?php
include'footer.php';
?>
