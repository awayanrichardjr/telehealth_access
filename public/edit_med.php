<?php
Ob_start();
session_start();
if (empty($_SESSION['adminUsername']) || empty($_SESSION['adminPass'])) {
    header("location: ../public/log_admin.php");
} else {
    include '../admin/index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $medID = $_REQUEST['medID'];
        $medName = $_REQUEST['medName'];
        $medAddress = $_REQUEST['medAddress'];
        $medBdate = $_REQUEST['medBdate'];
        $medSelectedDoc = $_REQUEST['medSelectedDoc'];
        $medDocSpecialty = $_REQUEST['medDocSpecialty'];
        $medDiagnose = $_REQUEST['medDiagnose'];
        $medConcern = $_REQUEST['medConcern'];
        $medUsername = $_REQUEST['medUsername'];
        $medEmail = $_REQUEST['medEmail'];
        $medContact = $_REQUEST['medContact'];
        $medCdate = $_REQUEST['medCdate'];
        $medADateTime = $_REQUEST['medADateTime'];
        $medTreatment = $_REQUEST['medTreatment'];

        $medNamev = toupper1stchar($medName);
        $medAddressv = toupper1stchar($medAddress);
        $medSelectedDocv = toupper1stchar($medSelectedDoc);
        $medConcernv = toupper1stchar($medConcern);

        $sql = "UPDATE medical SET medID = '$medID', medName = '$medNamev', medAddress = '$medAddressv', medBdate = '$medBdate', medSelectedDoc = '$medSelectedDocv', medDocSpecialty = '$medDocSpecialty', medDiagnose = '$medDiagnose', medConcern = '$medConcernv', medUsername = '$medUsername', medEmail = '$medEmail', medContact = '$medContact', medCdate = '$medCdate', medADateTime = '$medADateTime', medTreatment = '$medTreatment' WHERE medID='$medID'";

        if ($conn->query($sql) === TRUE) {
            header("location: ../public/medical_admin.php");
            exit();
        } else {
            // echo "Error updating record: " . $medn->error;
        }

        $conn->close();
    }
    include '../admin/main.php';
    $selected_medID = $_GET['medID'];
    $sql = "SELECT * FROM medical WHERE medID = $selected_medID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            include '../form/edit/edit_med.php';
            exit();
        }
    } else {
        echo "0 results";
        // echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
Ob_end_flush();
