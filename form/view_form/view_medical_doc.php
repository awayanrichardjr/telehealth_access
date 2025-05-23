<section class="view_appointment_doc">
    <form action="" class="paper">
        <!-- header  -->
        <header class="header">
            <img class="logo" src="../img/images/doctor.png" alt="img">
            <h1>TELEHEALTH ACCESS<br>MEDICAL INFORMATION</h1>
        </header>

        <!-- body  -->
        <ol class="body">
            <div class="container">
                <div>
                    <!-- <li>
                        <label for="medID">ID:</label>
                        <p><?php echo $_SESSION['medID'] ?></p>
                    </li> -->
                    <li>
                        <label for="medName">Name:</label>
                        <p><?php echo $_SESSION['medName'] ?></p>
                    </li>
                    <li>
                        <label for="medAddress">Address:</label>
                        <p><?php echo $_SESSION['medAddress'] ?></p>
                    </li>
                </div>
                <div class="details">
                    <li>
                        <label for="medBdate">Birthdate:</label>
                        <p><?php echo $_SESSION['medBdate'] ?></p>
                    </li>
                    <li>
                        <label for="medAge">Age:</label>
                        <p><?php echo $_SESSION['medAge'] ?></p>
                    </li>
                    <li>
                        <label for="medUsername">Username:</label>
                        <p><?php echo $_SESSION['medUsername'] ?></p>
                    </li>
                </div>
                <div class="details">
                    <li>
                        <label for="conContact">Contact Number:</label>
                        <p><?php echo $_SESSION['medContact'] ?></p>
                    </li>
                    <li>
                        <label for="conEmail">Email Address:</label>
                        <p><?php echo $_SESSION['medEmail'] ?></p>
                    </li>
                </div>
            </div>
            <hr>

            <!-- selected doc  -->
            <li>
                <label for="medSelectedDoc">Selected Doctor:</label>
                <p><?php echo $_SESSION['medSelectedDoc'] ?></p>
            </li>
            <div class="details">
                <li>
                    <label for="medDocSpecialty">Doctor's Specialty:</label>
                    <p><?php echo $_SESSION['medDocSpecialty'] ?></p>
                </li>

                <!-- complain  -->
                <li>
                    <label for="medDiagnose">Compliant:</label>
                    <p><?php echo $_SESSION['medDiagnose'] ?></p>
                </li>
            </div>

            <li class="li-concern">
                <label for="medConcern">Additional Concern:</label>
                <p><?php echo $_SESSION['medConcern'] ?></p>
            </li>
            <div class="details">
                <li>
                    <label for="medCdate">Created date:</label>
                    <p><?php echo $_SESSION['medCdate'] ?></p>
                </li>
                <li>
                    <label for="medADateTime">Closed Appointment Date/Time:</label>
                    <p><?php echo $_SESSION['medADateTime'] ?></p>
                </li>
            </div>
            <div class="details">
                <li>
                    <label for="medTreatment">Additional Treatment:</label>
                    <p><?php echo $_SESSION['medTreatment'] ?></p>
                </li>
            </div>
        </ol>
        <footer class="footer">
            <h2>TELEHEALTH ACCESS</h2>
        </footer>
    </form>
</section>