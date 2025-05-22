<?php
Ob_start();
session_start();
include '../user/index.php';
include '../user/nav.php';

$pUsernameErr = $pPassErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pUsername = validate($_POST['pUsername']);
    $pPass = validate($_POST['pPass']);

    if (empty($pUsername)) {
        $pUsernameErr = "is required";
    } else if (empty($pPass)) {
        $pPassErr = "is required";
    } else {
        $sql = "SELECT * FROM patient WHERE pUsername='$pUsername' AND pPass='$pPass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row ...&&
            while ($row = $result->fetch_assoc()) {

                $_SESSION['pID'] = $row['pID'];
                $_SESSION['pFname'] = $row['pFname'];
                $_SESSION['pMname'] = $row['pMname'];
                $_SESSION['pLname'] = $row['pLname'];
                $_SESSION['pSuffix'] = $row['pSuffix'];
                $_SESSION['pAddress'] = $row['pAddress'];
                $_SESSION['pBdate'] = $row['pBdate'];
                $_SESSION['pContact'] = $row['pContact'];
                $_SESSION['pUsername'] = $row['pUsername'];
                $_SESSION['pPass'] = $row['pPass'];
                $_SESSION['pConfirm'] = $row['pConfirm'];

                header("location: ../public/main_p_feed.php");
                exit();
            }
        } else {
            header("location: ../public/log_p.php?error=Incorrect Password or E-mail");
            exit();
        }
    }
}
include '../form/login/log_p.php';
include '../user/footer.php';

Ob_end_flush();
