<?php
Ob_start();
include '../admin/index.php';
include '../admin/nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $adminFname = ucwords($_POST['adminFname']);
    $adminMname = ucwords($_POST['adminMname']);
    $adminLname = ucwords($_POST['adminLname']);
    $adminSuffix = ucwords($_POST['adminSuffix']);
    $adminAddress = ucwords($_POST['adminAddress']);
    $adminBdate = $_POST['adminBdate'];
    $adminContact = $_POST['adminContact'];
    $adminUsername = validate($_POST['adminUsername']);
    $adminPass = validate($_POST['adminPass']);
    $adminConfirm = validate($_POST['adminConfirm']);

    error_reg_admin($adminFname, $adminMname, $adminLname, $adminAddress, $adminBdate, $adminContact, $adminUsername, $adminPass, $adminConfirm);

    // if password not match ...&&
    if (($adminPass) != ($adminConfirm)) {
        header("location: ../public/reg_admin.php?adminPassNotMatch=Passwords not match!");
        exit();
    } else {

        $sql = "INSERT INTO admin (adminFname, adminMname, adminLname, adminSuffix, adminAddress, adminBdate, adminContact, adminUsername, adminPass, adminConfirm) VALUES ('$adminFname','$adminMname','$adminLname','$adminSuffix','$adminAddress','$adminBdate','$adminContact','$adminUsername','$adminPass','$adminConfirm')";

        if ($conn->query($sql) === TRUE) {
            header("location: log_admin.php");
            exit();
        } else {
            header("location: ../public/reg_admin.php?adminUsernameTakenErr=E-mail has been taken");
            exit();
            // echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // $conn->close();
    }
}
// register form 
include '../form/register/reg_admin.php';
Ob_end_flush();
