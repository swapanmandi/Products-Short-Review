
<?php
error_reporting(0);



$servername = "localhost";
$username ="root";
$password ="";
$database ="pro_lan_db";

$con = mysqli_connect($servername, $username, $password, $database);

if(!$con){
	die("error".mysqli_connect_error());
}
else{	//echo " database connect successfully!!"."<br>"; 
}

?>
