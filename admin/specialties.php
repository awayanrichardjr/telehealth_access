<section class="admin_specialties">
    <div id="chartContainer">
    </div>
    <ul class="specialties">
        <li>
            <h2>
                <?php
                $ran1 = random_int(1, 100);
                $ran2 = random_int(1, 100);
                $ran3 = random_int(1, 100);
                $ran4 = random_int(1, 100);
                $ran5 = random_int(1, 100);
                $ran6 = random_int(1, 100);
                $ran7 = random_int(1, 100);
                $ran8 = random_int(1, 100);
                $ran9 = random_int(1, 100);
                $ran10 = random_int(1, 100);
                $ran11 = random_int(1, 100);
                $ran12 = random_int(1, 100);
                $ran13 = random_int(1, 100);
                $ran14 = random_int(1, 100);
                $ran15 = random_int(1, 100);
                $ran16 = random_int(1, 100);
                $ran17 = random_int(1, 100);
                $ran18 = random_int(1, 100);
                $ran19 = random_int(1, 100);
                $ran20 = random_int(1, 100);
                $ran21 = random_int(1, 100);
                $ran22 = random_int(1, 100);
                $ran23 = random_int(1, 100);

                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Dermatologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($derma_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $derma_total + $ran1 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Dermatologist</p>
        </li>
        <li>
            <h2>
                <?php
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Obstetrician-Gynecologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($obste_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $obste_total + $ran2 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Obstetrician-Gynecologist</p>
        </li>
        <li>
            <h2>
                <?php
                $optha_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Ophthalmologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($optha_total == true) {
                    echo $optha_total + $ran3 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Ophthalmologist</p>
        </li>
        <li>
            <h2>
                <?php
                $allergy_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Allergist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($allergy_total == true) {
                    echo $allergy_total + $ran4 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Allergist</p>
        </li>
        <li>
            <h2>
                <?php
                $gastro_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Gastroenterologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($gastro_total == true) {
                    echo $gastro_total + $ran5 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Gastroenterologist</p>
        </li>
        <li>
            <h2>
                <?php
                $geria_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Geriatrician'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($geria_total == true) {
                    echo $geria_total + $ran6 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Geriatrician</p>
        </li>
        <li>
            <h2>
                <?php
                $infec_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Infectious Disease Specialist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($infec_total == true) {
                    echo $infec_total + $ran7 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Infectious Disease Specialist</p>
        </li>
        <li>
            <h2>
                <?php
                $hema_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Hematologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($hema_total == true) {
                    echo $hema_total + $ran8 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Hematologist</p>
        </li>
        <li>
            <h2>
                <?php
                $neuro_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Neurologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($neuro_total == true) {
                    echo $neuro_total + $ran9 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Neurologist</p>
        </li>
        <li>
            <h2>
                <?php
                $cardio_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Cardiologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($cardio_total == true) {
                    echo $cardio_total + $ran10 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Cardiologist</p>
        </li>
        <li>
            <h2>
                <?php
                $pedia_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Pediatrician'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($pedia_total == true) {
                    echo $pedia_total + $ran11 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Pediatrician</p>
        </li>
        <li>
            <h2>
                <?php
                $endo_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Endocrinologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($endo_total == true) {
                    echo $endo_total + $ran12 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Endocrinologist</p>
        </li>
        <li>
            <h2>
                <?php
                $radio_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Radiologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($radio_total == true) {
                    echo $radio_total + $ran13 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Radiologist</p>
        </li>
        <li>
            <h2>
                <?php
                $nephro_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Nephrologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($nephro_total == true) {
                    echo $nephro_total + $ran14 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Nephrologist</p>
        </li>
        <li>
            <h2>
                <?php
                $otorhi_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Otorhinolaryngologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($otorhi_total == true) {
                    echo $otorhi_total + $ran15 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Otorhinolaryngologist</p>
        </li>
        <li>
            <h2>
                <?php
                $podia_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Podiatrist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($podia_total == true) {
                    echo $podia_total + $ran16 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Podiatrist</p>
        </li>
        <li>
            <h2>
                <?php
                $fam_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Family Medicine Doctor'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($fam_total == true) {
                    echo $fam_total + $ran17 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Family Medicine Doctor</p>
        </li>
        <li>
            <h2>
                <?php
                $psych_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Psychiatrist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($psych_total == true) {
                    echo $psych_total + $ran18 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Psychiatrist</p>
        </li>
        <li>
            <h2>
                <?php
                $emp_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Emergency Medicine Physician'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($emp_total == true) {
                    echo $emp_total + $ran19 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Emergency Medicine Physician</p>
        </li>
        <li>
            <h2>
                <?php
                $anes_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Anesthesiologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($anes_total == true) {
                    echo $anes_total + $ran20 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Anesthesiologist</p>
        </li>
        <li>
            <h2>
                <?php
                $gene_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='General Surgeon'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($gene_total == true) {
                    echo $gene_total + $ran21 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>General Surgeon</p>
        </li>
        <li>
            <h2>
                <?php
                $patho_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Pathologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($patho_total == true) {
                    echo $patho_total + $ran22 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Pathologist</p>
        </li>
        <li>
            <h2>
                <?php
                $surgeon_total = 1;
                $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Surgeon'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($surgeon_total == true) {
                    echo $surgeon_total + $ran23 . "+";
                } else {
                    echo 0 . "+";
                }
                ?>
                <span class="material-symbols-outlined" style="opacity: 20%;">
                    bar_chart_4_bars
                </span>
            </h2>
            <p>Surgeon</p>
        </li>
    </ul>
</section>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<?php include 'chart/specialties_data.php' ?>
<?php include 'chart/specialties_script.php' ?>