<?php
session_start();

// doc
if (empty($_SESSION['docUsername']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    include '../doctor/profile.php';
}
