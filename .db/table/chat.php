<?php
$sql = "CREATE TABLE chat (
    chatID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    chatMessage VARCHAR(255) NOT NULL,
    chatPicture VARCHAR(255) NOT NULL,
    chatVideo VARCHAR(255) NOT NULL,
    chatCdate DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    chatModified VARCHAR(255) NOT NULL
)";
