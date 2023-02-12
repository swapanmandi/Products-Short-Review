<?php
error_reporting(0);



$servername = "sql306.epizy.com";
$username ="epiz_29813720";
$password ="ZYwXdT33ToY6yP1";
$database ="epiz_29813720_tsr";

$con = mysqli_connect($servername, $username, $password, $database);

if(!$con){
	die($mysqli_connect_error);
}
else{	//echo " database connect successfully!!"."<br>"; 
}

?>