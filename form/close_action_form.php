<section class="form medical">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>CONFIRMATION FORM</h1>
        <input type="text" name="medID" id="medID" value="<?php echo $_SESSION['conID'] ?>" readonly>
        <input type="text" name="medName" id="medName" value="<?php echo $_SESSION['conName'] ?>" readonly>
        <input type="text" name="medAddress" id="medAddress" value="<?php echo $_SESSION['conAddress'] ?>" readonly>
        <input type="date" name="medBdate" id="medBdate" value="<?php echo $_SESSION['conBdate'] ?>" readonly>
        <input type="text" name="medSelectedDoc" id="medSelectedDoc" value="<?php echo $_SESSION['conSelectedDoc'] ?>"
            readonly>
        <input type="text" name="medDocSpecialty" id="medDocSpecialty"
            value="<?php echo $_SESSION['conDocSpecialty'] ?>" readonly>
        <input type="text" name="medDiagnose" id="medDiagnose" value="<?php echo $_SESSION['conDiagnose'] ?>" readonly>
        <input type="text" name="medConcern" id="medConcern" value="<?php echo $_SESSION['conConcern'] ?>" readonly>
        <input type="text" name="medEmail" id="medEmail" value="<?php echo $_SESSION['conEmail'] ?>" readonly>
        <input type="text" name="medContact" id="medContact" value="<?php echo $_SESSION['conContact'] ?>" readonly>
        <input type="datetime" name="medCdate" id="medCdate" value="<?php echo $_SESSION['conCdate'] ?>" readonly>
        <input type="text" name="medADateTime" id="medADateTime" value="<?php echo $_SESSION['conADateTime'] ?>"
            readonly>

        <!-- confirm btn -->
        <input type="submit" name="submit" id="submit" value="Confirm">
    </form>
</section>