		<?php 
session_start();
include 'conn.php';

if (!isset($_SESSION['loginUsername'])) {
	header('location:index.php');

	session_destroy();
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>upload products data</title>
        <link rel="stylesheet" type="text/css" href="style-page.css">
		<link rel="icon" href="upload/icon.png" type="image/icon">
	</head>
	<body>


   <div class="navbar">
    
   <div class="logo-div"><img src='upload/tsr-logo.png'/></div>

   <div class="cont">

   
    <a href="index.php">HOME</a>

     <a href="https://www.theshortreviews.xyz/">WEBSITE</a>
     <a href="logout.php">LOGOUT</a>
 </div>
</div>

<!--for insrt function-->


         <div class="container">

           <div class="insert">
              <form method="POST" action="" enctype="multipart/form-data">
               <p>Product Name:</p>
                <input type="text" name="name">

                
                 <p>Product Image:</p>
                  <input type="file" name="image" ><br>
                   
				  <p>Image Title:</p>
				  <input type="text" name="img_title" >

				  <p>Image Description:</p>
				  <input type="text" name="img_desc"><br><br>

                   <label>Product Category:</label>
  
	 
                  <input type="checkbox" name="category[]" value="travel">travel</input>
				  <input type="checkbox" name="category[]" value="gifts">gifts</input>
				  <input type="checkbox" name="category[]" value="pets">pets</input>
				  <input type="checkbox" name="category[]" value="h&g">Home & Garden</input>
				  <input type="checkbox" name="category[]" value="kitchen">Kitchen</input>
				  <input type="checkbox" name="category[]" value="outdoors">Outdoors</input>
				  <input type="checkbox" name="category[]" value="h&f">Health & fit</input>
				  <input type="checkbox" name="category[]" value="b&k">Baby & kids</input>
				  <input type="checkbox" name="category[]"value="cloths">Cloths</input>
				  <input type="checkbox" name="category[]" value="mobile">Mobile</input>
				  <input type="checkbox" name="category[]" value="tech">Tech</input>
				  <input type="checkbox" name="category[]" value="electronics">Electronics</input>

  <br><p>Product Description:</p>
  <input type="text" name="description">
  <p>Product Link:</p>
	<input type="link" name="link"> <br>
  <br>

  <button type="submit" class="btn" name="submit">Upload</button>

</form>

</div>
</div>


<?php
include 'conn.php';


 if (isset($_POST['submit'])) {

$name=$_POST["name"];
$file=$_FILES["image"];
$category=$_POST["category"];
$link=$_POST["link"];
$pid=$_POST["pid"];
$img_title=$_POST["img_title"];
$img_desc=$_POST["img_desc"];
$description=$_POST['description'];


$categoryNew = "";

foreach($category as $ctg){
	$categoryNew .= $ctg.",";
}


$filename =$file["name"];
$filepath =$file["tmp_name"];
$fileerror =$file["error"];



//print_r($file);

    
    if($fileerror == 0){
    $destfile ="upload/".$filename;
    //echo $destfile
  
    move_uploaded_file($filepath, $destfile);

    

   $sql = "INSERT INTO `test`(`p_id`,`name`,`image`,`description`,`link`,`category`,`img_title`,`img_desc`) 
    VALUES ('$pid','$name','$destfile','$description','$link','$categoryNew','$img_title','$img_desc')";

 $result = mysqli_query($con, $sql);
   
   if( $result){
	
	echo '<span class="insert_msg">Insert Successed!</span>';
	
}
else{
    echo "insert connection failed" . "<br>" . $sql . "<br>" . mysqli_error($con) . "<br>";
}


    }

    else{
        echo '<span class="insert_msg">Please Select Product Image!</span>';
    }
    
}
?>
<script>

	setTimeout( function(){
		var alert = document.getElementsByClassName("insert_msg");
alert.remove();
	}, 3000);

	</script>


	</body> 
	</html>


