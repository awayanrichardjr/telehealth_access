<?php
ob_start();
// session_start();

// doc
if (empty($_SESSION['docUsername']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    // include '../user/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $appointment_name = $_POST['appointment_name'];
        $appointment_username = $_POST['appointment_username'];
        $appointment_month = $_POST['appointment_month'];
        $appointment_day = $_POST['appointment_day'];
        $appointment_year = $_POST['appointment_year'];
        $appointment_time = $_POST['appointment_time'];
        $appointment_price = $_POST['appointment_price'];
        $appointment_date = $_POST['appointment_date'];

        $sql = "INSERT INTO appointment (appointment_name, appointment_username, appointment_month, appointment_day, appointment_year, appointment_time, appointment_price, appointment_date) VALUES ('$appointment_name','$appointment_username','$appointment_month','$appointment_day','$appointment_year','$appointment_time','$appointment_price','$appointment_date')";
        if ($conn->query($sql) === TRUE) {
            header("location: available_doc.php");
            exit();
        } else {
            header("location: profile_doc.php?error");
            exit();
        }
        $conn->close();
    }
    // form 
    include '../form/availability_doc.php';
}
// Ob_end_flush();