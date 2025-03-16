<?php
$doc_fullname = $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'];
?>

<tr>
    <td>
        <ul class="dropdown-links">
            <span class="material-symbols-outlined">stat_minus_1</span>
            <div class="dropdown-content">
                <li><a href="../public/edit_doc.php?docID=<?php echo $row['docID'] ?>">View</a></li>
                <li><a href="../public/delete_doc.php?docID=<?php echo $row['docID'] ?>">Remove</a></li>
            </div>
        </ul>
    </td>
    <td><?php echo $_SESSION['docID'] ?></td>
    <td><?php echo $doc_fullname ?>
    </td>
    <td><?php echo $_SESSION['docSpecialty'] ?></td>
    <td><?php echo $_SESSION['docEmail'] ?></td>

    <!-- status -->
    <?php if ($_SESSION['docStatus'] == "Verified") { ?>
        <td class="verified-status">
            <?php echo $_SESSION['docStatus'] ?>
        </td>
    <?php } elseif ($_SESSION['docStatus'] == "Unverified") { ?>
        <td class="unverified-status">
            <?php echo $_SESSION['docStatus'] ?>
        </td>
    <?php } elseif ($_SESSION['docStatus'] == "Pending") { ?>
        <td class="pending-status">
            <?php echo $_SESSION['docStatus'] ?>
        </td>
    <?php } ?>

    <td><?php echo $_SESSION['docCdate'] ?></td>
    <td><?php echo $_SESSION['docModified'] ?></td>
</tr>