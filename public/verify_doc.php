<?php
ob_start();

session_start();

if (empty($_SESSION['docUsername']) || empty($_SESSION['docPass'])) {
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
        $docUsername = $_REQUEST['docUsername'];
        $docStatus = $_REQUEST['docStatus'];
        $docQualify = $_FILES['docQualify'];
        $doc_space = $_REQUEST['doc_space'];
        // $docIDfront = $_FILES['docIDfront'];
        // $docIDback = $_FILES['docIDback'];

        // UPLOAD FILES  , docIDfront='$docIDfront', docIDback='$docIDback'
        // include '../public/upload.php';

        $sql = "UPDATE doctor SET docFname = '$docFname', docMname = '$docMname', docLname = '$docLname', docSuffix = '$docSuffix', docAddress = '$docAddress', docBdate = '$docBdate', docContact = '$docContact', docSpecialty = '$docSpecialty', docUsername = '$docUsername', docStatus='$docStatus', docQualify = '$docQualify', doc_space = '$doc_space' WHERE docID = '$docID'";

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

            $_SESSION['docID'] = $row['docID'];
            $_SESSION['docFname'] = $row['docFname'];
            $_SESSION['docMname'] = $row['docMname'];
            $_SESSION['docLname'] = $row['docLname'];
            $_SESSION['docSuffix'] = $row['docSuffix'];
            $_SESSION['docAddress'] = $row['docAddress'];
            $_SESSION['docBdate'] = $row['docBdate'];
            $_SESSION['docContact'] = $row['docContact'];
            $_SESSION['docSpecialty'] = $row['docSpecialty'];
            $_SESSION['docUsername'] = $row['docUsername'];
            $_SESSION['docStatus'] = $row['docStatus'];
            $_SESSION['docQualify'] = $row['docQualify'];
            $_SESSION['doc_space'] = $row['doc_space'];

            include '../form/edit/verify_doc.php';
            exit();
        }
    } else {
        echo "0 results";
        // echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
