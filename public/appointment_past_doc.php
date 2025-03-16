<?php
session_start();

// patient
if (empty($_SESSION['docEmail']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    include '../table/user_appointment_past_thead.php';
}
