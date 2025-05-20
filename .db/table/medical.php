<?php
$sql = "CREATE TABLE medical (
    medID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    medName VARCHAR(255) NOT NULL,
    medAddress VARCHAR(255) NOT NULL,
    medBdate DATE NOT NULL,
    medSelectedDoc VARCHAR(255) NOT NULL,
    medDocSpecialty VARCHAR(255) NOT NULL,
    medDiagnose VARCHAR(255) NOT NULL,
    medConcern VARCHAR(255) NOT NULL,
    medEmail VARCHAR(255) NOT NULL,
    medContact VARCHAR(255) NOT NULL,
    medCdate VARCHAR(255) NOT NULL,
    medADateTime VARCHAR(255) NOT NULL,
    medTreatment VARCHAR(255) NOT NULL
)";
