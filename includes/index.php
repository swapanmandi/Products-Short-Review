<?php 
include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <link rel="canonical" href="">
  <link rel="alternate" href="" hreflang="en-gb" />
  <link rel="icon" href="sm/upload/icon.png" type="image/icon">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>This Reviews- Helps you to buy best Products, Gadgets,Gifts and more.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta property="og:site_name" content="">
  <meta property="og:url" content="">
  <meta name="keywords" content="products, gadegts, cool gadgets, amazing products, gift">
  <meta name="description" content="The Short Reviews helps You to find all categories of amazing products, cool gadgets and unique gift ideas">
  <meta name="robots" content="index, follow">

 <meta name="google-site-verification" content="" />
	
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


     
  
     </div>

<div class="cart" >
  <a href="cart.php"><img src='sm/upload/shopping-cart.png'></a>
  <span class="cart-count">
  <?php
if (isset($_SESSION['cart'])) {
  echo count($_SESSION['cart']);
}
else{
  echo "0";
}
  ?>
 </span>

 
</div>


<form method="GET" action="search.php">
      <input type="search" name="search" class="search"  placeholder="search name or id" >

</form>

     <a href="signup.php"  style="text-decoration: none;">SIGNUP</a>

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

<!--for cart section-->

<?php

if (isset($_POST['add_to_cart'])) {

if (isset($_SESSION['cart'])){
   $item_array_id = array_column($_SESSION['cart'], 'item_id');
   if (!in_array($_GET['id'], $item_array_id)) {
       $count = count($_SESSION['cart']);
       $_SESSION['count'] = $count;
       $item_array = array(
        'item_id' => $_GET['id'],
        'item_name' => $_POST['name'],
        'item_image' => $_POST['image'],
        'item_link' => $_POST['link']
    );
    $_SESSION['cart'] [$count] = $item_array;
    //echo "<script>window.location='test1.php'</script>";
    //echo 'product is added';
    header('location:index.php');
   }
   else{
    //echo "<script>window.location='test1.php'</script>";
      // echo "product is already added to cart!";
       //echo "<script>window.location='test1.php'</script>";
   }

}
else{

    $item_array = array(
        'item_id' => $_GET['id'],
        'item_name' => $_POST['name'],
        'item_image' => $_POST['image'],
        'item_link' => $_POST['link']
    );
    $_SESSION['cart'] [0] = $item_array;
    

}
    
}




//session_destroy();

?>


<!--Display the all products.-->
<?php

$sql ="SELECT * FROM `test`";
$result = mysqli_query($con, $sql); 

$num = mysqli_num_rows($result);
//echo $num."<br>";
if(!$result){
    die("connect faild".$mysqli_error());
}
//echo "fetch connection successful"."<br>";
    
    while($row = mysqli_fetch_assoc($result)){ 

    
        ?>
        
        <div class = "all product-div">
         <form method="post" action="index.php?id=<?php echo $row["id"];?>" enctype="multipart/form-data">
        <img class="product-img" src="sm/<?php echo $row["image"];?>"><br>
        <input type="hidden"   name="image" value="<?= $row['image'];?>">
        <input type="hidden" class="product-name" i="myh3" name="name" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?> <br>
        <p class="product-desc"><?php echo $row["description"]."<br>" ?></p>
     
        <input type="submit" id="cart-btn" tyle=" height:30px; width:100px; background-color:#ff9800; border:none;
          border-radius:5px;" name="add_to_cart" value="Add to Cart"/>

        <input type="hidden" value="<?php echo $row['link']; ?>" name="link"><button id="product-btn" ><a href="<?php echo $row['link']; ?>">View                    Product</a></button>

        </form>
      </div>

<?php

    }
  

?>



</div>
</div>
  


<!-- bottom section-->

<?php
include 'footer.php';
?>
