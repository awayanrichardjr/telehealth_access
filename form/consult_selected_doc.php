<section class="form consult">
    <label for="" class="info-label">
        <h1>CONSULTATION FORM</h1>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <h1>Consultation Form</h1>
            <p>Please fill out the form below to help your doctor understand your health concerns better.</p>
            <br>
            <p>- Provide detailed information about your symptoms and any questions you have.</p>
            <p>- Include relevant personal details to ensure accurate consultation.</p>
            <!-- <p>- Attach any supporting documents or previous test results if available.</p> -->
            <p>- Once submitted, your doctor will review the information to prepare for your online consultation.</p>
            <p>- Your health information is kept confidential and secure.</p>
            <p>- Make sure you provide an E-mail account for you to have conversation with the selected doctor in Google space.</p>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- full name -->
        <label for="conName">Patient Name *
            <span class="error">
                <?php if (isset($_GET['conNameErr'])) {
                    echo $conNameError = $_GET['conNameErr'];
                } ?>
            </span>
        </label>
        <input type="text" name="conName" id="conName"
            value="<?php echo $_SESSION['pFname'] . " " . $_SESSION['pMname'] . " " . $_SESSION['pLname'] . " " . $_SESSION['pSuffix'] ?>">

        <label for="conAddress">Patient Address *
            <span class="error">
                <?php if (isset($_GET['conAddressErr'])) {
                    echo $conAddressError = $_GET['conAddressErr'];
                } ?>
            </span>
        </label>
        <input type="text" name="conAddress" id="conAddress" value="<?php echo $_SESSION['pAddress'] ?>">

        <!-- email  -->
        <label for="conEmail">Email Address *
            <span class="error">
                <?php if (isset($_GET['conEmailErr'])) {
                    echo $conEmailError = $_GET['conEmailErr'];
                } ?>
            </span>
        </label>
        <input type="email" name="conEmail" id="conEmail" placeholder="Provide E-mail Address">

        <section class="details">
            <div>
                <label for="conBdate">Patient Birthdate *
                    <span class="error">
                        <?php if (isset($_GET['conBdateErr'])) {
                            echo $conBdateError = $_GET['conBdateErr'];
                        } ?>
                    </span>
                </label>
                <input type="date" name="conBdate" id="conBdate" value="<?php echo $_SESSION['pBdate'] ?>" readonly>
            </div>
            <!-- age  -->
            <div>
                <label for="conAge">Patient Age * </label>
                <input type="number" id="conAge" name="conAge" min="0" max="120" placeholder="Age" required>
            </div>

            <!-- Contact Number  -->
            <div>
                <label for="conContact">Patient Contact Number *
                    <span class="error">
                        <?php if (isset($_GET['conContactErr'])) {
                            echo $conContactError = $_GET['conContactErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="conContact" id="conContact" value="<?php echo $_SESSION['pContact'] ?>" readonly>
            </div>
        </section>

        <section class="details">
            <div>
                <!-- username  -->
                <label for="conUsername">Username *
                    <span class="error">
                        <?php if (isset($_GET['conUsernameErr'])) {
                            echo $conUsernameError = $_GET['conUsernameErr'];
                        } ?>
                    </span>
                </label>
                <input type="hidden" name="conUsername" id="conUsername" value="<?php echo $_SESSION['pUsername'] ?>" readonly>

            </div>
        </section>

        <hr>
        <section class="details">
            <!-- selected doctor to consult  -->
            <div>
                <label for="conSelectedDoc">Personal Doctor *
                    <span class="error">
                        <?php if (isset($_GET['conSelectedDocErr'])) {
                            echo $conNaSelectedDocror = $_GET['conSelectedDocErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="conSelectedDoc" id="conSelectedDoc"
                    value="Dr. <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>" readonly>
            </div>
            <div>
                <label for="conDocSpecialty">Doctor Specialty *
                    <span class="error">
                        <?php if (isset($_GET['conDocSpecialtyErr'])) {
                            echo $conDocSpecialtyError = $_GET['conDocSpecialtyErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="conDocSpecialty" id="conDocSpecialty"
                    value="<?php echo $_SESSION['docSpecialty'] ?>" readonly>
            </div>
        </section>

        <!-- date/time  -->
        <section class="details">
            <div>
                <label for="conDate">Date * </label>
                <?php $appointmentDate = $_SESSION['appointment_month'] . "-" . $_SESSION['appointment_day'] . "-" . $_SESSION['appointment_year'] ?>
                <input type="text" name="conDate" id="conDate" value="<?php echo $appointmentDate ?>" readonly>
            </div>
            <div>
                <label for="conTime">Time * </label>
                <?php $appointmentTime = $_SESSION['appointment_time'] ?>
                <input type="time" name="conTime" id="conTime" value="<?php echo $appointmentTime ?>" readonly>
            </div>
        </section>

        <div>
            <!-- compliant  -->
            <?php include '../form/diagnose/derma.php' ?>
        </div>

        <input type="hidden" name="conCdate" id="conCdate" value="<?php
                                                                    date_default_timezone_set("Asia/Manila");
                                                                    echo date("M-d-Y h:ia") ?>">

        <!-- concern -->
        <label for="conConcern">Additional Concern(Optional) * </label>
        <textarea name="conConcern" id="conConcern"
            placeholder="Type additional concern or specify your concern..."></textarea>


        <input type="submit" name="submit" id="submit" value="Next">
    </form>
</section>