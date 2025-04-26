<?php
Ob_start();
session_start();

include '../user/index.php';
include '../doctor/main.php';
include '../doctor/appointment_nav.php';

// patient
if (empty($_SESSION['docEmail']) && empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // post here... 

        $sql = "INSERT INTO medical () VALUES ()";

        if ($conn->query($sql) === TRUE) {
            // header here... 
            header("location: ../public/appointment_doc.php");
            exit();
        } else {
            // header here... 
            header("location: ../public/appointment_doc.php");
            exit();
        }
        // $conn->close();
    }

    // close action form 
    include '../form/close_action_form.php';

}
Ob_end_flush();