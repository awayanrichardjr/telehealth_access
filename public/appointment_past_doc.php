<?php
session_start();

// patient
if (empty($_SESSION['docEmail']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    include '../doctor/appointment_nav.php';
    include '../table/user_appointment_past_thead.php';

    $sql = "SELECT * FROM medical ORDER BY medCdate";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['medID'] = $row['medID'];
            $_SESSION['medName'] = $row['medName'];
            $_SESSION['medAddress'] = $row['medAddress'];
            $_SESSION['medBdate'] = $row['medBdate'];
            $_SESSION['medContact'] = $row['medContact'];
            $_SESSION['medEmail'] = $row['medEmail'];
            $_SESSION['medSelectedDoc'] = $row['medSelectedDoc'];
            $_SESSION['medDocSpecialty'] = $row['medDocSpecialty'];
            $_SESSION['medDiagnose'] = $row['medDiagnose'];
            $_SESSION['medConcern'] = $row['medConcern'];
            $_SESSION['medCdate'] = $row['medCdate'];
            $_SESSION['medADateTime'] = $row['medADateTime'];

            include '../table/user_appointment_past_tbody.php';
        }
    } else {
        echo '<p class="no-data">No Appointment Records</p>';
    }
    $conn->close();
}
