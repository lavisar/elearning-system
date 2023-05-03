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
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Courses
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/examples/invoice.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/profile.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/e-commerce.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/projects.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/project-add.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/project-edit.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/project-detail.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/contacts.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/faq.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>FAQ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/contact-us.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact us</p>
                                </a>
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
                                This is example of Language
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
                                This is example of Programing
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
                                This is example of Subject
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