<section class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1 class="title-reg">
            <span class="material-symbols-outlined" style="font-size: 30px; color: var(--blue);">admin_meds</span>
            CREATE ACCOUNT
        </h1>
        <!-- fullname  -->
        <section class="details">
            <div>
                <label for="adminFname">First Name
                    <span class="error">
                        <?php if (isset($_GET['adminFnameErr'])) {
                            echo $adminFnameError = $_GET['adminFnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="adminFname" id="adminFname" placeholder="First Name">
            </div>
            <div>
                <label for="adminMname">Middle Name
                    <span class="error">
                        <?php if (isset($_GET['adminMnameErr'])) {
                            echo $adminMnameError = $_GET['adminMnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="adminMname" id="adminMname" placeholder="Middle Name">
            </div>
            <div>
                <label for="adminLname">Last Name
                    <span class="error">
                        <?php if (isset($_GET['adminLnameErr'])) {
                            echo $adminLnameError = $_GET['adminLnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="adminLname" id="adminLname" placeholder="Last Name">
            </div>
            <div>
                <label for="adminSuffix">Suffix
                    <span class="error">
                        <?php if (isset($_GET['adminSuffixErr'])) {
                            echo $adminSuffixError = $_GET['adminSuffixErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="adminSuffix" id="adminSuffix" placeholder="Suffix">
            </div>
        </section>
        <!-- address  -->
        <div>
            <label for="adminAddress">Address
                <span class="error">
                    <?php if (isset($_GET['adminAddressErr'])) {
                        echo $adminAddressError = $_GET['adminAddressErr'];
                    } ?>
                </span>
            </label>
            <input type="text" name="adminAddress" id="adminAddress" placeholder="Current Place">
        </div>
        <!-- details  -->
        <section class="details">
            <div>
                <label for="adminBdate">Birthdate
                    <span class="error">
                        <?php if (isset($_GET['adminBdateErr'])) {
                            echo $adminBdateError = $_GET['adminBdateErr'];
                        } ?>
                    </span>
                </label>
                <input type="date" name="adminBdate" id="adminBdate" placeholder="Birthdate">
            </div>
            <div>
                <label for="adminContact">Contact Number
                    <span class="error">
                        <?php if (isset($_GET['adminContactErr'])) {
                            echo $adminContactError = $_GET['adminContactErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="adminContact" id="adminContact" placeholder="Contact Number">
            </div>
        </section>
        <hr>
        <!-- duplicate e-mail error -->
        <span class="error">
            <?php if (isset($_GET['adminEmailTakenErr'])) {
                echo $adminEmailTakenError = $_GET['adminEmailTakenErr'];
            } ?>
        </span>
        <div>
            <label for="adminEmail">E-mail
                <span class="error">
                    <?php if (isset($_GET['adminEmailErr'])) {
                        echo $adminEmailError = $_GET['adminEmailErr'];
                    } ?>
                </span>
            </label>
            <input type="email" name="adminEmail" id="adminEmail" placeholder="E-mail">
        </div>

        <!-- passwords error  -->
        <span class="error">
            <?php if (isset($_GET['adminPassNotMatch'])) {
                echo $adminConfirmError = $_GET['adminPassNotMatch'];
            } ?>
        </span>
        <div>
            <label for="adminPass">Create Password
                <span class="error">
                    <?php if (isset($_GET['adminPassErr'])) {
                        echo $adminPassError = $_GET['adminPassErr'];
                    } ?>
                </span>
            </label>
            <input type="password" name="adminPass" id="adminPass" placeholder="Create Password">
        </div>
        <div>
            <label for="adminConfirm">Confirm Password
                <span class="error">
                    <?php if (isset($_GET['adminConfirmErr'])) {
                        echo $adminConfirmError = $_GET['adminConfirmErr'];
                    } ?>
                </span>
            </label>
            <input type="password" name="adminConfirm" id="adminConfirm" placeholder="Confirm Password">
        </div>

        <!-- register btn  -->
        <input type="submit" name="submit" id="submit" value="Register">
        <p class="or">Click here to <a href="../public/log_admin.php">Login</a>.</p>
    </form>
</section>