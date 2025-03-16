<?php
session_start();
if (empty($_SESSION['pEmail']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
} else {
    include '../user/index.php';
    include '../patient/main.php';
    // include '../patient/profile.php';
    include '../patient/messages.php';
}
