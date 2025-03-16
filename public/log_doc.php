<?php
Ob_start();
session_start();
include '../user/index.php';
include '../user/nav.php';

$docEmailErr = $docPassErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $docEmail = validate($_POST['docEmail']);
    $docPass = validate($_POST['docPass']);

    if (empty($docEmail)) {
        $docEmailErr = "is required";
    } else if (empty($docPass)) {
        $docPassErr = "is required";
    } else {
        $sql = "SELECT * FROM doctor WHERE docEmail='$docEmail' AND docPass='$docPass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row ...&&
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
                $_SESSION['docStatus'] = $row['docStatus'];
                $_SESSION['docEmail'] = $row['docEmail'];
                $_SESSION['docPass'] = $row['docPass'];
                $_SESSION['docConfirm'] = $row['docConfirm'];

                header("location: ../public/main_doc.php");
                exit();
            }
        } else {
            header("location: ../public/log_doc.php?error=Incorrect Password or E-mail");
            exit();
        }
    }
}
include '../form/login/log_doc.php';
include '../user/footer.php';
// include '../public/log_doc.php';


Ob_end_flush();