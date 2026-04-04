<?php
$host="localhost";
$user="root";
$pass="";
$db="portfolio_db";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
     $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    echo  $e->getMessage();
}

?>