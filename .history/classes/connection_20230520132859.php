<?php
$servername = "localhost"; // Tên máy chủ MySQL, thường là localhost
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL
$database = "etmsh"; // Tên cơ sở dữ liệu MySQL

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
} else {
    echo "Kết nối thành công";
}
?>
