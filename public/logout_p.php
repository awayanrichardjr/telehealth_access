<?php
session_start();

// p
unset($_SESSION['pEmail']);
header("location: ../public/log_p.php");
exit();
