<?php
session_start();
if (!isset($_SESSION['loginuser']) && !isset($_SESSION['loginpass'])) {
    header('location:../signup.php');
    session_destroy();
}

?>