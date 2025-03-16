<?php
session_start();

// admin
unset($_SESSION['adminEmail']);
header("location: ../public/log_admin.php");
exit();
