<?php
include 'database.php';
include 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
//creating database
$conn = new PDO("mysql:host=$DB_HOST;", $DB_USER, $DB_PASS);
$sql = "CREATE DATABASE IF NOT EXISTS `camagru`";
$conn->exec($sql);
echo "Database created successfully<br><br>";

//creating table for $DB_NAME
$conn = connection();
$sql = "CREATE TABLE IF NOT EXISTS `users` (
`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`username` VARCHAR(25) NOT NULL UNIQUE,
`email` VARCHAR(255) NOT NULL UNIQUE,
`verified` BOOLEAN DEFAULT 0,
`token` VARCHAR(100),
`password` VARCHAR(255))";
$conn->exec($sql);
//echo "Table user_info created successfully<br><br>";


// //creating table for $DB_NAME
// //$conn = connection($DB_NAME);
// $sql = "CREATE TABLE images (
// id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// username VARCHAR(25) NOT NULL,
// password VARCHAR(255),
// picturesource VARCHAR(255) NULL,
// verified TINYINT(1),
// email VARCHAR(100))";
// $conn->exec($sql);
// echo "Table user_info created successfully<br><br>";

// //creating table for $DB_NAME - USER
// // $conn = connection();
// $sql = "CREATE TABLE IF NOT EXISTS users.user (
// id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// username VARCHAR(25) NOT NULL,
// password VARCHAR(255),
// picturesource VARCHAR(255) NULL,
// verified TINYINT(1),
// email VARCHAR(100))";
// $conn->exec($sql);
// // echo "Table USER created successfully<br><br>";

// // //creating table for $DB_NAME - IMAGE
// // $conn = connection($DB_NAME);
// $sql = "CREATE TABLE IF NOT EXISTS users.image (
// image_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// source VARCHAR(255),
// creationdate DATETIME,
// id INT(11) UNSIGNED ,
// FOREIGN KEY (id) REFERENCES user(id))";
// $conn->exec($sql);
// // echo "Table IMAGES created successfully<br><br>";

// // //creating table for $DB_NAME - COMMENT
// // $conn = connection($DB_NAME);
// $sql = "CREATE TABLE IF NOT EXISTS users.comment (
// comment_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// id INT(11) UNSIGNED,
// image_id INT(11) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
// text VARCHAR(100),
// FOREIGN KEY (id) REFERENCES user(id),
// FOREIGN KEY (image_id) REFERENCES image(image_id))";
// $conn->exec($sql);
// // echo "Table COMMENT created successfully<br><br>";

// // //creating table for $DB_NAME - LIKE
// // $conn = connection($DB_NAME);
// $sql = "CREATE TABLE IF NOT EXISTS users.like (
// like_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// id INT(11) UNSIGNED AUTO_INCREMENT,
// image_id INT UNSIGNED AUTO_INCREMENT FOREIGN KEY,
// FOREIGN KEY (id) REFERENCES user(id),
// FOREIGN KEY (image_id) REFERENCES comment(image_id))";
// $conn->exec($sql);
// echo "Table LIKE created successfully<br><br>";

?>