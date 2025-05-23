<tr class="appointment_tr">
  <?php if ($_SESSION['medUsername'] === $_SESSION['pUsername']) { ?>
    <td style="background-color: var(--purple);">
    <?php } else { ?>
    <td style="background-color: lightgrey;">
    <?php } ?>
    <ul class="view-appt">
      <li>
        <p><?php echo $_SESSION['medUsername'] ?></p>
      </li>

      <!-- visibility action -->
      <li class="view-appt">
        <?php
        if ($_SESSION['medUsername'] === $_SESSION['pUsername']) { ?>
          <!-- visible -->
          <a href="../public/view_medical_p.php?medID=<?php echo $row['medID'] ?>" class="appt-visibility">
            <span class="material-symbols-outlined">visibility</span>
            <p>View</p>
          </a>
        <?php
        } else { ?>
          <!-- locked -->
          <a href="../public/appointment_past_p.php?locked" class="appt-visibility">
            <span class="material-symbols-outlined">visibility_lock</span>
            <p>Locked</p>
          </a>
        <?php } ?>
      </li>
    </ul>

    <br>
    <p><b><?php echo $_SESSION['medSelectedDoc'] ?></b></p>
    <p><?php echo $_SESSION['medDocSpecialty'] ?></p>
    <p><?php echo $_SESSION['medADateTime'] ?></p>
    </td>
</tr>