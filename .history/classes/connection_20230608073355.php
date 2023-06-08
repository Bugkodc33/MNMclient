<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "etmsh"; 

// $conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Kết nối không thành công: " . $conn->connect_error);
// }
//  else
// {
//     echo "Kết nối thành công";
// }
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
