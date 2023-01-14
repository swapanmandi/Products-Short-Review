?php 
include 'conn.php';
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
   <style>
        body-div{
            padding-top:100px ;
        }
        td{
            height:30px;
            width:200px;
            background-color:#8bcdc8;
            text-align:center;
            padding: 3px 0 3px 0;
            
        }
        td img{
            height:150px;
            width:130px;
        }
        .empty_msg{
            display: block;
            text-align: center;
            padding-bottom: 250px;       }
    </style>
  
  </head>
<body>

<?php
	
	//for remove from cart


if (isset($_GET['action'])) {
    if ($_GET['action']== "delete") {
        foreach($_SESSION['cart'] as $key => $value){
       if( $value['item_id'] == $_GET['id']) {
           unset($_SESSION['cart'] [$key]);
           header('location:cart.php');
       }
    }
}
}
//remove all
if (isset($_GET['action'])) {
    if ($_GET['action']== "deleteAll") {
        //foreach($_SESSION['cart'] as $key => $value){
       //if( $value['item_id'] == $_GET['id']) {
           unset($_SESSION['cart']);
           header('location:cart.php');
       }
    }
//}}
    
?>



<?php
    if (!empty($_SESSION['cart'])) {

        ?>
<button class="remove-all-btn"><a href="cart.php?action=deleteAll">Remove All</a></button>
        <?php

        foreach ($_SESSION['cart'] as $key => $value){
            ?>


    <table>
   <tr>
        <td><img src="sm/<?= $value['item_image']; ?>"></td>
        <td> <?= $value['item_name']; ?></td>
        <td><a style=" padding:5px; width:100px; background-color:#ff9800; text-decoration:none;
          border-radius:5px;" href="<?= $value['item_link']; ?>" >View Product</a></td>
        <td><a href="cart.php?action=delete&id=<?= $value['item_id']; ?>"><img src="sm/upload/icons8-delete-100 (1).png" style="height:30px; width:27px"></a></td>
    </tr>
    </table>
            <?php
        }
    }
    else 
        echo "<span class='empty_msg'>Your cart is empty!<span>";


?>
  
  
  <?php
include 'footer.php';
?>

</body>
</html>
