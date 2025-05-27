<section class="form medical">
    <label for="" class="info-label" style="justify-self: start;">
        <h1>Close Appointment</h1>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <h1>Closing an Appointment</h1>
            <p>After completing a consultation, doctors must close the appointment to mark it as finished and transfer it into the medical records. Follow the steps below:</p>
            <br>
            <p><b>Add Additional Treatment Notes (Optional)</b></p>
            <p>A form will appear with a textarea input. Use this space to write any important details such as:</p>
            <p>- Follow-up advice</p>
            <p>- Prescribed medications</p>
            <p>- Additional treatments</p>
            <p>- Observations from the consultation</p>
            <br>
            <p><b>Note:</b></p>
            <p>Only verified doctors can close appointments. All closed records are securely stored and can be reviewed by both the doctor and the system admin.</p>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Additional Treatment</h1>
        <input type="hidden" name="medID" id="medID" value="<?php echo $_SESSION['conID'] ?>" readonly>
        <input type="hidden" name="medName" id="medName" value="<?php echo $_SESSION['conName'] ?>" readonly>
        <input type="hidden" name="medAddress" id="medAddress" value="<?php echo $_SESSION['conAddress'] ?>" readonly>
        <input type="hidden" name="medSelectedDoc" id="medSelectedDoc" value="<?php echo $_SESSION['conSelectedDoc'] ?>" readonly>
        <input type="hidden" name="medBdate" id="medBdate" value="<?php echo $_SESSION['conBdate'] ?>" readonly>
        <input type="hidden" name="medAge" id="medAge" value="<?php echo $_SESSION['conAge'] ?>" readonly>
        <input type="hidden" name="medDocSpecialty" id="medDocSpecialty" value="<?php echo $_SESSION['conDocSpecialty'] ?>" readonly>
        <input type="hidden" name="medDiagnose" id="medDiagnose" value="<?php echo $_SESSION['conDiagnose'] ?>" readonly>
        <input type="hidden" name="medConcern" id="medConcern" value="<?php echo $_SESSION['conConcern'] ?>" readonly>
        <input type="hidden" name="medUsername" id="medUsername" value="<?php echo $_SESSION['conUsername'] ?>" readonly>
        <input type="hidden" name="medEmail" id="medEmail" value="<?php echo $_SESSION['conEmail'] ?>" readonly>
        <input type="hidden" name="medContact" id="medContact" value="<?php echo $_SESSION['conContact'] ?>" readonly>
        <input type="hidden" name="medCdate" id="medCdate" value="<?php echo $_SESSION['conCdate'] ?>" readonly>
        <input type="hidden" name="medADateTime" id="medADateTime" value="<?php
                                                                            date_default_timezone_set("Asia/Manila");
                                                                            echo date("M d, Y h:ia") ?>" readonly>
        <!-- confirm btn -->
        <label for="medTreatment" style="color: grey;">Treatment *(Optional)</label>
        <textarea name="medTreatment" id="medTreatment" placeholder="Add additional Treatment or provide follow up appointment..."></textarea>

        <br>
        <div>
            <h1 style="text-align: start;">Payment for follow up appointment</h1>
            <p style="font-size: 10px; color:grey;">Please schedule a follow-up appointment to continue your treatment, or discuss ongoing concerns with the patient.</p>
            <p style="font-size: 10px; color:grey;">Timely follow-ups are essential for effective care and recovery.</p>
        </div>

        <!-- Create Invoice -->
        <a href="https://www.paypal.com/invoice/s/create/" onclick="window.open(this.href, 'PopupWindow','width=900,height=700'); return false;" class="invoice-btn">
            <span class="material-symbols-outlined" style="font-size: 17px;">payment</span>
            <p>Creat Invoice</p>
        </a>
        <br>

        <p style="font-size: 10px; color:grey;">Close the appointment if no more concerns needed.</p>
        <input type="submit" name="submit" id="submit" value="Close">
    </form>
</section>



<!-- , 'width=900,height=600' -->