<!-- <section class="admin_statistic">
    <div class="chart">
        <h1>Analytics</h1>

    </div>
</section> -->

<section class="admin_specialties">
    <div id="chartContainer" style="width: 900px;"></div>
    </div>
    <ul class="specialties">
        <li>
            <h2>
                <?php

                // $ran1 = random_int(1, 100);
                // $ran2 = random_int(1, 100);
                // $ran3 = random_int(1, 100);
                // $ran4 = random_int(1, 100);
                // $ran5 = random_int(1, 100);
                // $ran6 = random_int(1, 100);
                // $ran7 = random_int(1, 100);
                // $ran8 = random_int(1, 100);
                // $ran9 = random_int(1, 100);
                // $ran10 = random_int(1, 100);
                // $ran11 = random_int(1, 100);
                // $ran12 = random_int(1, 100);
                // $ran13 = random_int(1, 100);
                // $ran14 = random_int(1, 100);
                // $ran15 = random_int(1, 100);
                // $ran16 = random_int(1, 100);
                // $ran17 = random_int(1, 100);
                // $ran18 = random_int(1, 100);
                // $ran19 = random_int(1, 100);
                // $ran20 = random_int(1, 100);
                // $ran21 = random_int(1, 100);
                // $ran22 = random_int(1, 100);
                // $ran23 = random_int(1, 100);

                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Dermatologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($derma_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $derma_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $obste_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Obstetrician-Gynecologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($obste_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $obste_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $optha_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Ophthalmologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($optha_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $optha_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $allergy_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Allergist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($allergy_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $allergy_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $gastro_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Gastroenterologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($gastro_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $gastro_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $geria_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Geriatrician'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($geria_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $geria_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $infec_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Infectious Disease Specialist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($infec_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $infec_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $hema_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Hematologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($hema_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $hema_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $neuro_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Neurologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($neuro_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $neuro_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $cardio_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Cardiologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($cardio_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $cardio_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $pedia_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Pediatrician'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($pedia_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $pedia_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $endo_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Endocrinologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($endo_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $endo_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $radio_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Radiologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($radio_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $radio_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $nephro_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Nephrologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($nephro_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $nephro_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $otorhi_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Otorhinolaryngologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($otorhi_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $otorhi_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $podia_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Podiatrist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($podia_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $podia_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $fam_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Family Medicine Doctor'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($fam_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $fam_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $psych_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Psychiatrist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($psych_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $psych_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $emp_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Emergency Medicine Physician'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($emp_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $emp_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $anes_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Anesthesiologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($anes_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $anes_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $gene_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='General Surgeon'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($gene_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $gene_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $patho_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Pathologist'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($patho_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $patho_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
                // $surgeon_total = 1;
                $num_of_doc = "SELECT * from medical WHERE medDocSpecialty='Surgeon'";
                $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                if ($surgeon_total = mysqli_num_rows($num_of_doc_run)) {
                    echo $surgeon_total / 100 . "%";
                } else {
                    echo 0 . "%";
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
<?php include 'chart/statistic_data.php' ?>
<?php include 'chart/statistic_script.php' ?>

<!-- </div>
</section> -->