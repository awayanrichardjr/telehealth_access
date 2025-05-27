<main class="main_p">
    <nav class="main_nav_p">
        <ul class="links">
            <li class="pfp">
                <a href="../public/profile_p.php">
                    <span class="material-symbols-outlined">account_circle</span>
                    <p>
                        <!-- full name -->
                        <?php echo $_SESSION['pFname'] . " " . $_SESSION['pMname'] . " " . $_SESSION['pLname'] . " " . $_SESSION['pSuffix'] ?>
                    </p>
                </a>
            </li>
        </ul>
        <ul class="links">
            <li>
                <a href="../public/main_p_feed.php">
                    <span class="material-symbols-outlined">home</span>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="../public/main_p_specialists.php">
                    <span class="material-symbols-outlined">home_health</span>
                    <p>Specialists</p>
                </a>
            </li>
            <li>
                <a href="../public/appointment_profile_p.php">
                    <span class="material-symbols-outlined">schedule</span>
                    <p>Appointments</p>
                </a>
            </li>
            <li>
                <a href="../public/settings_p.php">
                    <span class="material-symbols-outlined">settings</span>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </nav>
    <section class="user_main_body">

        <!-- </section>
    </main> -->