<section class="form form_edit">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>USERs APPOINTMENT RECORDS</h1>
        <p style="color: grey;">ID: <?php echo $selected_medID ?></p>
        <input type="hidden" name="medID" id="medID" value="<?php echo $selected_medID ?>">

        <label for="medName">Patient Name *</label>
        <input type="text" name="medName" id="medName" value="<?php echo $row['medName'] ?>">

        <label for="medAddress">Patient Address *</label>
        <input type="text" name="medAddress" id="medAddress" value="<?php echo $row['medAddress'] ?>">

        <section class="details">
            <div>
                <label for="medAge">Patient age *</label>
                <input type="number" name="medAge" id="conAge" value="<?php echo $row['medAge'] ?>">
            </div>
            <div>
                <label for="medBdate">Patient Birthdate *</label>
                <input type="date" name="medBdate" id="medBdate" value="<?php echo $row['medBdate'] ?>">

            </div>
            <div>
                <label for="medContact">Patient Contact Number *</label>
                <input type="text" name="medContact" id="medContact" value="<?php echo $row['medContact'] ?>">

            </div>
        </section>

        <!-- username ad email -->
        <section class="details">
            <div>
                <label for="medUsername">Patient Username *</label>
                <input type="text" name="medUsername" id="medUsername" value="<?php echo $row['medUsername'] ?>">
            </div>
            <div>
                <label for="medEmail">Patient Username *</label>
                <input type="text" name="medEmail" id="medEmail" value="<?php echo $row['medEmail'] ?>">
            </div>
        </section>

        <section class="details">
            <div>
                <!-- personal doctor  -->
                <label for="medSelectedDoc">Patient's Personal Doctor *</label>
                <input type="text" name="medSelectedDoc" id="medSelectedDoc" value="<?php echo $row['medSelectedDoc'] ?>">

            </div>
            <!-- specialists  -->
            <div>
                <label for="medDocSpecialty">Doctor's Specialist *</label>
                <select name="medDocSpecialty" id="medDocSpecialty">
                    <option value="<?php echo $row['medDocSpecialty'] ?>"><?php echo $row['medDocSpecialty'] ?></option>
                    <option value="Dermatologist">Dermatologist</option>
                    <option value="Obstetrician-Gynecologist">Obstetrician-Gynecologist</option>
                    <option value="Ophthalmologist">Ophthalmologist</option>
                    <option value="Allergist">Allergist</option>
                    <option value="Gastroenterologist">Gastroenterologist</option>
                    <option value="Geriatrician">Geriatrician</option>
                    <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                    <option value="Hematologist">Hematologist</option>
                    <option value="Neurologist">Neurologist</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Pediatrician">Pediatrician</option>
                    <option value="Endocrinologist">Endocrinologist</option>
                    <option value="Radiologist">Radiologist</option>
                    <option value="Nephrologist">Nephrologist</option>
                    <option value="Otorhinolaryngologist">Otorhinolaryngologist</option>
                    <option value="Podiatrist">Podiatrist</option>
                    <option value="Family Medicine Doctor">Family Medicine Doctor</option>
                    <option value="Psychiatrist">Psychiatrist</option>
                    <option value="Emergency Medicine Physician">Emergency Medicine Physician</option>
                    <option value="Anesthesiologist">Anesthesiologist</option>
                    <option value="General Surgeon">General Surgeon</option>
                    <option value="Pathologist">Pathologist</option>
                    <option value="Surgeon">Surgeon</option>
                </select>
            </div>
        </section>

        <sction class="details">
            <div>
                <!-- Appointment Date/Time -->
                <label for="medADateTime">Appointment Date/Time *</label>
                <input type="datetime" name="medADateTime" id="medADateTime" value="<?php echo $row['medADateTime'] ?>" readonly>
            </div>
            <div>
                <!-- medical created date -->
                <label for="medCdate">Medical Date/Time *</label>
                <input type="datetime" name="medCdate" id="medCdate" value="<?php echo $row['medCdate'] ?>" readonly>
            </div>
        </sction>

        <!-- conpliant  -->
        <div>
            <?php include '../form/diagnose/edit_diagnose_med/derma.php' ?>
        </div>

        <!-- additional concern  -->
        <label for="medConcern">Patient's Additional Concern *</label>
        <textarea name="medConcern" id="medConcern"
            placeholder="Type additional medcern or specify your medcern..."><?php echo $row['medConcern'] ?></textarea>

        <!-- additional treatment  -->
        <label for="medTreatment">Doctor's Additional Treatment *</label>
        <textarea name="medTreatment" id="medTreatment"
            placeholder="Type additional treatment or specify your treatment..."><?php echo $row['medTreatment'] ?></textarea>

        <input type="submit" name="submit" id="submit" value="Save">
    </form>
</section>