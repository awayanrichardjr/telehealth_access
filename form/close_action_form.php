<section class="form medical">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Close Appointment</h1>
        <input type="hidden" name="medID" id="medID" value="<?php echo $_SESSION['conID'] ?>" readonly>
        <input type="hidden" name="medName" id="medName" value="<?php echo $_SESSION['conName'] ?>" readonly>
        <input type="hidden" name="medAddress" id="medAddress" value="<?php echo $_SESSION['conAddress'] ?>" readonly>
        <input type="hidden" name="medBdate" id="medBdate" value="<?php echo $_SESSION['conBdate'] ?>" readonly>
        <input type="hidden" name="medSelectedDoc" id="medSelectedDoc" value="<?php echo $_SESSION['conSelectedDoc'] ?>"
            readonly>
        <input type="hidden" name="medDocSpecialty" id="medDocSpecialty"
            value="<?php echo $_SESSION['conDocSpecialty'] ?>" readonly>
        <input type="hidden" name="medDiagnose" id="medDiagnose" value="<?php echo $_SESSION['conDiagnose'] ?>" readonly>
        <input type="hidden" name="medConcern" id="medConcern" value="<?php echo $_SESSION['conConcern'] ?>" readonly>
        <input type="hidden" name="medEmail" id="medEmail" value="<?php echo $_SESSION['conEmail'] ?>" readonly>
        <input type="hidden" name="medContact" id="medContact" value="<?php echo $_SESSION['conContact'] ?>" readonly>
        <input type="hidden" name="medCdate" id="medCdate" value="<?php echo $_SESSION['conCdate'] ?>" readonly>
        <input type="hidden" name="medADateTime" id="medADateTime" value="<?php
                                                                            date_default_timezone_set("Asia/Manila");
                                                                            echo date("M d, Y h:ia") ?>" readonly>
        <!-- confirm btn -->
        <input type="submit" name="submit" id="submit" value="Confirm">
    </form>
</section>