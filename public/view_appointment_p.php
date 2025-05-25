<?php
session_start();

// patient
if (empty($_SESSION['pUsername']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';
    include '../patient/appointment_nav.php';
    // include '../patient/profile.php';

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
            $_SESSION['conAge'] = $row['conAge'];
            $_SESSION['conSelectedDoc'] = $row['conSelectedDoc'];
            $_SESSION['conDocSpecialty'] = $row['conDocSpecialty'];
            $_SESSION['conDiagnose'] = $row['conDiagnose'];
            $_SESSION['conConcern'] = $row['conConcern'];
            $_SESSION['conUsername'] = $row['conUsername'];
            $_SESSION['conEmail'] = $row['conEmail'];
            $_SESSION['conContact'] = $row['conContact'];
            $_SESSION['conCdate'] = $row['conCdate'];
            $_SESSION['conDate'] = $row['conDate'];
            $_SESSION['conTime'] = $row['conTime'];

            include '../form/view_form/view_appointment_p.php';
            exit();
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
