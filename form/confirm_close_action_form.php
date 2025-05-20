<section class="form medical">
    <tr>
        <td>
            <ul class="dropdown-links">
                <span class="material-symbols-outlined">stat_minus_1</span>
                <div class="dropdown-content">
                    <li><a href="../public/edit_med.php?medID=<?php echo $row['medID'] ?>">View</a></li>
                    <li><a href="../public/delete_med.php?medID=<?php echo $row['medID'] ?>">Remove</a></li>
                </div>
            </ul>
        </td>
        <td><?php $_SESSION['medID'] ?></td>
        <td><?php $_SESSION['medName'] ?></td>
        <td><?php $_SESSION['medAddress'] ?></td>
        <td><?php $_SESSION['medBdate'] ?></td>
        <td><?php $_SESSION['medSelectedDoc'] ?></td>
        <td><?php $_SESSION['medDocSpecialty'] ?></td>
        <td><?php $_SESSION['medDiagnose'] ?></td>
        <td><?php $_SESSION['medConcern'] ?></td>
        <td><?php $_SESSION['medEmail'] ?></td>
        <td><?php $_SESSION['medContact'] ?></td>
        <td><?php $_SESSION['medCdate'] ?></td>
        <td><?php $_SESSION['medADateTime'] ?></td>
    </tr>
</section>