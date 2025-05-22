<?php
Ob_start();
include '../user/index.php';
include '../user/nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $docFname = ucwords($_POST['docFname']);
    $docMname = ucwords($_POST['docMname']);
    $docLname = ucwords($_POST['docLname']);
    $docSuffix = ucwords($_POST['docSuffix']);
    $docAddress = ucwords($_POST['docAddress']);
    $docBdate = $_POST['docBdate'];
    $docContact = $_POST['docContact'];
    $docSpecialty = $_POST['docSpecialty'];
    $docStatus = $_POST['docStatus'];
    $docUsername = validate($_POST['docUsername']);
    $docPass = validate($_POST['docPass']);
    $docConfirm = validate($_POST['docConfirm']);

    error_reg_doc($docFname, $docMname, $docLname, $docAddress, $docBdate, $docContact, $docUsername, $docPass, $docConfirm);

    // if password not match ...&&
    if (($docPass) != ($docConfirm)) {
        header("location: ../public/doc_reg.php?docPassNotMatch=Passwords not match!");
        exit();
    } else {

        $sql = "INSERT INTO doctor (docFname, docMname, docLname, docSuffix, docAddress, docBdate, docContact, docSpecialty, docStatus, docUsername, docPass, docConfirm) VALUES ('$docFname','$docMname','$docLname','$docSuffix','$docAddress','$docBdate','$docContact','$docSpecialty','$docStatus','$docUsername','$docPass','$docConfirm')";

        if ($conn->query($sql) === TRUE) {
            header("location: log_doc.php");
            exit();
        } else {
            header("location: ../public/reg_doc.php?docUsernameTakenErr=Username has been taken");
            exit();
        }

        // $conn->close();
    }
}
// register form 
include '../form/register/reg_doc.php';

include '../user/footer.php';
Ob_end_flush();