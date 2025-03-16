<section class="form consult">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>PAYMENT FORM</h1>

        <!-- full name -->
        <label for="conName">Patient Name *
            <span class="error">
                <?php if (isset($_GET['conNameErr'])) {
                    echo $conNameError = $_GET['conNameErr'];
                } ?>
            </span>
        </label>
        <input type="text" name="conName" id="conName" value="<?php echo $_SESSION['pFname'] . " " . $_SESSION['pMname'] . " " . $_SESSION['pLname'] . " " . $_SESSION['pSuffix'] ?>">

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
                <label for="conEmail">E-mail *
                    <span class="error">
                        <?php if (isset($_GET['conEmailErr'])) {
                            echo $conEmailError = $_GET['conEmailErr'];
                        } ?>
                    </span>
                </label>
                <input type="email" name="conEmail" id="conEmail" value="<?php echo $_SESSION['pEmail'] ?>">
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

        <hr>
        <section class="details">
            <!-- date/time  -->
            <div>
                <label for="conADateTime">Exp Year/Month *
                    <span class="error">
                        <?php if (isset($_GET['conADateTimeErr'])) {
                            echo $conADateTimeError = $_GET['conADateTimeErr'];
                        } ?>
                    </span>
                </label>
                <input type="month" name="conADateTime" id="conADateTime">
            </div>
        </section>

        <input type="hidden" name="conCdate" id="conCdate" value="<?php
                                                                    date_default_timezone_set("Asia/Manila");
                                                                    echo date("M-d-Y h:ia") ?>">


        <input type="submit" name="submit" id="submit" value="Send">
    </form>
</section>