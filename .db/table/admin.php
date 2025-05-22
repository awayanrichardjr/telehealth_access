<?php
$sql = "CREATE TABLE admin (
    adminID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    adminFname VARCHAR(255) NOT NULL,
    adminMname VARCHAR(255) NOT NULL,
    adminLname VARCHAR(255) NOT NULL,
    adminSuffix VARCHAR(255) NOT NULL,
    adminAddress VARCHAR(255) NOT NULL,
    adminBdate DATE NOT NULL,
    adminUsername VARCHAR(255) NOT NULL UNIQUE,
    adminContact VARCHAR(255) NOT NULL UNIQUE,
    adminPass VARCHAR(255) NOT NULL,
    adminConfirm VARCHAR(255) NOT NULL,
    adminCdate DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    adminModified VARCHAR(255) NOT NULL
)";
