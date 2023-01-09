<?php
include 'header.php';
session_start();
?>
<!--from databas-->


	  <?php

include 'conn.php';

//for cart section

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
    echo "<script>window.location.</script>";
    //echo 'product is added';
    header('location:cart.php');
   }
   else{
    //echo "<script>window.location='test1.php'</script>";
      // echo "product is already added to cart!";
       //echo "<script>window.location='test1.php'</script>";
        //echo "<script>window.location.search.php</script>";
        header('location:cart.php');
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

      

if (isset($_GET['search'])){
	$name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
	$sql = "SELECT * FROM `test` WHERE name LIKE '%$name%' || id='$name'";
  $result = mysqli_query($con, $sql);

    
  while($row = $result->fetch_assoc() ){

        ?>
        
        <div class = "all product-div">
        <form method="post" action="search.php?id=<?php echo $row["id"];?>" enctype="multipart/form-data">
        <img class="product-img" src="sm/<?php echo $row["image"];?>"><br>
        <input type="hidden"   name="image" value="<?= $row['image'];?>">
        <input type="hidden" class="product-name" i="myh3" name="name" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?> <br>
        <p class="product-desc"><?php echo $row["description"]."<br>" ?></p>
     
        <input type="submit" id="cart-btn" tyle=" height:30px; width:100px; background-color:#ff9800; border:none;
          border-radius:5px;" name="add_to_cart" value="Add to Wishlist"/>

        <input type="hidden" value="<?php echo $row['link']; ?>" name="link"><button id="product-btn" ><a href="<?php echo $row['link']; ?>">View                     Product</a></button>

        </form>
      </div>

<?php

    }
}

?>



</div>
</div>






<!-- bottom section-->

<?php
include'footer.php';
?>
