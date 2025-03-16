<?php
session_start();

// doc
if (empty($_SESSION['pEmail']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';
    // include '../patient/specialties.php';

    $selected_docID = $_GET['docID'];

    $sql = "SELECT * FROM doctor WHERE docID = $selected_docID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['docID'] = $row['docID'];
            $_SESSION['docFname'] = $row['docFname'];
            $_SESSION['docMname'] = $row['docMname'];
            $_SESSION['docLname'] = $row['docLname'];
            $_SESSION['docSuffix'] = $row['docSuffix'];
            $_SESSION['docSpecialty'] = $row['docSpecialty'];
            $_SESSION['docAddress'] = $row['docAddress'];
            $_SESSION['docBdate'] = $row['docBdate'];
            $_SESSION['docContact'] = $row['docContact'];
            $_SESSION['docEmail'] = $row['docEmail'];

            include '../patient/selected_profile.php';
            include '../patient/availability.php';
            exit();
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
