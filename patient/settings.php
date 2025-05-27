<section class="settings_p">
    <ul>
        <h1>Settings</h1>
        <li>
            <a href="https://www.paypal.com/myaccount/activities" onclick="window.open(this.href, 'PopupWindow'); return false;" class="consult-doc-link">
                <span class="material-symbols-outlined" style="font-size: 17px;">payment</span>
                Paypal Activity
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