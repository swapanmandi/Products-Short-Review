<?php
include'conn.php';


$name = $_POST['name'];
$email =$_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$sql ="INSERT INTO `contact`(`name`, `email`, `mobile`, `message`) VALUES ('$name', '$email', '$mobile', '$message' )";

if(mysqli_query($con, $sql)){
    die("Your message is submitted.");
}
else{
    echo "error";
}


?>