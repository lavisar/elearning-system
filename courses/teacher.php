<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elearn | Teacher</title>
</head>

<body>
    <!-- PHP kiểm tra đăng nhập và phân quyền -->
    <?php
    session_start();
    require 'config.php';
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
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper p-5">
        <ul class="list-unstyled">
            <a href="<?php echo $domain_courses_PresentationSkills ?>" class="text-dark" target="_blank">
                <li class="border border-info p-3 media">
                    <img class="img-thumbnail mr-2" src="../assets/img/forCourses/presentation.jpg" alt="Generic placeholder image" style="width: 15%;">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Presentation skills</h5>
                        Presentation skills refer to the ability to effectively communicate and deliver information in a clear and engaging manner to an audience.
                    </div>
                </li>
            </a>
            <a href="<?php echo $domain_courses_PedagogicalBehaviorSkills ?>" class="text-dark" target="_blank">
                <li class="border border-info p-3 media my-4">
                    <img class="img-thumbnail mr-2" src="../assets/img/forCourses/Pedagogical_behavior.png" alt="Generic placeholder image" style="width: 15%;">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Pedagogical behavior</h5>
                        Pedagogical behavior refers to the actions and attitudes of teachers towards students that support their learning and development.
                    </div>
                </li>
            </a>
            <a href="<?php echo $domain_courses_Pedagogical ?>" class="text-dark" target="_blank">
                <li class="border border-info p-3 media">
                    <img class="img-thumbnail mr-2" src="../assets/img/forCourses/Pedagogic.jpg" alt="Generic placeholder image" style="width: 15%;">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Pedagogic</h5>
                        Pedagogy refers to the methods, strategies, and principles of teaching and education. It focuses on the process of transferring knowledge, skills, values, and attitudes from educators to learners.
                    </div>
                </li>
            </a>
            <a href="<?php echo $domain_courses_TeachingSkills ?>" class="text-dark" target="_blank">
                <li class="border border-info p-3 media my-4">
                    <img class="img-thumbnail mr-2" src="../assets/img/forCourses/Teaching skills.jpg" alt="Generic placeholder image" style="width: 15%;">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Teaching skills</h5>
                        Teaching skills refer to the abilities and techniques used by educators to facilitate learning and promote student success. These skills can include lesson planning, effective communication, classroom management, and assessment strategies.
                    </div>
                </li>
            </a>
        </ul>
    </div>
    <!-- /.content-wrapper -->
</body>

</html>