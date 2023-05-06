<!DOCTYPE html>
<html>

<head>
    <title>Teacher | Student Manager</title>
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
    require "config.php";
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
                                <a href="<?php echo $domain_courses_PedagogicalBehaviorSkills ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Pedagogical behavior
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_Presentation ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Presentation skills
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_Pedagogical ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Pedagogic
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_TeachingSkill ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Teaching skills
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $domain_contactList ?>" class="nav-link">
                            <i class="nav-icon fa fa-question-circle"></i>
                            <p>
                                Question manager
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $domain_studentManager ?>" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>
                                Student manager
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
            <h2>Student Manager</h2>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Phone</th>
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
                    $sql = "SELECT * FROM user WHERE role = 0";
                    $result = $conn->query($sql);

                    // Nếu có dữ liệu, thêm vào danh sách
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "<td>" . $row["fullname"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No student found.</td></tr>";
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