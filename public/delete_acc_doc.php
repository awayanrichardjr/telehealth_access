<?php
include '../.function/functions.inc.php';
include '../.config/config.inc.php';

$selected_docID = $_GET['docID'];

// sql to delete a record
$sql = "DELETE FROM doctor WHERE docID = $selected_docID";

if ($conn->query($sql) === TRUE) {
    header("location: ../public/logout_doc.php");
    exit();
} else {
    // echo "Error deleting record: " . $conn->error;
}

$conn->close();
