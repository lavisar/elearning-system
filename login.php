<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        input[type=text],
        input[type=password] {
            border: none;
            border-radius: 3px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
            padding: 10px;
            width: 100%;
        }

        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            margin-top: 10px;
            padding: 10px;
            width: 100%;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Đăng nhập</h1>
        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Kết nối đến cơ sở dữ liệu
            $conn = mysqli_connect('localhost', '', '', 'elearndb');

            // Kiểm tra kết nối
            if (!$conn) {
                die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
            }

            // Truy vấn để kiểm tra thông tin đăng nhập
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);

            // Kiểm tra kết quả truy vấn
            if (mysqli_num_rows($result) > 0) {
                // Lấy thông tin người dùng từ kết quả truy vấn
                $row = mysqli_fetch_assoc($result);
                $role = $row['role'];

                // Kiểm tra giá trị của trường role
                if ($role == 1) {
                    // Nếu role = 1 thì chuyển hướng đến trang teacher.php
                    session_start();
                    $_SESSION['username'] = $username;
                    header('Location: ./course/teacher.php');
                } else {
                    // Nếu role = 0 thì chuyển hướng đến trang student.php
                    session_start();
                    $_SESSION['username'] = $username;
                    header('Location: ./course/student.php');
                }
            } else {
                // Đăng nhập thất bại
                echo "<p>Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại.</p>";
            }

            // Đóng kết nối đến cơ sở dữ liệu
            mysqli_close($conn);
        }
        ?>
        <form method="post">
            <label>Tên đăng nhập:</label>
            <input type="text" name="username" required>

            <label>Mật khẩu:</label>
            <input type="password" name="password" required>

            <input type="submit" name="submit" value="Đăng nhập">
        </form>
    </div>
</body>

</html>