<section class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label class="info-label">
            <h1 class="user-h1">Login as a patient</h1>
            <a href="#"><span class="material-symbols-outlined" style="font-size: 17px;">info</span></a>
        </label>
        <div>
            <label for="pUsername">Username
                <span class="error"><?php echo $pUsernameErr ?></span>
            </label>
            <input type="text" name="pUsername" id="pUsername" placeholder="Enter Username">
        </div>
        <div>
            <label for="pPass">Password
                <span class="error"><?php echo $pPassErr ?></span>
            </label>
            <input type="password" name="pPass" id="pPass" placeholder="Enter Password">
        </div>
        <input type="submit" name="submit" id="submit" value="Login">
        <p class="or">Click here to <a href="../public/reg_p.php">Register</a>.</p>
    </form>
</section>