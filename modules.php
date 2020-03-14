<?php
function connecter_db()
{
    return new PDO("mysql:host=localhost;dbname=tp_khadija", "root", "");
}

function register($fullname, $email, $password, $confirm_password, $birth, $picture_link = "0")
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?error=true&msg=invalid_email");
        die();
    }
    if ($password != $confirm_password) {
        header("location:register.php?error=true&msg=password_match");
        die();
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $pdo = connecter_db();
    $stmt = $pdo->prepare("INSERT INTO `users`( `fullname`, `email`, `password`, `birth`, `picture`) VALUES ( ? , ? , ? , ? , ? )");
    if ($stmt->execute([$fullname, $email, $password, $birth, $picture_link])) {
        header("location:register.php?success=true&msg=user_created");
        die();
    } else {
        header("location:register.php?error=true&msg=fail_creation");
        die();
    }
}

function upload_picture($file)
{
    move_uploaded_file($file["tmp_name"], $_SERVER['DOCUMENT_ROOT'] .
        "/pictures/" . $file["name"]);
    return "/pictures/" . $file["name"];
}

function login($email, $password)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:login.php?error=true&msg=invalid_email");
        die();
    }
    $pdo = connecter_db();
    $stmt = $pdo->prepare("select * from users where email = ? LIMIT 1");
    if ($stmt->execute([$email])) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user["password"])) {
            $_SESSION["fullname"] = $user["fullname"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["picture"] = $user["picture"];
            $_SESSION["birth"] = $user["birth"];
            header("location:/index.php");
        }else{
            header("location:login.php?error=true&msg=incorrect_password");
        }
    } else {
        header("location:login.php?error=true&msg=not_found_email");
        die();
    }
}

function start_my_session(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
}