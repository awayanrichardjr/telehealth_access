<section class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <span class="material-symbols-outlined log-icon"
            style="font-size: 100px; color: var(--blue); text-align:center; width:100%;">admin_meds</span>
        <h1>ADMIN TELEHEALTH MANAGEMENT</h1>
        <!-- <h1>Login</h1> -->
        <div>
            <label for="adminUsername">E-mail
                <span class="error"><?php echo $adminUsernameErr ?></span>
            </label>
            <input type="text" name="adminUsername" id="adminUsername" placeholder="Enter E-mail">
        </div>
        <div>
            <label for="adminPass">Password
                <span class="error"><?php echo $adminPassErr ?></span>
            </label>
            <input type="password" name="adminPass" id="adminPass" placeholder="Enter Password">
        </div>
        <input type="submit" name="submit" id="submit" value="Login">
        <p class="or">Click here to <a href="../public/reg_admin.php">Register</a>.</p>
    </form>
</section>