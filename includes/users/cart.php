<?php 
include 'conn.php';
include 'session.php';
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

//for remove all

if (isset($_POST['deleteall'])) {
	
$deleteall = "DELETE FROM `cart` ";
$result = mysqli_query($con,$deleteall);

}
//remove one by one

$id = $_GET['id'];

$delete = "DELETE FROM `cart` WHERE id = '$id'";
$result = mysqli_query($con,$delete);
    
?>



<form method="post">
<button name="deleteall" class="remove-all-btn">Remove All</button>
</form>
        <?php

   
       	$sql = "SELECT * FROM `cart`";
       	$result = mysqli_query($con, $sql);

       	if (mysqli_num_rows($result) >0) {
       	
 
       	while( $row = mysqli_fetch_assoc($result)){
       		
            ?>
       	


    <table>
        
    <tr>
        <td><img src="sm"></td>

        <td> <?= $row['name']; ?></td>

        <td><a style=" padding:5px; width:100px; background-color:#ff9800; text-decoration:none;
          border-radius:5px;" href="<?= $row['link']; ?>" >View Product</a></td>

        <td><a href="cart.php?id=<?= $row['id']; ?>"><img src="sm/upload/icons8-delete-100 (1).png" style="height:30px; width:27px"></a></td>

    </tr>
    </table>
            <?php
        }
    }
    else
    	echo "Cart is empty.";
    
    ?>

<?php
include 'footer.php';
?>

</body>
</html>
