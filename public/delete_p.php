<?php
include '../.function/functions.inc.php';
include '../.config/config.inc.php';

$selected_pID = $_GET['pID'];

// sql to delete a record
$sql = "DELETE FROM patient WHERE pID = $selected_pID";

if ($conn->query($sql) === TRUE) {
    header("location: ../public/records_p.php");
    exit();
} else {
    // echo "Error deleting record: " . $conn->error;
}

$conn->close();
