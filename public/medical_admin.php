<?php
session_start();

// admin
if (empty($_SESSION['adminEmail']) || empty($_SESSION['adminPass'])) {
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

            include '../table/admin_medical_tbody.php';
        }
    } else {
        echo "No consultation Records";
    }
    $conn->close();
}
