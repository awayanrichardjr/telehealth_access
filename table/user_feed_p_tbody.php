<tr>
    <td>
        <a>
            <img src="../img/images/user.png" alt=""">
            <div>
            <h4 class=" feed_name">
            <?php echo $_SESSION['feed_name'] ?>
            <?php if ($row['feed_DocStatus'] == "Verified") { ?>
                <span class="material-symbols-outlined verified" style="font-size: 12px;">verified</span>
            <?php } else {
            } ?>
            </h4>
            <p class="feed_date"><?php echo $_SESSION['feed_Cdate'] ?></p>
            </div>
        </a>
        <div>
            <p class="user-sp-color"><?php echo $_SESSION['feed_post'] ?></p>
        </div>
    </td>
</tr>