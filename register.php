<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký</title>
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
            height: 520px;
        }

        h2 {
            text-align: center;
            margin-top: 6px;
            margin-bottom: 42px;
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

        input[type=tel] {
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
        <h2 class="text-center">Become a member!</h2>
        <?php

        // Tạo kết nối đến cơ sở dữ liệu
        $conn = mysqli_connect('localhost', '', '', 'elearndb');

        // Kiểm tra kết nối
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        if (isset($_POST['username']) && isset($_POST['fullname']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['role'])) {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            // Nếu role là teacher thì giá trị là 1, ngược lại là 0
            if ($_POST['role'] == 'teacher') {
                $role = 1;
            } else {
                $role = 0;
            }

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Thêm dữ liệu vào bảng
            $sql = "INSERT INTO user (username, password, fullname, phone, role) VALUES ('$username', '$hashed_password', '$fullname', '$phone', $role)";
            if (mysqli_query($conn, $sql)) {
                header('Location: login.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Đóng kết nối đến cơ sở dữ liệu
        mysqli_close($conn);
        ?>

        <form method="post" style="margin-top: 10px;">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="fullname">Full name:</label>
            <input type="text" name="fullname" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <label for="phone">Phone:</label>
            <input type="tel" name="phone" required><br>

            <label for="role">Select your role:</label> <br>
            <input type="radio" id="teacher" name="role" value="teacher">
            <b>Teacher</b>
            <input type="radio" id="student" name="role" value="student" checked>
            <b>Student</b>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>