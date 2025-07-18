<section class="view_appointment_p">
    <form action="" class="paper">
        <header class="header">
            <img class="logo" src="../img/images/doctor.png" alt="img">
            <h1>TELEHEALTH ACCESS<br>APPOINTMENT</h1>
        </header>
        <ol class="body">
            <div class="container">
                <div>
                    <!-- <li>
                        <label for="conID">ID:</label>
                        <p><?php echo $_SESSION['conID'] ?></p>
                    </li> -->
                    <li>
                        <label for="conName">Name:</label>
                        <p><?php echo $_SESSION['conName'] ?></p>
                    </li>
                    <li>
                        <label for="conAddress">Address:</label>
                        <p><?php echo $_SESSION['conAddress'] ?></p>
                    </li>
                </div>
                <div class="details">
                    <li>
                        <label for="conBdate">Birthdate:</label>
                        <p><?php echo $_SESSION['conBdate'] ?></p>
                    </li>
                    <li>
                        <label for="conAge">Age:</label>
                        <p><?php echo $_SESSION['conAge'] ?></p>
                    </li>
                    <li>
                        <label for="conUsername">Username:</label>
                        <p><?php echo $_SESSION['conUsername'] ?></p>
                    </li>
                </div>
                <div class="details">
                    <li>
                        <label for="conContact">Contact Number:</label>
                        <p><?php echo $_SESSION['conContact'] ?></p>
                    </li>
                    <li>
                        <label for="conEmail">E-mail Address:</label>
                        <p><?php echo $_SESSION['conEmail'] ?></p>
                    </li>
                </div>
            </div>
            <hr>

            <!-- selected doc  -->
            <li>
                <label for="conSelectedDoc">Selected Doctor:</label>
                <p><?php echo $_SESSION['conSelectedDoc'] ?></p>
            </li>
            <div class="details">
                <li>
                    <label for="conDocSpecialty">Doctor's Specialty:</label>
                    <p><?php echo $_SESSION['conDocSpecialty'] ?></p>
                </li>

                <!-- complain  -->
                <li>
                    <label for="conDiagnose">Compliant:</label>
                    <p><?php echo $_SESSION['conDiagnose'] ?></p>
                </li>
            </div>

            <li class="li-concern">
                <label for="conConcern">Additional concern:</label>
                <p><?php echo $_SESSION['conConcern'] ?></p>
            </li>
            <div class="details">
                <li>
                    <label for="conCdate">Created date:</label>
                    <p><?php echo $_SESSION['conCdate'] ?></p>
                </li>
                <li>
                    <label for="conDate">Appointment Date:</label>
                    <p><?php echo $_SESSION['conDate'] ?></p>
                </li>
                <li>
                    <label for="conTime">Appointment Time:</label>
                    <p><?php echo $_SESSION['conTime'] ?></p>
                </li>
            </div>
        </ol>
        <footer class="footer">
            <h2>TELEHEALTH ACCESS</h2>
        </footer>
    </form>
</section>