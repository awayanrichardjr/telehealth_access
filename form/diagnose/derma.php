<label for="conDiagnose">Diagnosis *
    <span class="error">
        <?php if (isset($_GET['conDiagnoseErr'])) {
            echo $conDiagnoseError = $_GET['conDiagnoseErr'];
        } ?>
    </span>
</label>
<select name="conDiagnose" id="conDiagnose">
    <option value="" style="color: grey;">Select diagnosis:</option>
    <option value="Skin">Skin</option>
    <option value="Hair">Hair</option>
    <option value="Nail">Nail</option>
</select>