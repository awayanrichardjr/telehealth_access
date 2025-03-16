<?php

function check_conn($conn)
{
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo '<script>alert("Connected Successfully!")</script>';
    }
}

function check_table($conn, $sql)
{
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Table Created Successfully!")</script>';
    } else {
    }
}

function check_db($conn, $sql)
{
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Database Created Successfully!")</script>';
    } else {
    }
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function toupper1stchar($data)
{
    $data = ucwords($data);
    return $data;
}
