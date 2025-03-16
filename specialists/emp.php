<?php
session_start();

if (empty($_SESSION['pEmail']) || empty($_SESSION['pPass'])) {
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

    $sql = "SELECT * FROM doctor WHERE docSpecialty='Emergency Medicine Physician'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            
$_SESSION['docID'] = $row['docID'];
$_SESSION['docFname'] = $row['docFname'];
$_SESSION['docMname'] = $row['docMname'];
$_SESSION['docLname'] = $row['docLname'];
$_SESSION['docSuffix'] = $row['docSuffix'];
$_SESSION['docBdate'] = $row['docBdate'];
$_SESSION['docAddress'] = $row['docAddress'];
$_SESSION['docSpecialty'] = $row['docSpecialty'];
$_SESSION['docEmail'] = $row['docEmail'];
$_SESSION['docContact'] = $row['docContact'];
$_SESSION['docPass'] = $row['docPass'];
$_SESSION['docConfirm'] = $row['docConfirm'];
$_SESSION['docCdate'] = $row['docCdate'];
$_SESSION['docModified'] = $row['docModified'];
$_SESSION['docStatus'] = $row['docStatus'];
$_SESSION['docPhoto'] = $row['docPhoto'];
$_SESSION['docQualify'] = $row['docQualify'];
$_SESSION['docIDfront'] = $row['docIDfront'];
$_SESSION['docIDback'] = $row['docIDback'];

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