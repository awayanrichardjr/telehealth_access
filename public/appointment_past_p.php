<?php
session_start();

// patient
if (empty($_SESSION['pEmail']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';
    include '../patient/appointment_nav.php';
    include '../table/user_appointment_past_thead.php';
}
