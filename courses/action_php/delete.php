<?php
// Tạo kết nối đến database
$conn = mysqli_connect('localhost', '', '', 'elearndb');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy ID của bản ghi cần xóa
$id = $_GET["id"];

// Truy vấn SQL để xóa bản ghi tương ứng
$sql = "DELETE FROM contact WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Delete successfully."); window.location.href="../contactList.php";</script>';
} else {
    echo "Error deleting record: " . $conn->error;
}

// Đóng kết nối đến database
$conn->close();
