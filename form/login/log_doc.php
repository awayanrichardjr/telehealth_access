<section class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label class="info-label">
            <h1 class="user-h1">Login as a doctor</h1>
            <a href="#"><span class="material-symbols-outlined" style="font-size: 17px;">info</span></a>
        </label>
        <div>
            <label for="docUsername">Username
                <span class="error"><?php echo $docUsernameErr ?></span>
            </label>
            <input type="text" name="docUsername" id="docUsername" placeholder="Enter Username">
        </div>
        <div>
            <label for="docPass">Password
                <span class="error"><?php echo $docPassErr ?></span>
            </label>
            <input type="password" name="docPass" id="docPass" placeholder="Enter Password">
        </div>
        <input type="submit" name="submit" id="submit" value="Login">
        <p class="or">Click here to <a href="../public/reg_doc.php">Register</a>.</p>
    </form>
</section>