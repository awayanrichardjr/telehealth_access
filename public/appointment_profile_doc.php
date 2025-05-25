<?php
session_start();

// patient
if (empty($_SESSION['docUsername']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    include '../doctor/appointment_nav.php';
    include '../table/user_appointment_doc_thead.php';

    $conSelectedDoc = "Dr. " . $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'];

    $sql = "SELECT * FROM consult WHERE conSelectedDoc='$conSelectedDoc' ORDER BY conDate DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['conID'] = $row['conID'];
            $_SESSION['conName'] = $row['conName'];
            $_SESSION['conAddress'] = $row['conAddress'];
            $_SESSION['conBdate'] = $row['conBdate'];
            $_SESSION['conContact'] = $row['conContact'];
            $_SESSION['conUsername'] = $row['conUsername'];
            $_SESSION['conSelectedDoc'] = $row['conSelectedDoc'];
            $_SESSION['conDocSpecialty'] = $row['conDocSpecialty'];
            $_SESSION['conDiagnose'] = $row['conDiagnose'];
            $_SESSION['conConcern'] = $row['conConcern'];
            $_SESSION['conCdate'] = $row['conCdate'];
            $_SESSION['conDate'] = $row['conDate'];
            $_SESSION['conTime'] = $row['conTime'];

            include '../table/user_appointment_doc_tbody.php';
        }
    } else {
        echo '<p class="no-data">No Appointment Records</p>';
    }
    $conn->close();
}
