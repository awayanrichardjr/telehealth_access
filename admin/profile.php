<section class="admin_profile">
    <div>
        <img src="../img/images/user.png" alt="img" class="pfp">
        <h2><?php echo $_SESSION['adminFname'] . " " . $_SESSION['adminMname'] . " " . $_SESSION['adminLname'] . " " . $_SESSION['adminSuffix'] ?>
        </h2>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">location_on</span>
            <?php echo $_SESSION['adminAddress'] ?>
        </p>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">cake</span>
            <?php echo $_SESSION['adminBdate'] ?>
        </p>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">contact_phone</span>
            <?php echo $_SESSION['adminContact'] ?>
        </p>
        <p class="details">
            <span class="material-symbols-outlined" style="font-size: 17px;">contact_mail</span>
            <?php echo $_SESSION['adminUsername'] ?>
        </p>
    </div>
</section>