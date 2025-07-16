<?php
$sql = "CREATE TABLE IF NOT EXISTS consult (
    conID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    conName VARCHAR(255) NOT NULL,
    conAddress VARCHAR(255) NOT NULL,
    conBdate DATE NOT NULL,
    conSelectedDoc VARCHAR(255) NOT NULL,
    conDocSpecialty VARCHAR(255) NOT NULL,
    conDiagnose VARCHAR(255) NOT NULL,
    conConcern VARCHAR(255) NOT NULL,
    conUsername VARCHAR(255) NOT NULL,
    conEmail VARCHAR(255) NOT NULL,
    conContact VARCHAR(255) NOT NULL,
    conCdate VARCHAR(255) NOT NULL,
    conAge VARCHAR(255) NOT NULL,
    conDate VARCHAR(255) NOT NULL,
    conTime VARCHAR(255) NOT NULL
)";
