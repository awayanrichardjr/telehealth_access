<section class="settings_doc">
    <h1>Settings</h1>
    <ul>
        <li>
            <a href="https://www.paypal.com/myaccount/activities" onclick="window.open(this.href, 'PopupWindow'); return false;">
                <span class="material-symbols-outlined">payment</span>
                Paypal Activity
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