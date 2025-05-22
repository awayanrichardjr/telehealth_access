<?php
Ob_start();
session_start();
include '../admin/index.php';
include '../admin/nav.php';

$adminUsernameErr = $adminPassErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $adminUsername = validate($_POST['adminUsername']);
    $adminPass = validate($_POST['adminPass']);

    if (empty($adminUsername)) {
        $adminUsernameErr = "is required";
    } elseif (empty($adminPass)) {
        $adminPassErr = "is required";
    } else {
        $sql = "SELECT * FROM admin WHERE adminUsername='$adminUsername' AND adminPass='$adminPass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row ...&&
            while ($row = $result->fetch_assoc()) {

                $_SESSION['adminID'] = $row['adminID'];
                $_SESSION['adminFname'] = $row['adminFname'];
                $_SESSION['adminMname'] = $row['adminMname'];
                $_SESSION['adminLname'] = $row['adminLname'];
                $_SESSION['adminSuffix'] = $row['adminSuffix'];
                $_SESSION['adminAddress'] = $row['adminAddress'];
                $_SESSION['adminBdate'] = $row['adminBdate'];
                $_SESSION['adminContact'] = $row['adminContact'];
                $_SESSION['adminUsername'] = $row['adminUsername'];
                $_SESSION['adminPass'] = $row['adminPass'];
                $_SESSION['adminConfirm'] = $row['adminConfirm'];

                header("location: ../public/dashboard.php");
                exit();
            }
        } else {
            header("location: ../public/log_admin.php?error=Incorrect Password or E-mail");
            exit();
        }
    }
}
include '../form/login/log_admin.php';
// include '../footer.php';

Ob_end_flush();
