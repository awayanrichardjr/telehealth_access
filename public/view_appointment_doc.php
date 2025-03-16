<?php
session_start();

// doctor
if (empty($_SESSION['docEmail']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    // include '../doctor/profile.php';

    $selected_conID = $_GET['conID'];

    $sql = "SELECT * FROM consult WHERE conID = $selected_conID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['conID'] = $row['conID'];
            $_SESSION['conName'] = $row['conName'];
            $_SESSION['conAddress'] = $row['conAddress'];
            $_SESSION['conBdate'] = $row['conBdate'];
            $_SESSION['conSelectedDoc'] = $row['conSelectedDoc'];
            $_SESSION['conDocSpecialty'] = $row['conDocSpecialty'];
            $_SESSION['conDiagnose'] = $row['conDiagnose'];
            $_SESSION['conConcern'] = $row['conConcern'];
            $_SESSION['conEmail'] = $row['conEmail'];
            $_SESSION['conContact'] = $row['conContact'];
            $_SESSION['conCdate'] = $row['conCdate'];
            $_SESSION['conADateTime'] = $row['conADateTime'];

            include '../form/view_form/view_appointment_doc.php';
            exit();
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
