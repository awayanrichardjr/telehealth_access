<?php
Ob_start();
session_start();

// patient
if (empty($_SESSION['pUsername']) && empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $conName = ucwords($_POST['conName']);
        $conAddress = ucwords($_POST['conAddress']);
        $conBdate = $_POST['conBdate'];
        $conAge = (int)$_POST['conAge'];
        $conContact = $_POST['conContact'];
        $conUsername = validate($_POST['conUsername']);
        $conEmail = validate($_POST['conEmail']);
        $conSelectedDoc = $_POST['conSelectedDoc'];
        $conDocSpecialty = $_POST['conDocSpecialty'];
        $conDiagnose = $_POST['conDiagnose'];
        $conConcern = $_POST['conConcern'];
        $conCdate = $_POST['conCdate'];
        $conDate = $_POST['conDate'];
        $conTime = $_POST['conTime'];


        error_consult_doc($conName, $conAddress, $conBdate, $conContact, $conEmail, $conUsername, $conSelectedDoc, $conDocSpecialty, $conDate, $conTime, $conDiagnose, $conAge);

        $sql = "INSERT INTO consult (conName, conAddress, conBdate, conAge, conContact, conUsername, conEmail, conSelectedDoc, conDocSpecialty, conDiagnose, conConcern, conCdate, conDate, conTime) VALUES ('$conName','$conAddress','$conBdate','$conAge','$conContact','$conUsername','$conEmail','$conSelectedDoc','$conDocSpecialty','$conDiagnose','$conConcern','$conCdate','$conDate','$conTime')";

        if ($conn->query($sql) === TRUE) {
            header("location: pay_selected_doc.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("location: consult_selected_doc.php?error");
            // exit();
        }
        $conn->close();
    }
    include '../patient/main.php';
    include '../form/consult_selected_doc.php';
}
Ob_end_flush();
