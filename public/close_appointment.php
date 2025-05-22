<?php
Ob_start();
session_start();

// patient
if (empty($_SESSION['docUsername']) && empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $medName = ucwords($_POST['medName']);
        $medAddress = ucwords($_POST['medAddress']);
        $medBdate = $_POST['medBdate'];
        $medContact = $_POST['medContact'];
        $medUsername = validate($_POST['medUsername']);
        $medEmail = validate($_POST['medEmail']);
        $medSelectedDoc = $_POST['medSelectedDoc'];
        $medDocSpecialty = $_POST['medDocSpecialty'];
        $medDiagnose = $_POST['medDiagnose'];
        $medConcern = $_POST['medConcern'];
        $medCdate = $_POST['medCdate'];
        $medADateTime = $_POST['medADateTime'];

        error_medical_doc($medName, $medAddress, $medBdate, $medContact, $medUsername, $medEmail, $medSelectedDoc, $medDocSpecialty, $medADateTime, $medDiagnose, $medConcern);

        $sql = "INSERT INTO medical (medName, medAddress, medBdate, medContact, medUsername, medEmail, medSelectedDoc, medDocSpecialty, medDiagnose, medConcern, medCdate, medADateTime) VALUES ('$medName','$medAddress','$medBdate','$medContact','$medUsername','$medEmail','$medSelectedDoc','$medDocSpecialty','$medDiagnose','$medConcern','$medCdate','$medADateTime')";

        if ($conn->query($sql) === TRUE) {
            header("location: appointment_profile_doc.php");
            exit();
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            header("location: appointment_profile_doc.php?error");
            // exit();
        }
        $conn->close();
    }
    include '../doctor/main.php';
    include '../doctor/appointment_nav.php';
    include '../form/close_action_form.php';
}
Ob_end_flush();
