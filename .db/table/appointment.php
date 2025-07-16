<?php
$sql = "CREATE TABLE IF NOT EXISTS appointment (
    appointment_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    appointment_name VARCHAR(255) NOT NULL,
    appointment_username VARCHAR(255) NOT NULL,
    appointment_month VARCHAR(255) NOT NULL,
    appointment_day VARCHAR(255) NOT NULL,
    appointment_year VARCHAR(255) NOT NULL,
    appointment_time VARCHAR(255) NOT NULL,
    appointment_price int(50) NOT NULL,
    appointment_date VARCHAR(255) NOT NULL,
    appointment_email VARCHAR(255) NOT NULL
)";
