<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kết nối đến cơ sở dữ liệu
        $conn = mysqli_connect('localhost', '', '', '');

        // Kiểm tra kết nối
        if (!$conn) {
            die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
        }

        // Truy vấn để kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        // Kiểm tra kết quả truy vấn
        if (mysqli_num_rows($result) > 0) {
            // Đăng nhập thành công
            session_start();
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
        } else {
            // Đăng nhập thất bại
            echo "<p>Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại.</p>";
        }

        // Đóng kết nối đến cơ sở dữ liệu
        mysqli_close($conn);
    }
    ?>
    <form method="post">
        <label>Tên đăng nhập:</label><br>
        <input type="text" name="username"><br>
        <label>Mật khẩu:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Đăng nhập">
    </form>
</body>

</html>