<tr class="appointment_tr">
  <?php
  $docName = "Dr. " . $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'];

  if ($_SESSION['conSelectedDoc'] === $docName) { ?>
    <td style="background-color: var(--purple);">
    <?php } else { ?>
    <td style="background-color: var(--blue);">
    <?php } ?>
    <ul class="view-appt">
      <li>
        <h3><?php echo $_SESSION['medName'] ?></h3>
        <p><?php echo $_SESSION['medUsername'] ?></p>
      </li>

      <!-- visibility action -->
      <li class="view-appt">
        <?php
        if ($_SESSION['medSelectedDoc'] === $docName) { ?>
          <!-- visible -->
          <a href="../public/view_medical_doc.php?medID=<?php echo $row['medID'] ?>" class="appt-visibility">
            <span class="material-symbols-outlined">visibility</span>
            <p>View</p>
          </a>
        <?php
        } else { ?>
          <!-- locked -->
          <a href="../public/appointment_past_doc.php?locked" class="appt-visibility">
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