<label for="medDiagnose">Compliant *
    <span class="error">
        <?php if (isset($_GET['medDiagnoseErr'])) {
            echo $medDiagnoseError = $_GET['medDiagnoseErr'];
        } ?>
    </span>
</label>

<textarea name="medDiagnose" id="medDiagnose"><?php echo $row['medDiagnose'] ?></textarea>