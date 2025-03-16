<?php
$sql = "CREATE TABLE consult (
    conID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    conName VARCHAR(255) NOT NULL,
    conAddress VARCHAR(255) NOT NULL,
    conBdate DATE NOT NULL,
    conSelectedDoc VARCHAR(255) NOT NULL,
    conDocSpecialty VARCHAR(255) NOT NULL,
    conDiagnose VARCHAR(255) NOT NULL,
    conConcern VARCHAR(255) NOT NULL,
    conEmail VARCHAR(255) NOT NULL,
    conContact VARCHAR(255) NOT NULL,
    conCdate VARCHAR(255) NOT NULL,
    conADateTime DATETIME NOT NULL
)";
