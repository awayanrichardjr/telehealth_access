<?php
session_start();
if (empty($_SESSION['adminEmail']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/logout_admin.php");
} else {
    include '../admin/index.php';
    include '../admin/main.php';
    include '../table/admin_p_thead.php';

    $sql = "SELECT * FROM patient ORDER BY pID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['pID'] = $row['pID'];
            $_SESSION['pFname'] = $row['pFname'];
            $_SESSION['pMname'] = $row['pMname'];
            $_SESSION['pLname'] = $row['pLname'];
            $_SESSION['pSuffix'] = $row['pSuffix'];
            $_SESSION['pAddress'] = $row['pAddress'];
            $_SESSION['pBdate'] = $row['pBdate'];
            $_SESSION['pContact'] = $row['pContact'];
            $_SESSION['pEmail'] = $row['pEmail'];
            $_SESSION['pCdate'] = $row['pCdate'];
            $_SESSION['pModified'] = $row['pModified'];

            include '../table/admin_p_tbody.php';
        }
    } else {
        echo "No Patient Registered";
    }
    $conn->close();
}
