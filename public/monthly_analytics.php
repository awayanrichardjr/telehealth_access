<?php
session_start();

// admin
if (empty($_SESSION['adminUsername']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/logout_admin.php");
    exit();
} else {
    include '../admin/index.php';
    include '../admin/main.php';
    include '../admin/monthly_analytics.php';
}
