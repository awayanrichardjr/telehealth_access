<tr>
    <td>
        <a href="../public/selected_profile.php?docID=<?php echo $row['docID'] ?>" class="spec-name">
            <img src="../img/images/user.png" alt="">
            <div class="sp-name">
                <h4 class="doc-name-stat">
                    Dr.
                    <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
                    <?php if ($row['docStatus'] == "Verified") { ?>
                        <span class="material-symbols-outlined verified" style="font-size: 12px;">verified</span>
                    <?php } else {
                    } ?>
                </h4>
                <p class="user-sp-color"><?php echo $_SESSION['docSpecialty'] ?></p>
            </div>
        </a>
    </td>
</tr>