<?php
include '../.function/functions.inc.php';
include '../.config/config.inc.php';

$selected_conID = $_GET['conID'];

// sql to delete a record
$sql = "DELETE FROM consult WHERE conID = $selected_conID";

if ($conn->query($sql) === TRUE) {
    header("location: ../public/appointment_admin.php");
    exit();
} else {
    // echo "Error deleting record: " . $conn->error;
}

$conn->close();
