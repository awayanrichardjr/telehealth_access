<?php
// session_start();

// patient
if (empty($_SESSION['pEmail']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../table/user_chat_system_thead.php';

    $sql = "SELECT * FROM chat ORDER BY chat_id ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['chat_id'] = $row['chat_id'];
            $_SESSION['chat_msg'] = $row['chat_msg'];
            $_SESSION['chat_pic'] = $row['chat_pic'];
            $_SESSION['chat_vid'] = $row['chat_vid'];
            $_SESSION['chat_Cdate'] = $row['chat_Cdate'];
            $_SESSION['chat_Modified'] = $row['chat_Modified'];

            include '../table/user_chat_system_tbody.php';
        }
    } else {
        echo '<p class="no-data">No Appointment Records</p>';
    }
    // $conn->close();
}

?>
</tbody>