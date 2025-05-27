<?php
session_start();

if (empty($_SESSION['pUsername']) || empty($_SESSION['pPass'])) {
    header("location: ../public/logout_p.php");
    exit();
} else {
    include '../user/index.php';
    include '../patient/main.php';

    // db connect
    include '../.config/config.inc.php';
    include '../patient/specialties.php';

    // specialists table head
    include '../table/user_sp_thead.php';

    $sql = "SELECT * FROM doctor ORDER BY docSpecialty";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            include '../.db/session/session_doc.php';

            // specialists table body
            include '../table/user_sp_tbody.php';
        }
    }
    $conn->close();
}

?>

</tbody>
</table>
</div>
</section>