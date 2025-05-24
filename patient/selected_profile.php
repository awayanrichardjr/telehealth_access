<section class="profile_p selected_profile">
    <div class="container">
        <img src="../img/images/user.png" alt="img">
        <h2 class="profile_name">Dr.
            <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
        </h2>
        <ul class="details">
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">stethoscope</span>
                <p><?php echo $_SESSION['docSpecialty'] ?></p>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">location_on</span>
                <p><?php echo $_SESSION['docAddress'] ?></p>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">cake</span>
                <p><?php echo $_SESSION['docBdate'] ?></p>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">contact_phone</span>
                <p><?php echo $_SESSION['docContact'] ?></p>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">contact_mail</span>
                <p><?php echo $_SESSION['docUsername'] ?></p>
            </li>
            <!-- STATUS -->
            <?php
            if ($row['docStatus'] == "Verified") {
            ?>
                <li class="verified">
                    <span class="material-symbols-outlined" style="font-size: 17px;">verified</span>
                    <?php echo $row['docStatus'] ?>
                </li>
                <ul class="actions">
                    <li>
                        <a href="../public/consult_selected_doc.php?docID=<?php echo $row['docID'] ?>">
                            <span class="material-symbols-outlined" style="font-size: 17px;">event_upcoming</span>
                            <p>Consult</p>
                        </a>
                    </li>
                    <!-- google link -->
                    <li>
                        <a href="#" onclick="window.open('<?php echo $_SESSION['doc_space'] ?>', 'PopupWindow', 'width=600,height=700');">
                            <span class="material-symbols-outlined" style="font-size: 17px;">link</span>
                            <p>Google Space Link</p>
                        </a>
                    </li>
                </ul>
            <?php
            } else {
            ?>
                <li class="unverified">
                    <span class="material-symbols-outlined" style="font-size: 17px;">verified</span>
                    <?php echo "Unverified" ?>
                </li>
                <ul class="actions">
                    <li>
                        <a href="#" style="background-color: grey;">
                            <span class="material-symbols-outlined" style="font-size: 17px;">event_upcoming</span>
                            <p>Consult</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" style="background-color: grey;">
                            <span class="material-symbols-outlined" style="font-size: 17px;">link</span>
                            <p>Google Space Link</p>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </ul>
    </div>
    <!-- </section> -->