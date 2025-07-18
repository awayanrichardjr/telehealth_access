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
    include '../table/user_appointment_p_thead.php';

    $conName = $_SESSION['pFname'] . " " . $_SESSION['pMname'] . " " . $_SESSION['pLname'] . " " . $_SESSION['pSuffix'];
    $sql = "SELECT * FROM consult WHERE conName='$conName'";
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

            include '../table/user_appointment_p_tbody.php';
        }
    } else {
        echo '<p class="no-data">No Appointment Records</p>';
    }
    $conn->close();
}
