<?php
// connection
include '../.db/conn.inc.php';

// database 
include '../.db/db.inc.php';
check_db($conn, $sql);

$dbname = $created_db_name;
$conn = new mysqli($servername, $username, $password, $dbname);
check_conn($conn);

// database table
include '../.db/table.inc.php';
check_table($conn, $sql);

// $conn->close();
