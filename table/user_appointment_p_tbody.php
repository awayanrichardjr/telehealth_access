<tr class="appointment_tr">
  <?php if ($_SESSION['conUsername'] === $_SESSION['pUsername']) { ?>
    <td style="background-color: var(--purple);">
    <?php } else { ?>
    <td style="background-color: grey;">
    <?php } ?>
    <ul class="view-appt">
      <li>
        <p><?php echo $_SESSION['conName'] ?></p>
        <p><?php echo $_SESSION['conUsername'] ?></p>
      </li>

      <div style="display: flex;">
        <!-- visibility -->
        <li class="view-appt">
          <?php if ($_SESSION['conUsername'] === $_SESSION['pUsername']) { ?>
            <a href="../public/view_appointment_p.php?conID=<?php echo $row['conID']; ?>" class="appt-visibility">
              <span class="material-symbols-outlined">visibility</span>
              <p>View</p>
            </a>
          <?php
          } else { ?>
            <a href="../public/appointment_p.php?locked" class="appt-visibility">
              <span class="material-symbols-outlined">visibility_lock</span>
              <p>Locked</p>
            </a>
          <?php } ?>
        </li>

        <!-- cancel appointment -->
        <li>
          <?php if ($_SESSION['conUsername'] === $_SESSION['pUsername']) { ?>
            <a href="../public/delete_appointment.php?conID=<?php echo $row['conID']; ?>" class="appt-visibility">
              <span class="material-symbols-outlined">cancel</span>
              <p>Cancel</p>
            </a>
          <?php
          } else {
          } ?>
        </li>
      </div>

    </ul>
    </ul>

    <br>
    <p><b><?php echo $_SESSION['conSelectedDoc'] ?></b></p>
    <p><?php echo $_SESSION['conDocSpecialty'] ?></p>
    <div class="conDateTime">
      <p><?php echo $_SESSION['conDate'] ?></p>
      <p><?php echo $_SESSION['conTime'] ?></p>
    </div>
    </td>
</tr>

<style>
  .conDateTime {
    display: flex;
    gap: 1rem;
  }
</style>