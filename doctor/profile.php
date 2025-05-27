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
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">badge</span>
                <?php echo $_SESSION['docUsername'] ?>
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
        <ul class="actions">
            <li>
                <a href="../public/verify_doc.php?docID=<?php echo $_SESSION['docID'] ?>">
                    <span class="material-symbols-outlined" style="font-size: 17px;">verified</span>
                    <p>Verify Account</p>
                </a>
            </li>

            <!-- IF VERIFIED  -->
            <?php if ($_SESSION['docStatus'] == "Verified") { ?>
                <li>
                    <a href="../public/available_doc.php">
                        <span class="material-symbols-outlined" style="font-size: 17px;">event_available</span>
                        <p>Availability</p>
                    </a>
                </li>
                <li>
                    <?php
                    if (isset($_SESSION['doc_space']) && !empty($_SESSION['doc_space'])) {
                        $doc_space = $_SESSION['doc_space'];
                    } else {
                        $doc_space = ''; // default or fallback URL
                    }
                    ?>

                    <script>
                        let doc_space = "<?php echo $doc_space; ?>";
                    </script>

                    <a href="#" onclick="window.open(doc_space, 'PopupWindow', 'width=600,height=700'); return false;">
                        <span class="material-symbols-outlined" style="font-size: 17px;">link</span>
                        <p>Google Space Link</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="info-button" onclick="document.getElementById('popupAvailability').style.display='block';  return false;">
                        <span class="material-symbols-outlined" style="font-size: 17px;">book_online</span>
                        <p>Book Appointment</p>
                    </a>
                    <div id="popupAvailability">
                        <?php include '../public/availability_doc.php' ?>
                    </div>
                </li>

                <!-- IF NOT VERIFIED  -->
            <?php } else { ?>
                <li>
                    <a href="#" style="background-color: grey;">
                        <span class="material-symbols-outlined" style="font-size: 17px;">event_available</span>
                        <p>Availability</p>
                    </a>
                </li>
                <li>
                    <a href="#" style="background-color: grey;">
                        <span class="material-symbols-outlined" style="font-size: 17px;">link</span>
                        <p>Google Space Link</p>
                    </a>
                </li>
                <li>
                    <a href="#" style="background-color: grey;">
                        <span class="material-symbols-outlined" style="font-size: 17px;">book_online</span>
                        <p>Book Appointment</p>
                    </a>
                </li>
            <?php } ?>

        </ul>
    </div>

    <!-- </section> -->