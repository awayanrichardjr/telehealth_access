<?php
session_start();

// patient
if (empty($_SESSION['pUsername']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';
    include '../patient/specialties.php';
    include '../table/user_sp_thead.php';

    $sql = "SELECT * FROM doctor ORDER BY docID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['docID'] = $row['docID'];
            $_SESSION['docFname'] = $row['docFname'];
            $_SESSION['docMname'] = $row['docMname'];
            $_SESSION['docLname'] = $row['docLname'];
            $_SESSION['docSuffix'] = $row['docSuffix'];
            $_SESSION['docAddress'] = $row['docAddress'];
            $_SESSION['docSpecialty'] = $row['docSpecialty'];
            $_SESSION['docBdate'] = $row['docBdate'];
            $_SESSION['docContact'] = $row['docContact'];
            $_SESSION['docUsername'] = $row['docUsername'];
            $_SESSION['docCdate'] = $row['docCdate'];
            $_SESSION['docModified'] = $row['docModified'];

            include '../table/user_sp_tbody.php';
        }
    } else {
        echo "No Doctor Registered";
    }
    $conn->close();
}
