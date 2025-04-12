<section class="form form_edit">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <h1>USER VERIFICATION FORM</h1>
        <p style="color: grey;">ID: <?php echo $selected_docID ?></p>
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

            <!-- E-MAIL -->
            <div>
                <label for="docEmail">E-mail</label>
                <span class="error">
                    <?php if (isset($_GET['docEmailErr'])) {
                        echo $docFnameErr = $_GET['docEmailErr'];
                    } ?>
                </span>
                <input type="email" name="docEmail" id="docEmail" value="<?php echo $row['docEmail'] ?>">
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

        <!-- submit btn  -->
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
</section>