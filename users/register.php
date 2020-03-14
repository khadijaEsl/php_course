<?php
    require_once "../modules.php";
if (
    isset($_POST["fullname"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["confirm_password"]) &&
    isset($_POST["birth"])  
) {
    extract($_POST);
    $picture = "0";
    if(isset($_FILES["picture"])){
        $picture = upload_picture($_FILES["picture"]);
    }

    register($fullname,$email,$password,$confirm_password,$birth,$picture);
}else{
    header("location:/register.php?error=true&msg=all_required");
}
