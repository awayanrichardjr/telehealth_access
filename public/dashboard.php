<?php
session_start();

// admin
if (empty($_SESSION['adminEmail']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/logout_admin.php");
    exit();
} else {
    include '../admin/index.php';
    include '../admin/main.php';

    echo "<div class='admin-main-div'>";
    include '../admin/dashboard.php';
    echo "</div>";
}