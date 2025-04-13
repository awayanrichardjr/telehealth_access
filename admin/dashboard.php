<section class="admin_dashboard">
    <div class="container">
        <div class="users-container">
            <label for="">Total:</label>
            <ul>
                <li class="num-doctor">
                    <h2>
                        <?php
                        // $ran = random_int(1, 999999);  + $ran 
                        // $ran1 = random_int(1, 999999);  + $ran1 
                        // $ran2 = random_int(1, 999999);  + $ran2 
                        
                        $num_of_doc = "SELECT * from doctor";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($doc_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $doc_total . "+";
                        } else {
                            echo 0 . "+";
                        }
                        ?>
                        <span class="material-symbols-outlined" style="opacity: 40%;">
                            bar_chart_4_bars
                        </span>
                    </h2>
                    <p>Doctors</p>
                </li>
                <li class="num-patient">
                    <h2>
                        <?php
                        $num_of_doc = "SELECT * from patient";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($p_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $p_total . "+";
                        } else {
                            echo 0 . "+";
                        }
                        ?>
                        <span class="material-symbols-outlined" style="opacity: 40%;">
                            bar_chart_4_bars
                        </span>
                    </h2>
                    <p>Patients</p>
                </li>
                <li class="num-appointment">
                    <h2>
                        <?php
                        $num_of_doc = "SELECT * from consult";
                        $num_of_doc_run = mysqli_query($conn, $num_of_doc);
                        if ($con_total = mysqli_num_rows($num_of_doc_run)) {
                            echo $con_total . "+";
                        } else {
                            echo 0 . "+";
                        }
                        ?>
                        <span class="material-symbols-outlined" style="opacity: 40%;">
                            bar_chart_4_bars
                        </span>
                    </h2>
                    <p>Appointment</p>
                </li>
            </ul>
        </div>
        <div id="chartContainer" style="aspect-ratio: 3/2; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </div>
</section>
<?php include 'chart/dashboard_data.php' ?>
<?php include 'chart/dashboard_script.php' ?>