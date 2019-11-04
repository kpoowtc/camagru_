<?php

//connect to server
require 'database.php';

// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "1. Database created successfully <br/>";
    $conn->select_db("$dbname");

    $sql_user = "CREATE TABLE user (
        id INT AUTO_INCREMENT PRIMARY KEY;
        username VARCHAR(25) NOT NULL;
        password VARCHAR(255) NOT NULL;
        picturesourceverified VARCHAR(255) NULL,
        email VARCHAR(100) NOT NULL,
        token VARCHAR(50)";
    
}