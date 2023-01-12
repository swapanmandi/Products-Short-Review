
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
