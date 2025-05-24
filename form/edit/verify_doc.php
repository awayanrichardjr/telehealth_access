<section class="form form_edit">
    <label for="" class="info-label">
        <h1>USER VERIFICATION FORM</h1>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <h1>Doctor Account Verification</h1>
            <p>Verify Your Account to Unlock Full Access</p>
            <br>
            <p>To ensure the credibility of our healthcare platform, doctors are required to verify their accounts. Please complete the form below by providing the necessary professional details and documentation.</p>
            <br>
            <p>To complete your verification and gain full access to the system, please upload the following:</p>
            <p>- Certificates/Qualifications</p>
            <p>- Front Valid ID</p>
            <p>- Back Valid ID</p>
            <p>- Google Space Link (for ongoing patient conversations and professional communication)</p>
            <br>
            <p>- All submitted information is kept confidential and used solely for verification purposes.</p>
            <p>- Once submitted, your verification will be reviewed by our admin team. </p>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="docID" id="docID" value="<?php echo $selected_docID ?>">
        <!-- FULL NAME -->
        <h6><?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
        </h6>
        <input type="hidden" name="docFname" id="docFname" value="<?php echo $_SESSION['docFname'] ?>">
        <input type="hidden" name="docMname" id="docMname" value="<?php echo $_SESSION['docMname'] ?>">
        <input type="hidden" name="docLname" id="docLname" value="<?php echo $_SESSION['docLname'] ?>">
        <input type="hidden" name="docSuffix" id="docSuffix" value="<?php echo $_SESSION['docSuffix'] ?>">

        <input type="hidden" name="docAddress" id="docAddress" value="<?php echo $_SESSION['docAddress'] ?>">
        <input type="hidden" name="docBdate" id="docBdate" value="<?php echo $_SESSION['docBdate'] ?>">
        <input type="hidden" name="docSpecialty" id="docSpecialty" value="<?php echo $_SESSION['docSpecialty'] ?>">

        <!-- STATUS PENDING -->
        <input type="hidden" name="docStatus" id="docStatus" value="Pending">

        <hr>
        <section class="details">
            <!-- CONTACT NUMBER -->
            <div>
                <label for="docContact">Contact Number</label>
                <span class="error">
                    <?php if (isset($_GET['docContactErr'])) {
                        echo $docFnameErr = $_GET['docContactErr'];
                    } ?>
                </span>
                <input type="text" name="docContact" id="docContact" value="<?php echo $row['docContact'] ?>">
            </div>

            <!-- Username -->
            <div>
                <label for="docUsername">Username</label>
                <span class="error">
                    <?php if (isset($_GET['docUsernameErr'])) {
                        echo $docFnameErr = $_GET['docUsernameErr'];
                    } ?>
                </span>
                <input type="text" name="docUsername" id="docUsername" value="<?php echo $row['docUsername'] ?>">
            </div>
        </section>

        <!-- Qualification -->
        <div>
            <label for="docQualify">Certificates/Qualifications *</label>
            <input type="file" name="docQualify" id="docQualify" required>
        </div>

        <!-- ID -->
        <section class=" details">
            <div>
                <label for="docIDfront">Front Valid ID *</label>
                <input type="file" name="docIDfront" id="docIDfront" required>
            </div>
            <div>
                <label for=" docIDback">Back Valid ID *</label>
                <input type="file" name="docIDback" id="docIDback" required>
            </div>
        </section>

        <!-- Google space link -->
        <div>
            <label for="doc_space">Google space link *</label>
            <input type="url" name="doc_space" id="doc_space" value="<?php echo $_SESSION['doc_space'] ?>" required>
        </div>

        <!-- submit btn  -->
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
</section>