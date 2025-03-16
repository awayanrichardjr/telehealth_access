<?php
include '../.function/functions.inc.php';
include '../.config/config.inc.php';

$selected_adminID = $_GET['adminID'];

// sql to delete a record
$sql = "DELETE FROM admin WHERE adminID = $selected_adminID";

if ($conn->query($sql) === TRUE) {
    header("location: ../public/logout_admin.php");
    exit();
} else {
    // echo "Error deleting record: " . $conn->error;
}

$conn->close();
