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
        <h3><?php echo $_SESSION['conName'] ?></h3>
        <p><?php echo $_SESSION['conUsername'] ?></p>
      </li>

      <!-- visibility action -->
      <li class="view-appt">
        <?php
        if ($_SESSION['conSelectedDoc'] === $docName) { ?>
          <!-- visible -->
          <a href="../public/view_appointment_doc.php?conID=<?php echo $row['conID'] ?>" class="appt-visibility">
            <span class="material-symbols-outlined">visibility</span>
            <p>View</p>
          </a>
        <?php
        } else { ?>
          <!-- locked -->
          <a href="../public/appointment_doc.php?locked" class="appt-visibility">
            <span class="material-symbols-outlined">visibility_lock</span>
            <p>Locked</p>
          </a>
        <?php } ?>
      </li>
    </ul>

    <br>
    <p><b><?php echo $_SESSION['conSelectedDoc'] ?></b></p>
    <p><?php echo $_SESSION['conDocSpecialty'] ?></p>
    <p><?php echo $_SESSION['conADateTime'] = date_default_timezone_set("Asia/Manila");
        echo date("M d, Y h:ia") ?></p>
    </td>
</tr>