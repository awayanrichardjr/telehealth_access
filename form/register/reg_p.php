<section class="form">
    <label class="info-label">
        <h1 class="user-h1">Register as a patient</h1>
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
                <label for="pFname">First Name
                    <span class="error">
                        <?php if (isset($_GET['pFnameErr'])) {
                            echo $pFnameError = $_GET['pFnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pFname" id="pFname" placeholder="First Name">
            </div>
            <div>
                <label for="pMname">Middle Name
                    <span class="error">
                        <?php if (isset($_GET['pMnameErr'])) {
                            echo $pMnameError = $_GET['pMnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pMname" id="pMname" placeholder="Middle Name">
            </div>
            <div>
                <label for="pLname">Last Name
                    <span class="error">
                        <?php if (isset($_GET['pLnameErr'])) {
                            echo $pLnameError = $_GET['pLnameErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pLname" id="pLname" placeholder="Last Name">
            </div>
            <div>
                <label for="pSuffix">Suffix
                    <span class="error">
                        <?php if (isset($_GET['pSuffixErr'])) {
                            echo $pSuffixError = $_GET['pSuffixErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pSuffix" id="pSuffix" placeholder="Suffix">
            </div>
        </section>

        <!-- address  -->
        <div>
            <label for="pAddress">Address
                <span class="error">
                    <?php if (isset($_GET['pAddressErr'])) {
                        echo $pAddressError = $_GET['pAddressErr'];
                    } ?>
                </span>
            </label>
            <input type="text" name="pAddress" id="pAddress" placeholder="Current Place">
        </div>

        <!-- details  -->
        <section class="details">
            <div>
                <label for="pBdate">Birthdate
                    <span class="error">
                        <?php if (isset($_GET['pBdateErr'])) {
                            echo $pBdateError = $_GET['pBdateErr'];
                        } ?>
                    </span>
                </label>
                <input type="date" name="pBdate" id="pBdate" placeholder="Birthdate">
            </div>
            <div>
                <label for="pContact">Contact Number
                    <span class="error">
                        <?php if (isset($_GET['pContactErr'])) {
                            echo $pContactError = $_GET['pContactErr'];
                        } ?>
                    </span>
                </label>
                <input type="text" name="pContact" id="pContact" placeholder="Contact Number">
            </div>
        </section>

        <hr>
        <!-- duplicate Username error -->
        <span class="error">
            <?php
            if (isset($_GET['pUsernameTakenErr'])) {
                echo $pUsernameTakenError = $_GET['pUsernameTakenErr'];
            }
            ?>
        </span>
        <div>
            <label for="pUsername">Username
                <span class="error">
                    <?php if (isset($_GET['pUsernameErr'])) {
                        echo $pUsernameError = $_GET['pUsernameErr'];
                    } ?>
                </span>
            </label>
            <input type="text" name="pUsername" id="pUsername" placeholder="Username">
        </div>

        <!-- passwords error  -->
        <span style="text-align: center;">
            <?php if (isset($_GET['pPassNotMatch'])) {
                echo $pConfirmError = $_GET['pPassNotMatch'];
            } ?>
        </span>

        <div>
            <label for="pPass">Create Password
                <span class="error">
                    <?php if (isset($_GET['pPassErr'])) {
                        echo $pPassError = $_GET['pPassErr'];
                    } ?>
                </span>
            </label>
            <input type="password" name="pPass" id="pPass" placeholder="Create Password">
        </div>
        <div>
            <label for="pConfirm">Confirm Password
                <span class="error">
                    <?php if (isset($_GET['pConfirmErr'])) {
                        echo $pConfirmError = $_GET['pConfirmErr'];
                    } ?>
                </span>
            </label>
            <input type="password" name="pConfirm" id="pConfirm" placeholder="Confirm Password">
        </div>
        <input type="submit" name="submit" id="submit" value="Register">
        <p class="or">Click here to <a href="../public/log_p.php">Login</a>.</p>
    </form>
</section>