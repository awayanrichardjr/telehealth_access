<tr>
  <td>
    <ul class="view-appt">
      <li>
        <h3><?php echo $_SESSION['conName'] ?></h3>
        <p><?php echo $_SESSION['conEmail'] ?></p>
      </li>

      <!-- visibility -->
      <li class="view-appt">
        <?php if ($_SESSION['conEmail'] === $_SESSION['pEmail']) { ?>
          <a href="../public/view_appointment_p.php?conID=<?php echo $row['conID']; ?>" class="appt-visibility">
            <span class="material-symbols-outlined">visibility</span>
          </a>
          <?php
        } else { ?>
          <a href="../public/appointment_p.php?locked" class="appt-visibility">
            <span class="material-symbols-outlined">visibility_lock</span>
          </a>
        <?php } ?>
      </li>
    </ul>

    <br>
    <p><b><?php echo $_SESSION['conSelectedDoc'] ?></b></p>
    <p><?php echo $_SESSION['conDocSpecialty'] ?></p>
    <p><?php echo $_SESSION['conADateTime'] ?></p>
  </td>
</tr>