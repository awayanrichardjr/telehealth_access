<?php
session_start();

// doc
if (empty($_SESSION['docEmail']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    include '../doctor/appointment_nav.php';
    include '../table/user_medical_thead.php';

    $sql = "SELECT * FROM medical ORDER BY medID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['medID'] = $row['medID'];
            $_SESSION['medName'] = $row['medName'];

            include '../table/user_medical_tbody.php';
        }
    } else {
        echo "No consultation Records";
    }
    $conn->close();
}
