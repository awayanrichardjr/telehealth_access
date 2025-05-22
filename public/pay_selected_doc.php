<?php
session_start();

// p
if (empty($_SESSION['pUsername']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';
    // include '../patient/specialties.php';
    include '../form/pay_selected_doc.php';
}
