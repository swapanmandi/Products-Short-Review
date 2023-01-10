<?php 
include 'conn.php';
include 'header.php';
session_start();
?>

<div class="signup">
	
	<h2>Signup</h2>

	<form method="post">
		
		Username:
		<input type="Username" name="username" placeholder="Username" required> <br><br>
		Password:
		<input type="password" name="password" placeholder="password" required>  <br><br>
		<input type="submit" name="submit">
	</form>

</div>


<div class="signin">
	
	<h2>Login</h2>

	<form method="post">
		
		Username:
		<input type="Username" name="username" placeholder="Username" required> <br><br>
		Password:
		<input type="password" name="password" placeholder="password" required>  <br><br>
		<input type="submit" name="login_btn">
	</form>

</div>


<?php

if(isset($_POST['submit'])){
$username =$_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $password = md5($password);

$sql = "INSERT INTO `users`(`username`, `password`) VALUES('$username', '$password')";
$result = mysqli_query($con, $sql);

};


if (isset($_POST['login_btn'])) {
	
	$username =$_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $password = md5($password, FALSE);
    echo $password;

    $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    
     if ($count ==1 ) {
          	
            $_SESSION['loginuser'] = $username;
            $_SESSION['loginpass'] = $password;
            header('location:users/index.php');
     	
        }
        else{
        echo "<br><br>invalid username or password";
        //header('location:index.php');
    }

}

?>

