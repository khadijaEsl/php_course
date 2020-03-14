<?php 
require_once "modules.php";
start_my_session();
if(isset($_SESSION["email"])){
    echo "welcome " . $_SESSION['fullname'];
}else{
    header("location:login.php");
}