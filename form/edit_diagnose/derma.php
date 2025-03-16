<label for="conDiagnose">Diagnosis *
    <span class="error">
        <?php if (isset($_GET['conDiagnoseErr'])) {
            echo $conDiagnoseError = $_GET['conDiagnoseErr'];
        } ?>
    </span>
</label>
<select name="conDiagnose" id="conDiagnose">
    <option value="<?php echo $_SESSION['conDiagnose'] ?>" style="color: grey;"><?php echo $_SESSION['conDiagnose'] ?></option>
    <option value="Skin">Skin</option>
    <option value="Hair">Hair</option>
    <option value="Nail">Nail</option>
</select>