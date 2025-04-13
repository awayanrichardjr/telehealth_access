<section class="settings_doc">
    <h1>Settings</h1>
    <ul>
        <li>
            <a href="#">
                <!-- <span class="material-symbols-outlined">tag</span> -->
                ID:
                <?php echo $_SESSION['docID'] ?>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
        </li>
        <li>
            <a href="../public/delete_acc_doc.php?docID=<?php echo $_SESSION['docID'] ?>">
                <span class="material-symbols-outlined">delete</span>
                Delete Account
            </a>
        </li>
        <li class="logout">
            <a href="../public/logout_doc.php">
                <span class="material-symbols-outlined">logout</span>
                Logout
            </a>
        </li>
    </ul>
</section>