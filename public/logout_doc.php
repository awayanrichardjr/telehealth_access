<?php
session_start();

// doc
unset($_SESSION['docUsername']);
header("location: ../public/log_doc.php");
exit();
