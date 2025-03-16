<?php
session_start();
if (empty($_SESSION['adminEmail']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/logout_admin.php");
} else {
    include '../admin/index.php';
    include '../admin/main.php';
    include '../table/admin_doc_thead.php';

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
            $_SESSION['docStatus'] = $row['docStatus'];
            $_SESSION['docBdate'] = $row['docBdate'];
            $_SESSION['docContact'] = $row['docContact'];
            $_SESSION['docEmail'] = $row['docEmail'];
            $_SESSION['docCdate'] = $row['docCdate'];
            $_SESSION['docModified'] = $row['docModified'];

            include '../table/admin_doc_tbody.php';
        }
    } else {
        echo "No Doctor Registered";
    }
    $conn->close();
}
