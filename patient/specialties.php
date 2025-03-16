<div class="user_home">
    <section class="specialties_p">
        <h1>Specialties</h1>
        <ul class="container">
            <li class="view_all">
                <a href="../specialists/all_specialists.php">
                    View All Specialists
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor ORDER BY docSpecialty";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
        </ul>
        <ul class="container-1">
            <li>
                <a href="../specialists/derma.php">
                    <img src="../img/images/dermatologist.png" alt="">
                    Dermatologist
                    <p class="sp-description poppins-bold">Consult for skin, hair, and nail concerns online.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Dermatologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/obsgyn.php">
                    <img src="../img/images/obgyn.png" alt="">
                    Obstetrician-Gynecologist
                    <p class="sp-description poppins-bold">Discuss women's reproductive health, pregnancy, and related
                        issues remotely.
                    </p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Obstetrician-Gynecologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/optha.php">
                    <img src="../img/images/ophthalmology.png" alt="">
                    Ophthalmologist
                    <p class="sp-description poppins-bold">Get advice on eye health and vision problems online.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Ophthalmologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/allergist.php">
                    <img src="../img/images/allergist.png" alt="">
                    Allergist
                    <p class="sp-description poppins-bold">Consult on allergies and immune system issues without leaving
                        home.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Allergist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/gastro.php">
                    <img src="../img/images/gastroenterologist.png" alt="">
                    Gastroenterologist
                    <p class="sp-description poppins-bold">Address digestive system concerns through online
                        consultation.
                    </p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Gastroenterologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/geria.php">
                    <img src="../img/images/nurse.png" alt="">
                    Geriatrician
                    <p class="sp-description poppins-bold">Specialized care for elderly patients through virtual
                        appointments.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Geriatrician'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/infect.php">
                    <img src="../img/images/disease.png" alt="">
                    Infectious Disease Specialist
                    <p class="sp-description poppins-bold">Seek expert advice on infections and diseases via
                        telemedicine.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Infectious Disease Specialist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/hema.php">
                    <img src="../img/images/hematology.png" alt="">
                    Hematologist
                    <p class="sp-description poppins-bold">Online consultations for blood-related health issues.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Hematologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/neuro.php">
                    <img src="../img/images/neurologist.png" alt="">
                    Neurologist
                    <p class="sp-description poppins-bold">Consult about brain, spine, and nervous system disorders
                        online.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Neurologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/cardio.php">
                    <img src="../img/images/cardiologist.png" alt="">
                    Cardiologist
                    <p class="sp-description poppins-bold">Virtual care for heart and blood vessel health.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Cardiologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/pedia.php">
                    <img src="../img/images/pediatrician.png" alt="">
                    Pediatrician
                    <p class="sp-description poppins-bold">Online healthcare for children and adolescents.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Pediatrician'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/endo.php">
                    <img src="../img/images/endocrinologist.png" alt="">
                    Endocrinologist
                    <p class="sp-description poppins-bold">Virtual consultation for hormone and gland-related disorders.
                    </p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Endocrinologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/radio.php">
                    <img src="../img/images/radiologist.png" alt="">
                    Radiologist
                    <p class="sp-description poppins-bold">Online interpretation of imaging results like X-rays and CT
                        scans.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Radiologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/nephro.php">
                    <img src="../img/images/nephrologist.png" alt="">
                    Nephrologist
                    <p class="sp-description poppins-bold">Consult about kidney health remotely.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Nephrologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/otorhino.php">
                    <img src="../img/images/ear.png" alt="">
                    Otorhinolaryngologist
                    <p class="sp-description poppins-bold">Online advice for ear, nose, and throat issues.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Otorhinolaryngologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/podia.php">
                    <img src="../img/images/podiatrist.png" alt="">
                    Podiatrist
                    <p class="sp-description poppins-bold">Discuss foot and lower limb health through online
                        consultations.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Podiatrist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/fmd.php">
                    <img src="../img/images/house.png" alt="">
                    Family Medicine Doctor
                    <p class="sp-description poppins-bold">Comprehensive online care for inuliduals and families.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Family Medicine Doctor'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/psych.php">
                    <img src="../img/images/psychiatrist.png" alt="">
                    Psychiatrist
                    <p class="sp-description poppins-bold">Remote consultation for mental health conditions and
                        treatments.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Psychiatrist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/emp.php">
                    <img src="../img/images/medical.png" alt="">
                    Emergency Medicine Physician
                    <p class="sp-description poppins-bold">Immediate online advice for urgent medical conditions.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Emergency Medicine Physician'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/anes.php">
                    <img src="../img/images/anesthesiology.png" alt="">
                    Anesthesiologist
                    <p class="sp-description poppins-bold">Consult about pain management and anesthesia planning
                        virtually.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Anesthesiologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/gensur.php">
                    <img src="../img/images/general sergeon.png" alt="">
                    General Surgeon
                    <p class="sp-description poppins-bold">Online consultations about surgical treatments and
                        procedures.
                    </p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='General Surgeon'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/patho.php">
                    <img src="../img/images/pathologist.png" alt="">
                    Pathologist
                    <p class="sp-description poppins-bold">Remote reviews and advice based on test results and medical
                        samples.</p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Pathologist'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
            <li>
                <a href="../specialists/surgeon.php">
                    <img src="../img/images/surgeon.png" alt="">
                    Surgeon
                    <p class="sp-description poppins-bold">Virtual discussions for potential surgeries and procedures.
                    </p>
                    <p class="num_of_sp">
                        <?php
                        $num_of_doc = "SELECT * from doctor WHERE docSpecialty='Surgeon'";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+ doctors";
                        } else {
                            echo 0 . "+ doctors";
                        }
                        ?>
                    </p>
                </a>
            </li>
        </ul>
    </section>