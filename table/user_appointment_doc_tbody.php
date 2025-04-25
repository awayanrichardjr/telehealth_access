<tr>
  <td>
    <ul class="view-appt">
      <li>
        <h3><?php echo $_SESSION['conName'] ?></h3>
        <p><?php echo $_SESSION['conEmail'] ?></p>
      </li>


      <!-- visibility -->
      <li class="view-appt">
        <?php
        $docName = "Dr. " . $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'];

        if ($_SESSION['conSelectedDoc'] === $docName) { ?>
          <a href="../public/view_appointment_doc.php?conID=<?php echo $row['conID'] ?>" class="appt-visibility">
            <span class="material-symbols-outlined">visibility</span>
            <p>View</p>
          </a>
          <?php
        } else { ?>
          <a href="../public/appointment_doc.php?locked" class="appt-visibility">
            <span class="material-symbols-outlined">visibility_lock</span>
            <p>Locked</p>
          </a>
        <?php } ?>
      </li>

      <!-- closed appointment -->
      <li>
        <?php if ($_SESSION['conSelectedDoc'] === $docName) { ?>
          <a href="#" class="appt-visibility">
            <span class="material-symbols-outlined">check</span>
            <p>closed</p>
          </a>
          <?php
        } else {
        } ?>
      </li>

    </ul>

    <br>
    <p><b><?php echo $_SESSION['conSelectedDoc'] ?></b></p>
    <p><?php echo $_SESSION['conDocSpecialty'] ?></p>
    <p><?php echo $_SESSION['conADateTime'] ?></p>
  </td>
</tr>