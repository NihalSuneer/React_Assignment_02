<?php


$servername = "localhost";
$username = "username";
$password = "password";
$database = "your_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function createProduct($description, $image, $pricing, $shipping_cost) {
    global $conn;
    // Implement SQL INSERT query here
}

function readProduct($id) {
    global $conn;
    // Implement SQL SELECT query here
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    if ($_GET['action'] === 'getProduct') {
       
    } elseif ($_GET['action'] === 'getUser') {
       
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if ($_POST['action'] === 'createProduct') {
        
    } elseif ($_POST['action'] === 'createUser') {
       
    }
}



?>
