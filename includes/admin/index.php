<?php 
include 'conn.php';
session_start();
?>


<!DOCTYPE html>
<html>
<head>

	<title>This is log in page</title>
	<link rel="stylesheet" type="text/css" href="">
  <link rel="icon" href="upload/icon.png" type="image/icon">
    <style>

.login-div{
	margin: auto;
	height: 450px;
	width: 400px;
	padding: 35px 35px;
	border-radius: 20px;
	background-color: #ecf0f3;
	box-shadow: 13px 13px 20px #cbced1,
	            -13px -13px 20px #fff;
	            

}
.logo{
	background: url("upload/icon.png");
	height: 100px;
	width: 100px;
	border-radius: 50%;
	margin: auto;
	background-size: cover;
}
.title{
	text-align: center;
	font-size: 40px;
	padding-top: 25px;
	letter-spacing: 0.5px;
	color: #24cfaa;

}
.sub-title{
	text-align: center;
	font-size: 20px;
	padding-top: 10px;
	letter-spacing: 0.5px;
	color: #24cfaa;
}
.fields{
	width: 100%;
	padding: 20px 55px 5px 5px;
}
.fields input{
	border: none;
	outline: none;
	background: none;
	font-size: 18px;
	color: #555;
	padding: 10px 200px 10px 5px;
}
.username, .password{
	margin-bottom: 30px;
	border-radius: 25px;
	box-shadow: inset 8px 8px 8px #cbced1,
	         inset  -8px -8px 8px #fff;
}
.login-button{
	outline: none;
	border: none;
	cursor: pointer;
	height: 60px;
	width: 100%;
	border-radius: 30px;
	font-size: 20px;
	font-weight: 800;
	font-style: 'lato',sans-series;
	color: #fff;
	text-align: center;
	background: #24cfaa;
	box-shadow: 3px 3px 8px #b1b1b1,
	-3px -3px 8px #ffffff;
	transition: 0.5s;
}
.login-button:hover {
	background: #2fdbb6;

}
.login-button:active {
	background: #1da88a;
}
.link{
padding: 10px;
text-align: center;


}

    </style>

</head>
<body>

	<div class="login-div">
		<div class="logo"></div>
		<div class="title"></div>
		<div class="sub-title">THESHORTREVIEWS.XYZ</div>
        <form method="post" action="">
		<div class="fields">
            
			<div class="username"><input type="username" name="username" placeholder="username"/></div>
			<div class="password"><input type="password" name="password" placeholder="password"/></div>
			
		</div>
		
		<input type="submit"  name = "submit" class="login-button"></input>
        </form>
		<div class="link">
			<a href="#">Forget Password?</a> or <a href="#">Sign Up</a>
		</div>

	</div>

    <?php
  
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = filter_var($username, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM `login` WHERE username = '$username' and password = '$password' ";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['loginUsername'] = $username;
            $_SESSION['loginPassword'] = $password;
            header('location:insert.php');
        }
        else{
        echo "invalid username or password";
        header('location:index.php');
    }

    }


    ?>

</body>
</html>