<?php
//using mysqli procedural
$conn=mysqli_connect("localhost","root","","e-commerce");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


//using mysqli oop

$servername = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";


$conn->close();
//using PDO
$servername = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";

try {
    $conn = new PDO(
        "mysql:host=$servername;dbname=$database",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>
