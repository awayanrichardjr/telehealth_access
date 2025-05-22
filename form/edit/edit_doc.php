<section class="form form_edit">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>DOCTOR INFORMATION</h1>
        <p style="color: grey;">ID: <?php echo $selected_docID ?></p>
        <input type="hidden" name="docID" id="docID" value="<?php echo $selected_docID ?>">

        <!-- fullname  -->
        <section class="details">
            <div>
                <label for="docFname">First Name</label>
                <span class="error">
                    <?php if (isset($_GET['docFnameErr'])) {
                        echo $docFnameErr = $_GET['docFnameErr'];
                    } ?>
                </span>
                <input type="text" name="docFname" id="docFname" value="<?php echo $row['docFname'] ?>">
            </div>
            <div>
                <label for="docMname">Middle Name</label>
                <span class="error">
                    <?php if (isset($_GET['docMnameErr'])) {
                        echo $docFnameErr = $_GET['docMnameErr'];
                    } ?>
                </span>
                <input type="text" name="docMname" id="docMname" value="<?php echo $row['docMname'] ?>">
            </div>
            <div>
                <label for="docLname">Last Name</label>
                <span class="error">
                    <?php if (isset($_GET['docLnameErr'])) {
                        echo $docFnameErr = $_GET['docLnameErr'];
                    } ?>
                </span>
                <input type="text" name="docLname" id="docLname" value="<?php echo $row['docLname'] ?>">
            </div>
            <div>
                <label for="docSuffix">Suffix</label>
                <span class="error">
                    <?php if (isset($_GET['docSuffixErr'])) {
                        echo $docFnameErr = $_GET['docSuffixErr'];
                    } ?>
                </span>
                <input type="text" name="docSuffix" id="docSuffix" value="<?php echo $row['docSuffix'] ?>">
            </div>
        </section>

        <!-- address  -->
        <div>
            <label for="docAddress">Address</label>
            <span class="error">
                <?php if (isset($_GET['docAddressErr'])) {
                    echo $docFnameErr = $_GET['docAddressErr'];
                } ?>
            </span>
            <input type="text" name="docAddress" id="docAddress" value="<?php echo $row['docAddress'] ?>">
        </div>

        <!-- details  -->
        <section class="details">
            <div>
                <label for="docBdate">Birthdate</label>
                <span class="error">
                    <?php if (isset($_GET['docBdateErr'])) {
                        echo $docFnameErr = $_GET['docBdateErr'];
                    } ?>
                </span>
                <input type="date" name="docBdate" id="docBdate" value="<?php echo $row['docBdate'] ?>">
            </div>
            <div>
                <label for="docContact">Contact Number</label>
                <span class="error">
                    <?php if (isset($_GET['docContactErr'])) {
                        echo $docFnameErr = $_GET['docContactErr'];
                    } ?>
                </span>
                <input type="text" name="docContact" id="docContact" value="<?php echo $row['docContact'] ?>">
            </div>

            <!-- specialists  -->
            <div>
                <label for="docSpecialty">Specialist</label>
                <select name="docSpecialty" id="docSpecialty">
                    <option value="<?php echo $row['docSpecialty'] ?>"><?php echo $row['docSpecialty'] ?></option>
                    <option value="Dermatologist">Dermatologist</option>
                    <option value="Obstetrician-Gynecologist">Obstetrician-Gynecologist</option>
                    <option value="Ophthalmologist">Ophthalmologist</option>
                    <option value="Allergist">Allergist</option>
                    <option value="Gastroenterologist">Gastroenterologist</option>
                    <option value="Geriatrician">Geriatrician</option>
                    <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                    <option value="Hematologist">Hematologist</option>
                    <option value="Neurologist">Neurologist</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Pediatrician">Pediatrician</option>
                    <option value="Endocrinologist">Endocrinologist</option>
                    <option value="Radiologist">Radiologist</option>
                    <option value="Nephrologist">Nephrologist</option>
                    <option value="Otorhinolaryngologist">Otorhinolaryngologist</option>
                    <option value="Podiatrist">Podiatrist</option>
                    <option value="Family Medicine Doctor">Family Medicine Doctor</option>
                    <option value="Psychiatrist">Psychiatrist</option>
                    <option value="Emergency Medicine Physician">Emergency Medicine Physician</option>
                    <option value="Anesthesiologist">Anesthesiologist</option>
                    <option value="General Surgeon">General Surgeon</option>
                    <option value="Pathologist">Pathologist</option>
                    <option value="Surgeon">Surgeon</option>
                </select>
            </div>
        </section>

        <!-- Username  -->
        <div>
            <label for="docUsername">Username</label>
            <span class="error">
                <?php if (isset($_GET['docUsernameErr'])) {
                    echo $docFnameErr = $_GET['docUsernameErr'];
                } ?>
            </span>
            <input type="text" name="docUsername" id="docUsername" value="<?php echo $row['docUsername'] ?>">
        </div>

        <!-- SAVE btn -->
        <input type="submit" name="docSave" id="submit" value="Save">

        <!-- PROOF -->
        <h1>PROOF TO VERIFY USER ACCOUNT</h1>
        <div>
            <label for="docQualify">Certificates/Qualifications:</label>
            <img src="#" alt="proof">
        </div>
        <section class="details">
            <div>
                <label for="docIDfront">Front Valid ID:</label>
                <img src="#" alt="proof">
            </div>
            <?php
            ?>
            <div>
                <label for="docIDback">Back Valid ID:</label>
                <img src="#" alt="proof">
            </div>
        </section>

        <!-- DATETIME  -->
        <div>
            <input type="hidden" name="docModified" id="docModified" value="<?php
                                                                            date_default_timezone_set("Asia/Manila");
                                                                            echo date("M-d-Y h:ia") ?>">
        </div>

        <!-- STATUS PENDING -->
        <input type="hidden" name="docStatus" id="docStatus" value="Unverified">
        <input type="hidden" name="docDStatus" id="docDStatus" value="<?php echo $_SESSION['docStatus'] ?>">

        <!-- BTNs -->
        <section class="edit-doc-btn">
            <input style="flex-grow:1;" type="submit" name="docDecline" id="submit" value="Decline">
            <input style="flex-grow:1;" type="submit" name="docVerify" id="submit" value="Verify">
        </section>
    </form>
</section>