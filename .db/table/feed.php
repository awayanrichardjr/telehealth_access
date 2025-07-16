<?php
$sql = "CREATE TABLE IF NOT EXISTS feed (
    feed_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    feed_name VARCHAR(255) NOT NULL,
    feed_post VARCHAR(255) NOT NULL,
    feed_DocStatus VARCHAR(255) NOT NULL,
    feed_Cdate VARCHAR(255) NOT NULL,
    feed_Modified VARCHAR(255) NOT NULL
)";
