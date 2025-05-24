<section class="form">
    <label class="info-label">
        <h1 class="user-h1">Login as a patient</h1>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <h1>Patient Login</h1>
            <p>To access your patient account, please enter the <b>username</b> and <b>password</b> you used during registration. This will allow you to book appointments, consult with doctors online, and view your medical records securely.</p>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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