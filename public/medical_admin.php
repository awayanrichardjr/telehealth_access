<?php
session_start();

// admin
if (empty($_SESSION['adminUsername']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/logout_admin.php");
    exit();
} else {
    include '../admin/index.php';
    include '../admin/main.php';
    include '../table/admin_medical_thead.php';

    $sql = "SELECT * FROM medical ORDER BY medID";
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
            $_SESSION['medContact'] = $row['medContact'];
            $_SESSION['medCdate'] = $row['medCdate'];
            $_SESSION['medADateTime'] = $row['medADateTime'];

            include '../table/admin_medical_tbody.php';
        }
    } else {
        echo "No consultation Records";
    }
    $conn->close();
}
