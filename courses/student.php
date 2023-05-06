<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elearn | Student</title>
</head>

<body>
    <!-- PHP kiểm tra đăng nhập và phân quyền -->
    <?php
    session_start();
    require 'config.php';
    if ($_SESSION['role'] == 1) {
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
                                <a href="<?php echo $domain_courses_DataStructure ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Data Structures</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_Java ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Java</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_PHP ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    PHP</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_Python ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Python</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_Web ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Web</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_Git ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    Source Control</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $domain_courses_MySQL ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    My SQL</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper p-5">
        <div id="accordion">
            <div class="card ">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link media " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <img class="mr-3 img-thumbnail" src="../assets/img/forCourses/languge-pic.jpg" alt="Language" style="width: 20%">
                            <div class="media-body text-left text-dark">
                                <h5 class="mt-0 mb-1">Language</h5>
                                In our language course, you'll immerse yourself in a new culture and learn to communicate effectively in a foreign language. With interactive lessons and personalized instruction, you'll gain confidence and fluency in speaking, listening, reading, and writing.
                            </div>
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="list-group">
                            <a href="./API_Youtube/student_courses/English.php" class="list-group-item list-group-item-action">English</a>
                            <a href="./API_Youtube/student_courses/Chinese.php" class="list-group-item list-group-item-action">Chinese</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link media collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <img class="mr-3 img-thumbnail" src="../assets/img/forCourses/programing.png" alt="Programing" style="width: 20%">
                            <div class="media-body text-left text-dark">
                                <h5 class="mt-0 mb-1">Programing</h5>
                                Our programming course is designed to teach you the skills you need to succeed in the tech industry. From the basics of coding to advanced programming concepts, you'll learn to create websites, software, and apps that meet modern standards. Our experienced instructors will guide you through hands-on projects, so you can develop practical skills and build a portfolio of work to showcase your abilities.
                            </div>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="list-group">
                            <a href="./API_Youtube/student_courses/Cpp.php" class="list-group-item list-group-item-action">C++</a>
                            <a href="./API_Youtube/student_courses/DataStructures.php" class="list-group-item list-group-item-action">Data Structures</a>
                            <a href="./API_Youtube/student_courses/Java.php" class="list-group-item list-group-item-action">Java</a>
                            <a href="./API_Youtube/student_courses/PHP.php" class="list-group-item list-group-item-action">PHP</a>
                            <a href="./API_Youtube/student_courses/Python.php" class="list-group-item list-group-item-action">Python</a>
                            <a href="./API_Youtube/student_courses/Web.php" class="list-group-item list-group-item-action">Web</a>
                            <a href="./API_Youtube/student_courses/SourceControl.php" class="list-group-item list-group-item-action">Source Control</a>
                            <a href="./API_Youtube/student_courses/MySQL.php" class="list-group-item list-group-item-action">My SQL</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link media collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <img class="mr-3 img-thumbnail" src="../assets/img/forCourses/subject.jpg" alt="Subject" style="width: 20%">
                            <div class="media-body text-left text-dark">
                                <h5 class="mt-0 mb-1">Subject</h5>
                                Our subject course offers in-depth instruction on a particular topic, allowing you to explore and deepen your understanding of the subject. With a combination of lectures, discussions, and hands-on projects, you'll gain a comprehensive understanding of the subject matter and develop critical thinking skills. Our experienced instructors provide personalized guidance and support, ensuring that you get the most out of your learning experience.
                            </div>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="list-group">
                            <a href="./API_Youtube/student_courses/Math.php" class="list-group-item list-group-item-action">Math</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</body>

</html>