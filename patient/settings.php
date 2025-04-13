<section class="settings_p">
    <ul>
        <h1>Settings</h1>
        <li>
            <a href="#">
                <!-- <span class="material-symbols-outlined">tag</span> -->
                ID:
                <?php echo $_SESSION['pID'] ?>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="../public/delete_acc_p.php?pID=<?php echo $_SESSION['pID'] ?>">
                <span class="material-symbols-outlined" style="font-size: 17px;">delete</span>
                Delete Account
            </a>
        </li>
        <li class="logout">
            <a href="../public/logout_p.php">
                <span class="material-symbols-outlined" style="font-size: 17px;">logout</span>
                Logout
            </a>
        </li>
    </ul>
</section>