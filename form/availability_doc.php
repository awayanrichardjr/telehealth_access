<section class="form availability">
    <form <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Set Up Appointment</h1>
        <div class="details">
            <div>
                <label for="appointment_month">Month:</label>
                <input type="number" id="appointment_month" name="appointment_month" min="<?php echo date('m'); ?>" max="12" value="<?php echo date('m'); ?>" required>
            </div>
            <div>
                <label for="appointment_day">Day:</label>
                <input type="number" id="appointment_day" name="appointment_day" min="1" max="31" value="<?php echo date('d'); ?>" required>
            </div>
            <div>
                <label for="appointment_year">Year:</label>
                <input type="number" id="appointment_year" name="appointment_year" min="<?php echo date('Y'); ?>" max="2100" value="<?php echo date('Y'); ?>" required>
            </div>
        </div>
        <!-- TIME  -->
        <div>
            <label for="appointment_time">Time:</label>
            <input type="time" name="appointment_time" id="appointment_time" required>
        </div>
        <!-- PRICE  -->
        <div>
            <label for="appointment_price">Price:</label>
            <input type="number" name="appointment_price" id="appointment_price" value="300" required>
        </div>

        <?php $appointmentName = $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix']; ?>
        <input type="hidden" name="appointment_name" id="appointment_name" value="<?php echo $appointmentName ?>">
        <input type="hidden" name="appointment_date" id="appointment_date" value="<?php
                                                                                    date_default_timezone_set("Asia/Manila");
                                                                                    echo date("M d, Y h:ia") ?>">
        <input type="hidden" name="appointment_username" id="appointment_username" value="<?php echo $_SESSION['docUsername'] ?>" readonly>
        <!-- Set Up button -->
        <input type="submit" name="submit" id="submit" value="Set Up">
        <button class="info-button" onclick="document.getElementById('popupAvailability').style.display='none'">Close</button>
    </form>
</section>

<style>
    .availability :where(.details) div {
        width: 100%;
        color: grey;
    }
</style>