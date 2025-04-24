<?php
Ob_start();
session_start();
if (empty($_SESSION['adminEmail']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/log_admin.php");
} else {
    include '../admin/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $docID = $_REQUEST['docID'];
        $docFname = $_REQUEST['docFname'];
        $docMname = $_REQUEST['docMname'];
        $docLname = $_REQUEST['docLname'];
        $docSuffix = $_REQUEST['docSuffix'];
        $docAddress = $_REQUEST['docAddress'];
        $docBdate = $_REQUEST['docBdate'];
        $docContact = $_REQUEST['docContact'];
        $docSpecialty = $_REQUEST['docSpecialty'];
        $docEmail = $_REQUEST['docEmail'];
        $docModified = $_REQUEST['docModified'];

        if (isset($_POST['docVerify'])) {
            $docStatus = "Verified";
        } elseif (isset($_POST['docDecline'])) {
            $docStatus = $_REQUEST['docStatus'];
        } elseif (isset($_POST['docSave'])) {
            $docStatus = $_REQUEST['docDStatus'];
        }

        $docFnamev = toupper1stchar($docFname);
        $docMnamev = toupper1stchar($docMname);
        $docLnamev = toupper1stchar($docLname);
        $docSuffixv = toupper1stchar($docSuffix);
        $docAddressv = toupper1stchar($docAddress);

        $sql = "UPDATE doctor SET docFname = '$docFnamev', docMname = '$docMnamev', docLname = '$docLnamev', docSuffix = '$docSuffixv', docAddress = '$docAddressv', docBdate = '$docBdate', docContact = '$docContact', docSpecialty = '$docSpecialty', docEmail = '$docEmail', docModified = '$docModified', docStatus = '$docStatus' WHERE docID = '$docID'";

        if ($conn->query($sql) === TRUE) {
            header("location: ../public/records_doc.php");
            exit();
        } else {
            // echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
    include '../admin/main.php';
    $selected_docID = $_GET['docID'];
    $sql = "SELECT * FROM doctor WHERE docID = $selected_docID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while ($row = $result->fetch_assoc()) {

            // form
            include '../form/edit/edit_doc.php';
            exit();
        }
    } else {
        echo "0 results";
        // echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
Ob_end_flush();