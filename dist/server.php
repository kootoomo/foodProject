<?php 

// get JSON data for PHP
$_POST = json_decode(file_get_contents("php://input"), true);

echo var_dump($_POST);

// $servername = "localhost";
// $username = "root";
// $password = "1234";
// $database = "food";

// $conn = new mysqli($servername, $username, $password, $database);

// $conn->close();
