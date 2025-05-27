<?php
if ($_SESSION['appointment_username'] != $_SESSION['docUsername']) {
    echo '';
} else {
?>
    <tr>
        <td>
            <span class="material-symbols-outlined"> event_available</span>
            <p class=""><b>Dr. <?php echo $_SESSION['appointment_name'] ?></b></p>
            <div style="display: flex; flex-direction:column;">
                <div>
                    <p class=""><?php include '../.function/availability_month.inc.php' ?></p>
                    <p class=""><?php echo (int)$_SESSION['appointment_day'] ?>,</p>
                    <p class=""><?php echo (int)$_SESSION['appointment_year'] ?></p>
                </div>
                <p class=""><?php echo $_SESSION['appointment_time'] ?></p>
                <h1 style="color: var(--yellow); text-align: end;">₱ <?php echo $_SESSION['appointment_price'] ?></h1>
            </div>
            <a href="../public/consult_selected_doc.php?appointment_id=<?php echo $row['appointment_id']; ?>" class="consult-doc-link">
                <span class="material-symbols-outlined" style="font-size: 17px;">event_available</span>
                <p>Consult</p>
            </a>
        </td>
    </tr>
    <!-- </tbody> -->
<?php
}
