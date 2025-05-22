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
        $conContact = $_POST['conContact'];
        $conUsername = validate($_POST['conUsername']);
        $conSelectedDoc = $_POST['conSelectedDoc'];
        $conDocSpecialty = $_POST['conDocSpecialty'];
        $conDiagnose = $_POST['conDiagnose'];
        $conConcern = $_POST['conConcern'];
        $conCdate = $_POST['conCdate'];
        $conADateTime = $_POST['conADateTime'];

        error_consult_doc($conName, $conAddress, $conBdate, $conContact, $conUsername, $conSelectedDoc, $conDocSpecialty, $conADateTime, $conDiagnose);

        $sql = "INSERT INTO consult (conName, conAddress, conBdate, conContact, conUsername, conSelectedDoc, conDocSpecialty, conDiagnose, conConcern, conCdate, conADateTime) VALUES ('$conName','$conAddress','$conBdate','$conContact','$conUsername','$conSelectedDoc','$conDocSpecialty','$conDiagnose','$conConcern','$conCdate','$conADateTime')";

        if ($conn->query($sql) === TRUE) {
            header("location: pay_selected_doc.php");
            exit();
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            header("location: consult_selected_doc.php?error");
            // exit();
        }
        $conn->close();
    }
    include '../patient/main.php';
    // include '../patient/specialties.php';
    include '../form/consult_selected_doc.php';
}
Ob_end_flush();
