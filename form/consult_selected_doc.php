<section class="form consult">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>CONSULTATION FORM</h1>
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

        <section class="details">
            <div>
                <label for="conBdate">Patient Birthdate *
                    <span class="error">
                        <?php if (isset($_GET['conBdateErr'])) {
                            echo $conBdateError = $_GET['conBdateErr'];
                        } ?>
                    </span>
                </label>
                <input type="date" name="conBdate" id="conBdate" value="<?php echo $_SESSION['pBdate'] ?>">
            </div>
            <div>
                <label for="conContact">Patient Contact Number *
                    <span class="error">
                        <?php if (isset($_GET['conContactErr'])) {
                            echo $conContactError = $_GET['conContactErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="conContact" id="conContact" value="<?php echo $_SESSION['pContact'] ?>">
            </div>
        </section>
        <label for="conUsername">E-mail *
            <span class="error">
                <?php if (isset($_GET['conUsernameErr'])) {
                    echo $conUsernameError = $_GET['conUsernameErr'];
                } ?>
            </span>
        </label>
        <input type="text" name="conUsername" id="conUsername" value="<?php echo $_SESSION['pUsername'] ?>">

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
                    value="Dr. <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>">
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
                    value="<?php echo $_SESSION['docSpecialty'] ?>">
            </div>
        </section>

        <section class="details">
            <!-- date/time  -->
            <div>
                <label for="conADateTime">Appointment Date/Time *
                    <span class="error">
                        <?php if (isset($_GET['conADateTimeErr'])) {
                            echo $conADateTimeError = $_GET['conADateTimeErr'];
                        } ?>
                    </span>
                </label>
                <input type="datetime-local" name="conADateTime" id="conADateTime">
            </div>
            <div>
                <!-- compliant  -->
                <?php include '../form/diagnose/derma.php' ?>
            </div>
        </section>

        <input type="hidden" name="conCdate" id="conCdate" value="<?php
        date_default_timezone_set("Asia/Manila");
        echo date("M-d-Y h:ia") ?>">

        <label for="conConcern">Additional Concern *
            <span class="error">
                <?php if (isset($_GET['conConcernErr'])) {
                    echo $conConcernError = $_GET['conConcernErr'];
                } ?>
            </span>
        </label>
        <textarea name="conConcern" id="conConcern"
            placeholder="Type additional concern or specify your concern..."></textarea>


        <input type="submit" name="submit" id="submit" value="Next">
    </form>
</section>