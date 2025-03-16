<?php
session_start();

// doc
unset($_SESSION['docEmail']);
header("location: ../public/log_doc.php");
exit();
