<?php
$sql = "CREATE TABLE IF NOT EXISTS doctor (
    docID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    docFname VARCHAR(255) NOT NULL,
    docMname VARCHAR(255) NOT NULL,
    docLname VARCHAR(255) NOT NULL,
    docSuffix VARCHAR(255) NOT NULL,
    docBdate DATE NOT NULL,
    docAddress VARCHAR(255) NOT NULL,
    docSpecialty VARCHAR(255) NOT NULL,
    docUsername VARCHAR(255) NOT NULL UNIQUE, #username
    docEmail VARCHAR(255) NOT NULL, #email
    docContact VARCHAR(255) NOT NULL UNIQUE,
    docPass VARCHAR(255) NOT NULL, #password
    docConfirm VARCHAR(255) NOT NULL, #confirm password
    docCdate DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    docModified VARCHAR(255) NOT NULL,
    docStatus VARCHAR(10) NOT NULL,
    docPhoto VARCHAR(255) NOT NULL,
    docQualify VARCHAR(255) NOT NULL,
    docIDfront VARCHAR(255) NOT NULL,
    docIDback VARCHAR(255) NOT NULL,
    doc_space VARCHAR(255) NOT NULL
)";
