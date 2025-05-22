<?php
session_start();

// admin
unset($_SESSION['adminUsername']);
header("location: ../public/log_admin.php");
exit();
