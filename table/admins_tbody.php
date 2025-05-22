<tr>
    <td>
        <ul class="td-dropdown">
            <span class="material-symbols-outlined">stat_minus_1</span>
            <div class="td-dropdown-content">
                <li><a href="#">Edit</a></li>
                <li><a href="#">Delete</a></li>
            </div>
        </ul>
    </td>
    <td><?php echo $_SESSION['adminID'] ?></td>
    <td><?php echo $_SESSION['adminFname'] . " " . $_SESSION['adminMname'] . " " . $_SESSION['adminLname'] . " " . $_SESSION['adminSuffix'] ?>
    </td>
    <td><?php echo $_SESSION['adminAddress'] ?></td>
    <td><?php echo $_SESSION['adminBdate'] ?></td>
    <td><?php echo $_SESSION['adminContact'] ?></td>
    <td><?php echo $_SESSION['adminUsername'] ?></td>
    <td><?php echo $_SESSION['adminCdate'] ?></td>
    <td><?php echo $_SESSION['adminModified'] ?></td>
</tr>