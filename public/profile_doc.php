<?php
session_start();

// doc
if (empty($_SESSION['docUsername']) || empty($_SESSION['docPass'])) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    include '../user/index.php';
    include '../doctor/main.php';
    include '../doctor/profile.php';

    $sql = "SELECT * FROM doctor ORDER BY docID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['docID'] = $row['docID'];
            $_SESSION['doc_space'] = $row['doc_space'];
        }
    } else {
        echo "No consultation Records";
    }
    $conn->close();
}
