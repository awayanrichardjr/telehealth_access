<section class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Login as a doctor</h1>
        <div>
            <label for="docEmail">E-mail
                <span class="error"><?php echo $docEmailErr ?></span>
            </label>
            <input type="email" name="docEmail" id="docEmail" placeholder="Enter E-mail">
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