<section class="form form_edit">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>PATIENT INFORMATION</h1>
        <input type="hidden" name="pID" id="pID" value="<?php echo $selected_pID ?>">

        <!-- fullname  -->
        <section class="details">
            <div>
                <label for="pFname">First Name
                    <span class="error">
                        <?php if (isset($_GET['pFnameErr'])) {
                            echo $pFnameErr = $_GET['pFnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pFname" id="pFname" value="<?php echo $row['pFname'] ?>">
            </div>
            <div>
                <label for="pMname">Middle Name
                    <span class="error">
                        <?php if (isset($_GET['pMnameErr'])) {
                            echo $pMnameErr = $_GET['pMnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pMname" id="pMname" value="<?php echo $row['pMname'] ?>">
            </div>
            <div>
                <label for="pLname">Last Name
                    <span class="error">
                        <?php if (isset($_GET['pLname'])) {
                            echo $pLnameErr = $_GET['pLname'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pLname" id="pLname" value="<?php echo $row['pLname'] ?>">
            </div>
            <div>
                <label for="pSuffix">Suffix
                </label>
                <input type="text" name="pSuffix" id="pSuffix" value="<?php echo $row['pSuffix'] ?>">
            </div>
        </section>

        <div>
            <label for="pAddress">Address
                <span class="error">
                    <?php if (isset($_GET['pAddress'])) {
                        echo $pAddressErr = $_GET['pAddress'];
                    } ?>
                </span>
            </label>
            <input type="text" name="pAddress" id="pAddress" value="<?php echo $row['pAddress'] ?>">
        </div>

        <section class="details">
            <div>
                <label for="pBdate">Birthdate
                    <span class="error">
                        <?php if (isset($_GET['pBdate'])) {
                            echo $pBdateErr = $_GET['pBdate'];
                        } ?>
                    </span>
                </label>
                <input type="date" name="pBdate" id="pBdate" value="<?php echo $row['pBdate'] ?>">
            </div>
            <div>
                <label for="pContact">Contact Number
                    <span class="error">
                        <?php if (isset($_GET['pContact'])) {
                            echo $pContactErr = $_GET['pContact'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pContact" id="pContact" value="<?php echo $row['pContact'] ?>">
            </div>
        </section>

        <div>
            <label for="pUsername">Username
                <span class="error">
                    <?php if (isset($_GET['pUsername'])) {
                        echo $pUsernameErr = $_GET['pUsername'];
                    } ?>
                </span>
            </label>
            <input type="text" name="pUsername" id="pUsername" value="<?php echo $row['pUsername'] ?>">
        </div>
        <div>
            <input type="hidden" name="pModified" id="pModified" value="<?php
                                                                        date_default_timezone_set("Asia/Manila");
                                                                        echo date("M-d-Y h:ia") ?>">
        </div>
        <input type="submit" name="submit" id="submit" value="Save">
    </form>
</section>