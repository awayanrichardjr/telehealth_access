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
    include '../table/user_appointment_past_thead.php';

    $sql = "SELECT * FROM medical ORDER BY medADateTime DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['medID'] = $row['medID'];
            $_SESSION['medName'] = $row['medName'];
            $_SESSION['medAddress'] = $row['medAddress'];
            $_SESSION['medBdate'] = $row['medBdate'];
            $_SESSION['medContact'] = $row['medContact'];
            $_SESSION['medUsername'] = $row['medUsername'];
            $_SESSION['medSelectedDoc'] = $row['medSelectedDoc'];
            $_SESSION['medDocSpecialty'] = $row['medDocSpecialty'];
            $_SESSION['medDiagnose'] = $row['medDiagnose'];
            $_SESSION['medConcern'] = $row['medConcern'];
            $_SESSION['medCdate'] = $row['medCdate'];
            $_SESSION['medADateTime'] = $row['medADateTime'];
            $_SESSION['medTreatment'] = $row['medTreatment'];

            include '../table/user_appointment_past_tbody_p.php';
        }
    } else {
        echo '<p class="no-data">No Appointment Records</p>';
    }
    $conn->close();
}
