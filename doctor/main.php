<main class="main_doc">
    <nav class="main_nav_doc">
        <ul class="links">
            <li class="pfp">
                <a href="../public/profile_doc.php">
                    <span class="material-symbols-outlined">account_circle</span>
                    <p>
                        <!-- full name -->
                        <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
                    </p>
                </a>
            </li>
        </ul>
        <ul class="links">
            <li>
                <a href="../public/main_doc.php">
                    <span class="material-symbols-outlined">home</span>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="../public/appointment_profile_doc.php">
                    <span class="material-symbols-outlined">schedule</span>
                    <p>Appointments</p>
                </a>
            </li>
            <!-- <li>
                <a href="../public/messages_doc.php">
                    <span class="material-symbols-outlined">chat</span>
                    <p>Messages</p>
                </a>
            </li> -->
            <li>
                <a href="../public/settings_doc.php">
                    <span class="material-symbols-outlined">settings</span>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </nav>
    <section class="user_main_body">

        <!-- </section>
    </main> -->