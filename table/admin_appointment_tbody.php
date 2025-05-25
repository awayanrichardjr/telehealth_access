<tr>
  <td>
    <ul class="dropdown-links">
      <span class="material-symbols-outlined">stat_minus_1</span>
      <div class="dropdown-content">
        <li><a href="../public/edit_con.php?conID=<?php echo $row['conID'] ?>">View</a></li>
        <li><a href="../public/delete_con.php?conID=<?php echo $row['conID'] ?>">Remove</a></li>
      </div>
    </ul>
  </td>
  <td><?php echo $_SESSION['conID'] ?></td>
  <td><?php echo $_SESSION['conName'] ?></td>
  <td><?php echo $_SESSION['conSelectedDoc'] ?></td>
  <td><?php echo $_SESSION['conDocSpecialty'] ?></td>
  <td><?php echo $_SESSION['conCdate'] ?></td>
  <td><?php echo $_SESSION['conDate'] ?></td>
  <td><?php echo $_SESSION['conTime'] ?></td>
</tr>