<?php 
include 'conn.php';
include 'header.php';
include 'session.php';
?>

<?php

$id=$_GET['id'];

if($id=='pets'){
    $sql ="SELECT * FROM `test` WHERE category LIKE '%pets%'";
    }

    else if($id=='b&k'){
        $sql ="SELECT * FROM `test` WHERE category LIKE '%b&k%'";
        }

        else if($id=='travel'){
            $sql ="SELECT * FROM `test` WHERE category LIKE '%travel%'";
            }

            else if($id=='h&g'){
                $sql ="SELECT * FROM `test` WHERE category LIKE '%h&g%'";
                }

                else if($id=='outdoors'){
                    $sql ="SELECT * FROM `test` WHERE category LIKE '%outdoors%'";
                    }
            
                    else if($id=='kitchen'){
                        $sql ="SELECT * FROM `test` WHERE category LIKE '%kitchen%'";
                        }
            
                        else if($id=='appliances'){
                            $sql ="SELECT * FROM `test` WHERE category LIKE '%appliances%'";
                            }

                            else if($id=='mobile'){
                                $sql ="SELECT * FROM `test` WHERE category LIKE '%mobile%'";
                                }
                        
                                else if($id=='electronics'){
                                    $sql ="SELECT * FROM `test` WHERE category LIKE '%electronics%'";
                                    }
                        
                                    else if($id=='gadgets'){
                                        $sql ="SELECT * FROM `test` WHERE category LIKE '%gadgets%'";
                                        }

                                        else if($id=='gifts'){
                                            $sql ="SELECT * FROM `test` WHERE category LIKE '%gifts%'";
                                            }

                                            
                                        else if($id=='tech'){
                                            $sql ="SELECT * FROM `test` WHERE category LIKE '%tech%'";
                                            }





else{
    $sql ="SELECT * FROM `test`";
}
$result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_assoc($result)){ 

        ?>
       
        <div class = "all product-div">

        <form method="post" action="test.php?id=<?php echo $row["id"];?>" enctype="multipart/form-data">

        <img class="product-img" src="sm/<?php echo $row["image"];?>"><br>
        <input type="hidden"   name="image" value="<?= $row['image'];?>">
        <input type="hidden" class="product-name" i="myh3" name="name" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?> <br>
        <p class="product-desc"><?php echo $row["description"]."<br>" ?></p>
     
        <input type="submit" id="cart-btn" tyle=" height:30px; width:100px; background-color:#ff9800; border:none;
          border-radius:5px;" name="add_to_cart" value="Add to Wishlist"/>

        <input type="hidden" value="<?php echo $row['link']; ?>" name="link"><button id="product-btn" ><a href="<?php echo $row['link']; ?>">View                   Product</a></button>

        </form>
      </div>

<?php

    }
  

?>




<!-- bottom section-->

<?php include'footer.php'; ?>

 


