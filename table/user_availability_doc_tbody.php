<?php
if ($_SESSION['appointment_username'] != $_SESSION['docUsername']) {
    # code...
    echo '';
} else {
?>
    <tr>
        <td>
            <span class="material-symbols-outlined">
                event_available
            </span>
            <div>
                <p class=""><?php include '../.function/availability_month.inc.php' ?></p>
                <p class=""><?php echo (int)$_SESSION['appointment_day'] ?>,</p>
                <p class=""><?php echo (int)$_SESSION['appointment_year'] ?></p>
            </div>
            <p class=""><?php echo $_SESSION['appointment_time'] ?></p>
            <!-- <a href="#">Consult</a> -->
            <p class=""><b>Dr. <?php echo $_SESSION['appointment_name'] ?></b></p>
            <div style="display: flex; justify-content: space-between;">
                <p class=""><?php echo $_SESSION['appointment_username'] ?></p>
                <h1 style="color: var(--yellow);">₱<?php echo $_SESSION['appointment_price'] ?></h1>
            </div>
        </td>
    </tr>
    <!-- </tbody> -->
<?php
}
