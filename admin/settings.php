<section class="admin_settings">
    <ul>
        <h1>Settings</h1>
        <li>
            <a href="#">
                ID:
                <?php echo $_SESSION['adminID'] ?>
            </a>
        </li>
        <li>
            <a href="../public/delete_acc_admin.php?adminID=<?php echo $_SESSION['adminID'] ?>">
                <span class="material-symbols-outlined">delete</span>
                Delete Admin Account
            </a>
        </li>
        <li class="logout">
            <a href="../public/logout_admin.php">
                <span class="material-symbols-outlined">logout</span>
                Logout
            </a>
        </li>
    </ul>
</section>