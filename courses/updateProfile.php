<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elearn | Update profile</title>
</head>

<body>
    <?php
    require '../config.php';
    session_start();
    $user_id = $_SESSION['id'];
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: ../login.php');
        exit;
    }
    // kết nối DB để lấy info theo id
    $conn = mysqli_connect('localhost', '', '', 'elearndb');
    $result = mysqli_query($conn, "SELECT username, role, fullname, phone FROM user WHERE id = $user_id");
    $data = mysqli_fetch_assoc($result);

    // Sử dụng giá trị lấy được
    $role = $data['role'];
    $fullname = $data['fullname'];
    $phone = $data['phone'];
    $username = $data['username'];
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
            <?php if ($role == 0) { ?>
                <!-- menu sidebar for student -->
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
                                        Data Structures</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/student_courses/Java.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Java</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/student_courses/PHP.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        PHP</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/student_courses/Python.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Python</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/student_courses/Web.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Web</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/student_courses/SourceControl.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Source Control</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/student_courses/MySQL.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        My SQL</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            <?php }
            if ($role == 1) { ?>
                <!-- menu sidebar for teacher -->
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
                                    <a href="./API_Youtube/teacher_courses/PedagogicalBehaviorSkills.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Pedagogical behavior
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/teacher_courses/PresentationSkills.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Presentation skills
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/teacher_courses/NghiepVuSP.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Pedagogic
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./API_Youtube/teacher_courses/TeachingSkills.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        Teaching skills
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="$domain" class="nav-link">
                                <i class="nav-icon fa fa-question-circle"></i>
                                <p>
                                    Question manager
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            <?php } ?>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper p-3">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h1>Update Infomation</h1>
                        </div>
                        <div class="card-body">
                            <form method="post" action="./action_php/update-profile.php">
                                <div class="form-group">
                                    <label for="role">User:</label>
                                    <input type="text" name="role" class="form-control" value="<?php echo ($role == 1 ? "Teacher | $username" : "Student | $username") ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Full Name:</label>
                                    <input type="text" name="fullname" class="form-control" value="<?php echo $fullname ?>">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <?php if ($role == 0) { ?>
                                    <a href="student.php" class="btn btn-danger">Cancel</a>
                                <?php }
                                if ($role == 1) { ?>
                                    <a href="teacher.php" class="btn btn-danger">Cancel</a>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>