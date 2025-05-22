<?php
Ob_start();
session_start();
if (empty($_SESSION['adminUsername']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/log_admin.php");
} else {
    include '../admin/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $conID = $_REQUEST['conID'];
        $conName = $_REQUEST['conName'];
        $conAddress = $_REQUEST['conAddress'];
        $conBdate = $_REQUEST['conBdate'];
        $conUsername = $_REQUEST['conUsername'];
        $conSelectedDoc = $_REQUEST['conSelectedDoc'];
        $conDiagnose = $_REQUEST['conDiagnose'];
        $conConcern = $_REQUEST['conConcern'];
        $conCdate = $_REQUEST['conCdate'];
        $conADateTime = $_REQUEST['conADateTime'];

        $conNamev = toupper1stchar($conName);
        $conAddressv = toupper1stchar($conAddress);
        $conSelectedDocv = toupper1stchar($conSelectedDoc);
        $conConcernv = toupper1stchar($conConcern);

        $sql = "UPDATE consult SET conName='$conNamev', conAddress='$conAddressv', conBdate='$conBdate', conUsername='$conUsername', conSelectedDoc='$conSelectedDocv', conDiagnose='$conDiagnose',conConcern='$conConcernv', conCdate='$conCdate', conADateTime='$conADateTime' WHERE conID='$conID'";

        if ($conn->query($sql) === TRUE) {
            header("location: ../public/appointment_admin.php");
            exit();
        } else {
            // echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
    include '../admin/main.php';
    $selected_conID = $_GET['conID'];
    $sql = "SELECT * FROM consult WHERE conID = $selected_conID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            include '../form/edit/edit_con.php';
            exit();
        }
    } else {
        echo "0 results";
        // echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
Ob_end_flush();
