<?php
Ob_start();
session_start();

// patient
if (empty($_SESSION['docEmail']) && empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("location: ../public/appointment_doc.php");
    }
    include '../doctor/main.php';
    include '../doctor/appointment_nav.php';
    include '../form/confirm_close_action_form.php';
}
Ob_end_flush();
