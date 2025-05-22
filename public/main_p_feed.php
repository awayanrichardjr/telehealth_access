<?php
Ob_start();
session_start();

// patient
if (empty($_SESSION['pUsername']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';
    include '../user/feed_p.php';
    include '../table/user_feed_p_thead.php';

    $sql = "SELECT * FROM feed ORDER BY feed_id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['feed_id'] = $row['feed_id'];
            $_SESSION['feed_name'] = $row['feed_name'];
            $_SESSION['feed_post'] = $row['feed_post'];
            $_SESSION['feed_Cdate'] = $row['feed_Cdate'];
            $_SESSION['feed_DocStatus'] = $row['feed_DocStatus'];
            $_SESSION['feed_Modified'] = $row['feed_Modified'];

            include '../table/user_feed_p_tbody.php';
        }
    } else {
        echo '<p class="no-data">No Posts</p>';
    }
    $conn->close();
}
Ob_end_flush();