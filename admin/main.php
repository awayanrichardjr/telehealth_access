<!-- main  -->
<main class="admin_main">

    <!-- navigation  -->
    <nav class="admin_main_nav">
        <ul class="links">
            <div class="links-container">
                <li class="profile">
                    <a href="../public/profile_admin.php">
                        <span class="material-symbols-outlined">account_circle</span>
                        <p><?php echo $_SESSION['adminFname'] . " " . $_SESSION['adminMname'] . " " . $_SESSION['adminLname'] . " " . $_SESSION['adminSuffix'] ?>
                        </p>
                    </a>
                </li>
            </div>
            <div class="links-container1">
                <!-- dropdown -->
                <li class="dropdown-links">
                    <a href="#">
                        <span class="material-symbols-outlined">dashboard</span>
                        <p>Dashboard</p>
                    </a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="../public/dashboard.php">
                                User summary
                            </a>
                        </li>
                        <li>
                            <a href="../public/specialties.php">
                                Specialist summary
                            </a>
                        </li>
                        <li>
                            <a href="../public/statistic.php">
                                Analytics
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- dropdown -->
                <div class="dropdown-links">
                    <div class="dropdown-menu">
                        <a href="#">
                            <span class="material-symbols-outlined">dropdown</span>
                            <p>Records</p>
                        </a>
                    </div>
                    <div class="dropdown-content">
                        <li>
                            <a href="../public/records_doc.php">
                                Doctors Records
                            </a>
                        </li>
                        <li>
                            <a href="../public/records_p.php">
                                Patients Records
                            </a>
                        </li>
                        <li>
                            <a href="../public/appointment_admin.php">
                                Appointment Records
                            </a>
                        </li>
                        <li>
                            <a href="../public/medical_admin.php">
                                Medical Records
                            </a>
                        </li>
                    </div>
                </div>

                <!-- settings  -->
                <li>
                    <a href="../public/settings_admin.php">
                        <span class="material-symbols-outlined">admin_panel_settings</span>
                        <p>Settings</p>
                    </a>
                </li>
            </div>
        </ul>
    </nav>
    <!-- </main> -->