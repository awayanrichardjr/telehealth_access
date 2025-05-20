<?php
include '../.function/functions.inc.php';
include '../.config/config.inc.php';

$selected_medID = $_GET['medID'];

// sql to delete a record
$sql = "DELETE FROM medical WHERE medID = $selected_medID";

if ($conn->query($sql) === TRUE) {
    header("location: ../public/medical_admin.php");
    exit();
} else {
    // echo "Error deleting record: " . $conn->error;
}

$conn->close();
