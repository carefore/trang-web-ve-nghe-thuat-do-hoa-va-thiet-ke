<?php
// Kết nối đến cơ sở dữ liệu
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ POST request
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Lưu dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO art_info (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
