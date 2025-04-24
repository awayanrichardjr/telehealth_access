<form <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form user_feed_form"
    style="height: auto;">
    <img src="../img/images/user.png" alt="profile" style="width: 40px; border-radius: 50%;">

    <!-- name -->
    <input type="hidden" name="feed_name" id="feed_name"
        value="<?php echo $_SESSION['pFname'] . " " . $_SESSION['pMname'] . " " . $_SESSION['pLname'] . " " . $_SESSION['pSuffix'] ?>"
        readonly>

    <!-- post -->
    <textarea name="feed_post" id="feed_post" placeholder="Whats on your mind!"></textarea>

    <!-- date created -->
    <input type="hidden" name="feed_Cdate" id="feed_Cdate" value="<?php
    date_default_timezone_set("Asia/Manila");
    echo date("M-d-Y h:ia") ?>">

    <!-- submit btn -->
    <input type="submit" name="submit" id="submit" value="Post">
</form>