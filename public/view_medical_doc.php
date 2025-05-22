<?php
session_start();

// doctor
if (empty($_SESSION['docUsername']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    include '../doctor/appointment_nav.php';
    // include '../doctor/profile.php';

    $selected_medID = $_GET['medID'];

    $sql = "SELECT * FROM medical WHERE medID = $selected_medID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['medID'] = $row['medID'];
            $_SESSION['medName'] = $row['medName'];
            $_SESSION['medAddress'] = $row['medAddress'];
            $_SESSION['medBdate'] = $row['medBdate'];
            $_SESSION['medSelectedDoc'] = $row['medSelectedDoc'];
            $_SESSION['medDocSpecialty'] = $row['medDocSpecialty'];
            $_SESSION['medDiagnose'] = $row['medDiagnose'];
            $_SESSION['medConcern'] = $row['medConcern'];
            $_SESSION['medUsername'] = $row['medUsername'];
            $_SESSION['medEmail'] = $row['medEmail'];
            $_SESSION['medContact'] = $row['medContact'];
            $_SESSION['medCdate'] = $row['medCdate'];
            $_SESSION['medADateTime'] = $row['medADateTime'];
            $_SESSION['medTreatment'] = $row['medTreatment'];

            include '../form/view_form/view_medical_doc.php';
            exit();
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
