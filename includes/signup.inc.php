<?php
if (isset($_POST['signup-submit'])){
    require 'dbh.inc.php';
    require '../utility/utility.php';

    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['repeat_pwd'];

    if (empty($username) ||empty($email) || empty($password) || empty($passwordRepeat)){
        header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("location: ../signup.php?error=invalidmailuid");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat){
        header("location: ../signup.php?error=passwordcheckuid=".$username."&mail=".$email);
        exit();
    }
    else (
        $query="SELECT uidUsers FROM users WHERE username=?" 
        $query_res = $con->query($query);
        $count= count($query_res->fetchAll());
        if($count > 0){
        //user exists
        }
    )
}