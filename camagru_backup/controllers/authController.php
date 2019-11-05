<?php
session_start();

require 'config/connection.php';
include ("config/database.php");
$errors = array();
$username = '';
$email = '';

//if user clicks on the signup button
if (isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    
    //validation
    if (empty($username)){
        $errors['username'] = "Username required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email address in invalid";
    }
    if (empty($email)){
        $errors['email'] = "Email required";
    }
    if (empty($password)){
        $errors['password'] = "Password required";
    }
    
    if ($password !== $passwordConf){
        $errors['password'] = "The two password do not match";
    }
    
    //validation - checking if username already exists
    $conn = connection();
    $usernameQ = "SELECT * FROM users WHERE username=:username LIMIT 1";
    $stmt = $conn->prepare($usernameQ);
    $stmt->execute(array(":username"=>$username));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    print_r($row[0]);

    if ($stmt->rowCount() > 0){
        $errors['username'] = "Username already exists";
    }

    //validation - checking if email already exists
    $conn = connection();
    $emailQ = "SELECT * FROM users WHERE email=:email LIMIT 1";
    $stmt = $conn->prepare($emailQ);
    $stmt->execute(array(":email"=>$email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($stmt->rowCount() > 0){
        $errors['email'] = "Email already exists";
    }
    
    //if validation is a success
    if (count($errors) === 0){
        //login user
        $_user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['verified'] = $verified;

        //set message
        $_SESSION['id'] = $user_id;
        $_SESSION['alert-class'] = "alert-success";

        //insert data to database
        $conn = new PDO("mysql:host=localhost;dbname=camagru", $DB_USER, $DB_PASS);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = 0;
        
        $sql = "INSERT INTO users (username, email, verified, token, password) VALUES(:username, :email, :verified, :token, :password)";
        $ex = $conn->prepare($sql);
        
        try {
            $ex->execute(['username'=>$username, 'email'=>$email,'verified'=>$verified,'token'=>$token, 'password'=>$password]);
            header("location: index.php");
            exit();
        } catch (Exception $e){
            echo  $e;
        }
    }
}

//if user clicks on the signin button
if (isset($_POST['signin-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //validation
    if (empty($username)){
        $errors['username'] = "Username/E-mail required";
    }
    if (empty($password)){
        $errors['password'] = "Password required";
    }

    //validation - checking if email already exists
    $conn = connection();
    $userEmailQ = "SELECT * FROM users WHERE email=:email OR username=:username LIMIT 1";
    $stmt = $conn->prepare($userEmailQ);
    $stmt->execute(array(':email'=>$email,':username'=>$username));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($stmt->rowCount() === 0){
    }
    else{
        $errors['username'] = "Username/E-mail already exists";
    }
}