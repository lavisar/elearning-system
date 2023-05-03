<?php
session_start();
// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect('localhost', '', '', 'elearndb');
if (!$conn) {
    die('Không thể kết nối đến cơ sở dữ liệu');
}

// Lấy thông tin từ form
$role = $_POST['role'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$userId = $_SESSION['id'];

// Cập nhật thông tin người dùng
$sql = "UPDATE user SET fullname='$fullname', phone='$phone' WHERE id=$userId";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả
if ($result) {
    // Cập nhật thành công, cập nhật lại session
    $_SESSION['fullname'] = $fullname;
    $_SESSION['phone'] = $phone;
    $role == 1 ? header('Location: ../teacher.php') : header('Location: ../student.php');
} else {
    // Cập nhật thất bại
    echo '<script language="javascript">';
    echo 'alert("Update information failed, please try again")';
    echo '</script>';
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
