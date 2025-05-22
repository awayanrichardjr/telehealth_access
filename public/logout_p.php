<?php
session_start();

// p
unset($_SESSION['pUsername']);
header("location: ../public/log_p.php");
exit();
