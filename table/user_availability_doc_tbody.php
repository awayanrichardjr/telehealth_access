<?php
if ($_SESSION['appointment_username'] != $_SESSION['docUsername']) {
    # code...
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
            <!-- <a href="https://www.paypal.com/invoice/s/create/" onclick="window.open(this.href, 'PopupWindow', 'width=900,height=600'); return false;" class="consult-doc-link">
                <span class="material-symbols-outlined" style="font-size: 17px;">payment</span>
                <p>Creat Invoice</p>  DO NOT DELETE OR REMOVE
            </a> -->
        </td>
    </tr>
    <!-- </tbody> -->
<?php
}
