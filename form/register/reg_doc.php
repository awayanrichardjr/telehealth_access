<section class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1 class="user-h1">Register as a doctor</h1>

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
        <!-- duplicate e-mail error -->
        <span class="error">
            <?php if (isset($_GET['docEmailTakenErr'])) {
                echo $docEmailTakenError = $_GET['docEmailTakenErr'];
            } ?>
        </span>
        <div>
            <label for="docEmail">E-mail
                <span class="error">
                    <?php if (isset($_GET['docEmailErr'])) {
                        echo $docEmailError = $_GET['docEmailErr'];
                    } ?>
                </span>
            </label>
            <input type="email" name="docEmail" id="docEmail" placeholder="E-mail">
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