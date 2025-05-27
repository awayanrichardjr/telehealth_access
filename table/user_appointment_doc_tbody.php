<tr class="appointment_tr">
  <?php
  $docName = "Dr. " . $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'];

  if ($_SESSION['conSelectedDoc'] === $docName) { ?>
    <td style="background-color: var(--purple);">
    <?php } else { ?>
    <td style="background-color: grey;">
    <?php } ?>
    <ul class="view-appt">
      <li>
        <p><?php echo $_SESSION['conName'] ?></p>
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