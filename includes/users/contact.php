<?php 
include'header.php';
include 'session.php';

$name = $email = $mobile = $message = "";
$nameErr = $emailErr = $mobileErr = $messageErr = "";

if(isset($_POST['submit'])){

if($_SERVER['REQUEST_METHOD'] == "POST"){
if(empty($_POST['name'])){
    $nameErr ="Name is required";
}
else{
    $name = input($_POST['name']);
}

if(empty($_POST['email'])){
    $emailErr ="Email is required";
}
else{
    $email = input($_POST['email']);
}

if(empty($_POST['mobile'])){
    $mobileErr ="Mobile is required";
}
else{
    $mobile = input($_POST['mobile']);
}

if(empty($_POST['message'])){
    $messageErr ="Message is required";
}
else{
    $message = input($_POST['message']);
}

$mobile = $_POST ["mobile"];  
if (!preg_match ("/^[0-9]*$/", $mobile) ){  
    $mobileErr = "Only numeric value is allowed.";  
    echo $mobileErr;  
} else {  
    echo $mobile;  
}

}
}

?>

<div class="page">

<div class="contact-div">
    
<form method="POST" action="contact-fun.php" >
<p>Your Name:</p>
<input type="text" name="name">
<span class="error"> <?php echo "*".$nameErr; ?> </span>


<p>Email  Address:</p>
<input type="text" name="email">
<span class="error"> <?php echo "*".$emailErr; ?> </span>


<p>Your Mobile Number:</p>
<input type="text" name="mobile">
<span class="error"> <?php echo "*".$mobileErr; ?> </span>


<p>Message</p>
<textarea name="message" rows="5" cols="42"></textarea>
<span class="error"> <?php echo "*".$messageErr; ?> </span>
<br>
<br>
<button class="contact-btn" type="submit">Submit</button>

</form>

</div>
</div>

<?php
include'footer.php';
?>