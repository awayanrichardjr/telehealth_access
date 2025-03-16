<?php
session_start();
if (empty($_SESSION['docEmail']) || empty($_SESSION['docPass'])) {
    header("location: ../public/log_doc.php");
} else {
    include '../user/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $docID = $_REQUEST['docID'];
        $docFname = ucwords($_REQUEST['docFname']);
        $docMname = ucwords($_REQUEST['docMname']);
        $docLname = ucwords($_REQUEST['docLname']);
        $docSuffix = ucwords($_REQUEST['docSuffix']);
        $docAddress = ucwords($_REQUEST['docAddress']);
        $docBdate = $_REQUEST['docBdate'];
        $docContact = $_REQUEST['docContact'];
        $docSpecialty = $_REQUEST['docSpecialty'];
        $docEmail = $_REQUEST['docEmail'];
        $docStatus = $_REQUEST['docStatus'];
        $docQualify = $_FILES['docQualify'];
        $docIDfront = $_FILES['docIDfront'];
        $docIDback = $_FILES['docIDback'];

        // UPLOAD FILES 
        include '../public/upload.php';

        $sql = "UPDATE doctor SET docFname = '$docFname', docMname = '$docMname', docLname = '$docLname', docSuffix = '$docSuffix', docAddress = '$docAddress', docBdate = '$docBdate', docContact = '$docContact', docSpecialty = '$docSpecialty', docEmail = '$docEmail', docStatus='$docStatus', docQualify = '$docQualify', docIDfront='$docIDfront', docIDback='$docIDback' WHERE docID = '$docID'";

        if ($conn->query($sql) === TRUE) {
            header("location: ../public/profile_doc.php");
            exit();
        } else {
            // echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }

    include '../doctor/main.php';
    $selected_docID = $_GET['docID'];
    $sql = "SELECT * FROM doctor WHERE docID = $selected_docID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            include '../form/edit/verify_doc.php';
            exit();
        }
    } else {
        echo "0 results";
        // echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
