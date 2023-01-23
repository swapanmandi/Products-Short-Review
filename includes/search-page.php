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
	 

	
	<!-- bottom section-->

<?php
include'footer.php';
?>
