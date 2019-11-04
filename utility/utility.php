<?php
function usernameCheck($username) {
    $con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $stmt = $con->prepare("SELECT uidUser FROM users WHERE username =?");
    $stmt->bindParam('?', $username);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        return 1;
    } else {
        return 0;
    }
}