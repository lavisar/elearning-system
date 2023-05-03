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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 100px auto;
            max-width: 350px;
            padding: 20px;
            border-radius: 10px;
            height: 400px;
        }

        h1 {
            text-align: center;
        }

        input[type=text],
        input[type=password] {
            border: none;
            border-radius: 50px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
            padding: 12px;
            width: 95%;
            margin: 9px -3px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            margin-top: 10px;
            padding: 10px;
            width: 50%;
            margin-left: 25%;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        form {
            margin-top: 50px;
        }

        .register-btn {
            padding: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome back!</h1>
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
                $userId = $row['id'];
                $role = $row['role'];
                $fullName = $row['fullname'];
                $phone = $row['phone'];
                // Kiểm tra giá trị của trường role
                if ($role == 1) {
                    // Nếu role = 1 thì chuyển hướng đến trang teacher.php
                    session_start();
                    // lưu thông tin đã đăng nhập
                    $_SESSION['id'] = $userId;
                    $_SESSION['role'] = $role;
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['full_name'] = $fullName;
                    $_SESSION['phone'] = $phone;
                    header('Location: ./courses/teacher.php');
                } else {
                    // Nếu role = 0 thì chuyển hướng đến trang teacher.php
                    session_start();
                    // lưu thông tin đã đăng nhập
                    $_SESSION['id'] = $userId;
                    $_SESSION['role'] = $role;
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['fullname'] = $fullname;
                    $_SESSION['phone'] = $phone;
                    header('Location: ./courses/student.php');
                }
            } else {
                // Đăng nhập thất bại
                echo '<script language="javascript">';
                echo 'alert("wrong user name or password, please try again")';
                echo '</script>';
            }

            // Đóng kết nối đến cơ sở dữ liệu
            mysqli_close($conn);
        }
        ?>
        <form method="post">
            <label>User name:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>
            <p class="register-btn">Don't have a account? <a href="register.php">Click here</a></p>
            <div class="login-btn">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</body>

</html>