<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "etmsh"; 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch(PDOException $e) {
    echo "lỗi" . $e->getMessage();
}
?>
