<label for="conDiagnose">Compliant *
    <span class="error">
        <?php if (isset($_GET['conDiagnoseErr'])) {
            echo $conDiagnoseError = $_GET['conDiagnoseErr'];
        } ?>
    </span>
</label>
<textarea name="conDiagnose" id="conDiagnose" placeholder="Type your Complains..."></textarea>