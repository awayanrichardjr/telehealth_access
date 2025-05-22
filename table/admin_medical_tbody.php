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
  <td><?php echo $_SESSION['medUsername'] ?></td>
  <td><?php echo $_SESSION['medSelectedDoc'] ?></td>
  <td><?php echo $_SESSION['medDocSpecialty'] ?></td>
  <td><?php echo $_SESSION['medCdate'] ?></td>
  <td><?php echo $_SESSION['medADateTime'] ?></td>
</tr>