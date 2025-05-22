<?php
ob_start();
session_start();

// patient
if (empty($_SESSION['pUsername']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';
    include '../form/chat_selected_doc.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $chat_msg = $_POST['chat_msg'];

        $sql = "INSERT INTO chat (chat_msg) VALUES ('$chat_msg')";
        if ($conn->query($sql) === TRUE) {
            header("location: chat_selected_doc.php");
            exit();
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            header("location: chat_selected_doc.php?error");
            // exit();
        }
        $conn->close();
    }
}
ob_end_flush();
