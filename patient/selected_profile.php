<section class="profile_p selected_profile">
    <div class="container">
        <img src="../img/images/user.png" alt="img">
        <h2 class="profile_name">Dr.
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
                <span class="material-symbols-outlined" style="font-size: 17px;">contact_mail</span>
                <?php echo $_SESSION['docEmail'] ?>
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
                        <a href="../public/chat_selected_doc.php?docID=<?php echo $row['docID'] ?>">
                            <span class="material-symbols-outlined" style="font-size: 17px;">chat</span>
                            <p>Chat</p>
                        </a>
                    </li>
                    <li>
                        <a href="../public/consult_selected_doc.php?docID=<?php echo $row['docID'] ?>">
                            <span class="material-symbols-outlined" style="font-size: 17px;">event_upcoming</span>
                            <p>Consult</p>
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
                            <span class="material-symbols-outlined" style="font-size: 17px;">chat</span>
                            <p>Chat</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" style="background-color: grey;">
                            <span class="material-symbols-outlined" style="font-size: 17px;">event_upcoming</span>
                            <p>Consult</p>
                        </a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </ul>
    </div>
    <!-- </section> -->