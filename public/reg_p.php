<?php
Ob_start();
include '../user/index.php';
include '../user/nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pFname = ucwords($_POST['pFname']);
    $pMname = ucwords($_POST['pMname']);
    $pLname = ucwords($_POST['pLname']);
    $pSuffix = ucwords($_POST['pSuffix']);
    $pAddress = ucwords($_POST['pAddress']);
    $pBdate = $_POST['pBdate'];
    $pContact = $_POST['pContact'];
    $pUsername = validate($_POST['pUsername']);
    $pPass = validate($_POST['pPass']);
    $pConfirm = validate($_POST['pConfirm']);

    error_reg_p($pFname, $pMname, $pLname, $pAddress, $pBdate, $pContact, $pUsername, $pPass, $pConfirm);

    // if password not match ...&&
    if (($pPass) != ($pConfirm)) {
        header("location: ../public/reg_p.php?pPassNotMatch=Passwords not match!");
        exit();
    } else {

        $sql = "INSERT INTO patient (pFname, pMname, pLname, pSuffix, pAddress, pBdate, pContact, pUsername, pPass, pConfirm) VALUES ('$pFname','$pMname','$pLname','$pSuffix','$pAddress','$pBdate','$pContact','$pUsername','$pPass','$pConfirm')";

        if ($conn->query($sql) === TRUE) {
            header("location: log_p.php");
            exit();
        } else {
            header("location: ../public/reg_p.php?pUsernameTakenErr=E-mail has been taken");
            exit();
        }

        // $conn->close();
    }
}
// register form 
include '../form/register/reg_p.php';

include '../user/footer.php';
Ob_end_flush();