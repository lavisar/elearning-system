<!DOCTYPE html>
<html>

<head>
    <title>Contact List</title>
    <!-- Bootstrap CSS -->
</head>

<body>
    <!-- PHP kiểm tra đăng nhập và phân quyền -->
    <?php
    session_start();
    if ($_SESSION['role'] == 0) {
        // Nếu chưa sai quyền, chuyển hướng đến trang đăng nhập        
        header('Location: ../login.php');
        exit;
    }
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập        
        header('Location: ../login.php');
        exit;
    }
    $username = $_SESSION['username'];
    include "layout.php";
    ?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="../assets/img/logo.png" class="brand-image" />
            <span class="brand-text font-weight-light">E-learning.vn</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image"></div>
                <div class="info">
                    <a href="#" class="d-block">
                        <?php
                        echo "<h5> Welcome, $username !</h5>";
                        ?>
                    </a>

                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="updateProfile.php" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Courses
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./API_Youtube/student_courses/DataStructures.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Pedagogical behavior
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./API_Youtube/student_courses/Java.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Presentation skills
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./API_Youtube/student_courses/PHP.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Pedagogic
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./API_Youtube/student_courses/Python.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Teaching skills
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-question-circle"></i>
                            <p>
                                Question manager
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper p-5">
        <div class="container">
            <h2>Question List</h2>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Question</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Tạo kết nối đến database
                    $conn = mysqli_connect('localhost', '', '', 'elearndb');
                    // Kiểm tra kết nối
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // Truy vấn SQL để lấy dữ liệu từ bảng contact
                    $sql = "SELECT * FROM contact ORDER BY id DESC";
                    $result = $conn->query($sql);

                    // Nếu có dữ liệu, thêm vào danh sách
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td style='max-width: 70%;'>" . $row["question"] . "</td>";
                            echo "<td><a href='./action_php/delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No contacts found.</td></tr>";
                    }

                    // Đóng kết nối đến database
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>