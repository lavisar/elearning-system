<?php
// xóa tất cả các biến session và hủy session
session_unset();
session_destroy();
// chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
header("Location: /Elearn_web");
exit();
