<section class="profile_p">
    <div class="container">
        <img src="../img/images/user.png" alt="img">
        <h2 class="profile_name">
            <?php echo $_SESSION['pFname'] . " " . $_SESSION['pMname'] . " " . $_SESSION['pLname'] . " " . $_SESSION['pSuffix'] ?>
        </h2>
        <ul class="details">
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">location_on</span>
                <?php echo $_SESSION['pAddress'] ?>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">cake</span>
                <?php echo $_SESSION['pBdate'] ?>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">contact_phone</span>
                <?php echo $_SESSION['pContact'] ?>
            </li>
            <li>
                <span class="material-symbols-outlined" style="font-size: 17px;">contact_mail</span>
                <?php echo $_SESSION['pUsername'] ?>
            </li>
        </ul>
    </div>
</section>