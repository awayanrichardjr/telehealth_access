<section class="profile_doc">
    <div class="container">
        <img src="../img/images/user.png" alt="img">
        <h2 class="profile-name">
            <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
        </h2>
        <ul class="details">
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">stethoscope</span>
                <?php echo $_SESSION['docSpecialty'] ?>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">location_on</span>
                <?php echo $_SESSION['docAddress'] ?>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">cake</span>
                <?php echo $_SESSION['docBdate'] ?>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">contact_phone</span>
                <?php echo $_SESSION['docContact'] ?>
            </li>
            <!-- STATUS -->
            <?php if ($_SESSION['docStatus'] == "Verified") { ?>
                <li class="verified">
                    <span class="material-symbols-outlined" style="font-size: 17px;">verified</span>
                    <?php echo $_SESSION['docStatus'] ?>
                </li>
            <?php } else { ?>
                <li class="unverified">
                    <span class="material-symbols-outlined" style="font-size: 17px;">verified</span>
                    <?php echo $_SESSION['docStatus'] ?>
                </li>
            <?php } ?>
        </ul>
        <ul class="tab-bar">
            <!-- dropdown  -->
            <li class="dropdown-links">
                <span class="material-symbols-outlined">more_horiz</span>
                <div class="dropdown-content">
                    <a href="../public/verify_doc.php?docID=<?php echo $_SESSION['docID'] ?>">
                        <span class="material-symbols-outlined">verified</span>
                        <p>Verify Account</p>
                    </a>
                    <a href="../public/available_doc.php">
                        <span class="material-symbols-outlined">event_available</span>
                        <p>Availability</p>
                    </a>
                    <a href="<?php echo $_SESSION['doc_space'] ?>?docID=<?php echo $_SESSION['docID'] ?>">
                        <span class="material-symbols-outlined">link</span>
                        <p>Google Space Link</p>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <!-- </section> -->