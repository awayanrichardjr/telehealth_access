<section class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Login as a patient</h1>
        <div>
            <label for="pEmail">E-mail
                <span class="error"><?php echo $pEmailErr ?></span>
            </label>
            <input type="email" name="pEmail" id="pEmail" placeholder="Enter E-mail">
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