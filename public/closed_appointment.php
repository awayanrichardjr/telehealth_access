<?php
Ob_start();
include '../user/index.php';
include '../user/nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // post here... 

    $sql = "INSERT INTO medical () VALUES ()";

    if ($conn->query($sql) === TRUE) {
        header("location: log_doc.php");
        exit();
    } else {
        // header here... 
        exit();
    }
    // $conn->close();
}

// close action form 
include '../form/closed_action_form.php.php';
Ob_end_flush();