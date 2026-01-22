<?php
// Danh sách page hợp lệ (chống lỗi + bảo mật)
$allowed_pages = ['home', 'project', 'contact'];

// Lấy page từ URL, mặc định là home
$page = $_GET['page'] ?? 'home';

// Nếu page không hợp lệ → chuyển về home
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

include 'layout/header.php';
include "pages/$page.php";
include 'layout/footer.php';
