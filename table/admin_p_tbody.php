<tr>
    <td>
        <ul class="dropdown-links">
            <span class="material-symbols-outlined">stat_minus_1</span>
            <div class="dropdown-content">
                <li><a href="../public/edit_p.php?pID=<?php echo $row['pID'] ?>">View</a></li>
                <li><a href="../public/delete_p.php?pID=<?php echo $row['pID'] ?>">Remove</a></li>
            </div>
        </ul>
    </td>
    <td><?php echo $_SESSION['pID'] ?></td>
    <td><?php echo $_SESSION['pFname'] . " " . $_SESSION['pMname'] . " " . $_SESSION['pLname'] . " " . $_SESSION['pSuffix'] ?>
    </td>
    <td><?php echo $_SESSION['pEmail'] ?></td>
    <td><?php echo $_SESSION['pCdate'] ?></td>
    <td><?php echo $_SESSION['pModified'] ?></td>
</tr>