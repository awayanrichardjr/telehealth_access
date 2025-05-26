<?php
// session_start();

// patient
if (empty($_SESSION['pUsername']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../table/user_availability_p_thead.php';

    $sql = "SELECT * FROM appointment ORDER BY appointment_id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $_SESSION['appointment_id'] = $row['appointment_id'];
            $_SESSION['appointment_name'] = $row['appointment_name'];
            $_SESSION['appointment_username'] = $row['appointment_username'];
            $_SESSION['appointment_month'] = $row['appointment_month'];
            $_SESSION['appointment_day'] = $row['appointment_day'];
            $_SESSION['appointment_year'] = $row['appointment_year'];
            $_SESSION['appointment_time'] = $row['appointment_time'];
            $_SESSION['appointment_price'] = $row['appointment_price'];
            $_SESSION['appointment_date'] = $row['appointment_date'];

            include '../table/user_availability_p_tbody.php';
        }
    } else {
        echo '<p class="no-data">No Appointment Set Up</p>';
    }
    // $conn->close();
}
