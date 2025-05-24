<section class="form">
    <label class="info-label">
        <h1 class="user-h1">Login as a doctor</h1>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <h1>Doctor Login</h1>
            <p>To access your doctor account, please enter your <b>unsername</b> and <b>password</b> you registered. This will allow you to manage appointments, conduct online consultations, and view patient records securely.</p>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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