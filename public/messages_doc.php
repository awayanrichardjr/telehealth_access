<?php
session_start();
if (empty($_SESSION['docEmail']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    // include '../doctor/profile.php';
    include '../doctor/messages.php';
}
