<?php
$docName = "Dr. " . $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'];
if ($_SESSION['medSelectedDoc'] === $docName) { ?>
  <tr class="appointment_tr">
    <?php

    if ($_SESSION['medSelectedDoc'] === $docName) { ?>
      <td style="background-color: var(--blue);">
      <?php } else { ?>
      <td style="background-color: grey;">
      <?php } ?>
      <ul class="view-appt">
        <li>
          <p><?php echo $_SESSION['medName'] ?></p>
          <p><?php echo $_SESSION['medUsername'] ?></p>
        </li>

        <!-- visibility action -->
        <li class="view-appt">
          <!-- visible -->
          <a href="../public/view_medical_doc.php?medID=<?php echo $row['medID'] ?>" class="appt-visibility">
            <span class="material-symbols-outlined">visibility</span>
            <p>View</p>
          </a>
        </li>
      </ul>

      <br>
      <p><b><?php echo $_SESSION['medSelectedDoc'] ?></b></p>
      <p><?php echo $_SESSION['medDocSpecialty'] ?></p>
      <p><?php echo $_SESSION['medADateTime'] ?></p>
      </td>
  </tr>
<?php
} else { ?>
  <!-- locked -->
  <!-- <a href="../public/appointment_past_doc.php?locked" class="appt-visibility">
            <span class="material-symbols-outlined">visibility_lock</span>
            <p>Locked</p>
          </a> DO NOT DELETE THIS COMMENT, IT IS FOR THE LOCKED APPOINTMENT -->
<?php } ?>