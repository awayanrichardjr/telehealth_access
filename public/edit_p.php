<?php
Ob_start();
session_start();
if (empty($_SESSION['adminEmail']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/log_admin.php");
} else {
    include '../admin/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $pID = $_REQUEST['pID'];
        $pFname = $_REQUEST['pFname'];
        $pMname = $_REQUEST['pMname'];
        $pLname = $_REQUEST['pLname'];
        $pSuffix = $_REQUEST['pSuffix'];
        $pAddress = $_REQUEST['pAddress'];
        $pBdate = $_REQUEST['pBdate'];
        $pContact = $_REQUEST['pContact'];
        $pEmail = $_REQUEST['pEmail'];
        $pModified = $_REQUEST['pModified'];

        // error_edit_p($pFname, $pMname, $pLname, $pAddress, $pBdate, $pContact, $pEmail, $pPass, $pConfirm);

        $pFnamev = toupper1stchar($pFname);
        $pMnamev = toupper1stchar($pMname);
        $pLnamev = toupper1stchar($pLname);
        $pSuffixv = toupper1stchar($pSuffix);
        $pAddressv = toupper1stchar($pAddress);

        $sql = "UPDATE patient SET pFname='$pFnamev',pMname='$pMnamev',pLname='$pLnamev',pSuffix='$pSuffixv',pAddress='$pAddressv',pBdate='$pBdate',pContact='$pContact',pEmail='$pEmail', pModified='$pModified' WHERE pID='$pID'";

        if ($conn->query($sql) === TRUE) {
            header("location: ../public/records_p.php");
            exit();
        } else {
            // echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
    include '../admin/main.php';
    $selected_pID = $_GET['pID'];
    $sql = "SELECT * FROM patient WHERE pID = $selected_pID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            include '../form/edit/edit_p.php';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
Ob_end_flush();