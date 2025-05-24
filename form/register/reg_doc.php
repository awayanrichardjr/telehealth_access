<section class="form">
    <label class="info-label">
        <h1 class="user-h1">Register as a doctor</h1>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <p>This is the popped-up section!</p>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- fullname  -->
        <section class="details">
            <div>
                <label for="docFname">First Name
                    <span class="error">
                        <?php if (isset($_GET['docFnameErr'])) {
                            echo $docFnameError = $_GET['docFnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="docFname" id="docFname" placeholder="First Name">
            </div>
            <div>
                <label for="docMname">Middle Name
                    <span class="error">
                        <?php if (isset($_GET['docMnameErr'])) {
                            echo $docMnameError = $_GET['docMnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="docMname" id="docMname" placeholder="Middle Name">
            </div>
            <div>
                <label for="docLname">Last Name
                    <span class="error">
                        <?php if (isset($_GET['docLnameErr'])) {
                            echo $docLnameError = $_GET['docLnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="docLname" id="docLname" placeholder="Last Name">
            </div>
            <div>
                <label for="docSuffix">Suffix
                    <span class="error">
                        <?php if (isset($_GET['docSuffixErr'])) {
                            echo $docSuffixError = $_GET['docSuffixErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="docSuffix" id="docSuffix" placeholder="Suffix">
            </div>
        </section>

        <!-- address  -->
        <div>
            <label for="docAddress">Address
                <span class="error">
                    <?php if (isset($_GET['docAddressErr'])) {
                        echo $docAddressError = $_GET['docAddressErr'];
                    } ?>
                </span>
            </label>
            <input type="text" name="docAddress" id="docAddress" placeholder="Current Place">
        </div>

        <!-- details  -->
        <section class="details">
            <div>
                <label for="docBdate">Birthdate
                    <span class="error">
                        <?php if (isset($_GET['docBdateErr'])) {
                            echo $docBdateError = $_GET['docBdateErr'];
                        } ?>
                    </span>
                </label>
                <input type="date" name="docBdate" id="docBdate" placeholder="Birthdate">
            </div>
            <div>
                <label for="docContact">Contact Number
                    <span class="error">
                        <?php if (isset($_GET['docContactErr'])) {
                            echo $docContactError = $_GET['docContactErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="docContact" id="docContact" placeholder="Contact Number">
            </div>

            <!-- specialists  -->
            <div>
                <label for="docSpecialty">Specialist</label>
                <span class="error">
                    <?php if (isset($_GET['docSpecialtyErr'])) {
                        echo $docSpecialtyError = $_GET['docSpecialtyErr'];
                    } ?>
                </span>
                <select name="docSpecialty" id="docSpecialty">
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

        <!-- DEAFAULT STATUS -->
        <input type="hidden" name="docStatus" id="docStatus" value="Unverified">

        <hr>

        <!-- duplicate Username error -->
        <span class="error">
            <?php
            if (isset($_GET['docUsernameTakenErr'])) {
                echo $docUsernameTakenError = $_GET['docUsernameTakenErr'];
            }
            ?>
        </span>
        <div>
            <label for="docUsername">Username
                <span class="error">
                    <?php if (isset($_GET['docUsernameErr'])) {
                        echo $docUsernameError = $_GET['docUsernameErr'];
                    } ?>
                </span>
            </label>
            <input type="text" name="docUsername" id="docUsername" placeholder="Username">
        </div>

        <!-- passwords error  -->
        <span class="error">
            <?php if (isset($_GET['docPassNotMatch'])) {
                echo $docConfirmError = $_GET['docPassNotMatch'];
            } ?>
        </span>

        <div>
            <label for="docPass">Create Password
                <span class="error">
                    <?php if (isset($_GET['docPassErr'])) {
                        echo $docPassError = $_GET['docPassErr'];
                    } ?>
                </span>
            </label>
            <input type="password" name="docPass" id="docPass" placeholder="Create Password">
        </div>
        <div>
            <label for="docConfirm">Confirm Password
                <span class="error">
                    <?php if (isset($_GET['docConfirmErr'])) {
                        echo $docConfirmError = $_GET['docConfirmErr'];
                    } ?>
                </span>
            </label>
            <input type="password" name="docConfirm" id="docConfirm" placeholder="Confirm Password">
        </div>

        <!-- <input type="file" name="docQualify" id="docQualify"> -->
        <!-- <input type="file" name="docIDfront" id="docIDfront"> -->
        <!-- <input type="file" name="docIDback" id="docIDback"> -->

        <input type="submit" name="submit" id="submit" value="Register">
        <p class="or">Click here to <a href="../public/log_doc.php">Login</a>.</p>
    </form>
</section>