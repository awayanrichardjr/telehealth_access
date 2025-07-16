<?php
$sql = "CREATE TABLE IF NOT EXISTS chat (
    chat_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    chat_msg VARCHAR(255) NOT NULL,
    chat_pic VARCHAR(255) NOT NULL,
    chat_vid VARCHAR(255) NOT NULL,
    chat_Cdate VARCHAR(255) NOT NULL,
    chat_Modified VARCHAR(255) NOT NULL
)";
