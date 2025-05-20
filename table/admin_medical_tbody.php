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
  <td><?php echo $_SESSION['medID'] ?></td>
  <td><?php echo $_SESSION['medName'] ?></td>
  <td><?php echo $_SESSION['medAddress'] ?></td>
  <td><?php echo $_SESSION['medBdate'] ?></td>
  <td><?php echo $_SESSION['medSelectedDoc'] ?></td>
  <td><?php echo $_SESSION['medDocSpecialty'] ?></td>
  <td><?php echo $_SESSION['medDiagnose'] ?></td>
  <td><?php echo $_SESSION['medConcern'] ?></td>
  <td><?php echo $_SESSION['medEmail'] ?></td>
  <td><?php echo $_SESSION['medContact'] ?></td>
  <td><?php echo $_SESSION['medCdate'] ?></td>
  <td><?php echo $_SESSION['medADateTime'] ?></td>
</tr>