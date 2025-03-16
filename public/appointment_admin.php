<?php
session_start();

// admin
if (empty($_SESSION['adminEmail']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/logout_admin.php");
    exit();
} else {
    include '../admin/index.php';
    include '../admin/main.php';
    include '../table/admin_appointment_thead.php';

    $sql = "SELECT * FROM consult ORDER BY conID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['conID'] = $row['conID'];
            $_SESSION['conName'] = $row['conName'];
            $_SESSION['conAddress'] = $row['conAddress'];
            $_SESSION['conBdate'] = $row['conBdate'];
            $_SESSION['conContact'] = $row['conContact'];
            $_SESSION['conEmail'] = $row['conEmail'];
            $_SESSION['conSelectedDoc'] = $row['conSelectedDoc'];
            $_SESSION['conDocSpecialty'] = $row['conDocSpecialty'];
            $_SESSION['conDiagnose'] = $row['conDiagnose'];
            $_SESSION['conConcern'] = $row['conConcern'];
            $_SESSION['conCdate'] = $row['conCdate'];
            $_SESSION['conADateTime'] = $row['conADateTime'];

            include '../table/admin_appointment_tbody.php';
        }
    } else {
        echo "No consultation Records";
    }
    $conn->close();
}
