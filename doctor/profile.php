<section class="profile_doc">
    <div>
        <img src="../img/images/user.png" alt="img">
        <h2 class="profile-name">
            <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
        </h2>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">stethoscope</span>
            <?php echo $_SESSION['docSpecialty'] ?>
        </p>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">location_on</span>
            <?php echo $_SESSION['docAddress'] ?>
        </p>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">cake</span>
            <?php echo $_SESSION['docBdate'] ?>
        </p>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">contact_phone</span>
            <?php echo $_SESSION['docContact'] ?>
        </p>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">contact_mail</span>
            <?php echo $_SESSION['docEmail'] ?>
        </p>
        <!-- STATUS -->
        <?php
        if ($_SESSION['docStatus'] == "Verified") {
            ?>
            <p class="details verified">
                <span class="material-symbols-outlined" style="font-size: 17px;">verified</span>
                <?php echo $_SESSION['docStatus'] ?>
            </p>
            <?php
        } else {
            ?>
            <p class="details unverified">
                <span class="material-symbols-outlined" style="font-size: 17px;">verified</span>
                <?php echo $_SESSION['docStatus'] ?>
            </p>
            <?php
        }
        ?>

        <ul class="tab-bar">
            <li class="tab-content">
                <a href="../public/messages_doc.php">
                    <span class="material-symbols-outlined" style="font-size: 17px;">chat</span>
                    Messages
                </a>
                <a href="../public/appointment_profile_doc.php">
                    <span class="material-symbols-outlined" style="font-size: 17px;">contract</span>
                    Appointments
                </a>
            </li>
            <li></li>

            <!-- dropdown  -->
            <li class="more-dropdown">
                <span class="material-symbols-outlined">more_horiz</span>
                <div class="more-content">
                    <a href="../public/verify_doc.php?docID=<?php echo $_SESSION['docID'] ?>">
                        <span class="material-symbols-outlined">verified</span>
                        Verify Account
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">history</span>
                        Appointment History
                    </a>
                    <a href="../public/available_doc.php">
                        <span class="material-symbols-outlined">event_available</span>
                        Availability
                    </a>
                </div>
            </li>
            <!-- ----------------------- -->
            <!-- <li class="more-dropdown1">
                <span class="material-symbols-outlined">more_horiz</span>
                <div class="more-content">
                    <a href="../public/messages_doc.php">
                        <span class="material-symbols-outlined" style="font-size: 17px;">chat</span>
                        Messages
                    </a>
                    <a href="../public/appointment_profile_doc.php">
                        <span class="material-symbols-outlined" style="font-size: 17px;">contract</span>
                        Appointments
                    </a>
                    <a href="../public/verify_doc.php?docID=<?php echo $_SESSION['docID'] ?>">
                        <span class="material-symbols-outlined">verified</span>
                        Verify Account
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">history</span>
                        Appointment History
                    </a>
                </div>
            </li> -->
        </ul>
    </div>
</section>