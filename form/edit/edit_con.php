<section class="form form_edit">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>USERs APPOINTMENT RECORDS</h1>
        <p style="color: grey;">ID: <?php echo $selected_conID ?></p>
        <input type="hidden" name="conID" id="conID" value="<?php echo $selected_conID ?>">

        <label for="conName">Patient Name *</label>
        <input type="text" name="conName" id="conName" value="<?php echo $row['conName'] ?>">

        <label for="conAddress">Patient Address *</label>
        <input type="text" name="conAddress" id="conAddress" value="<?php echo $row['conAddress'] ?>">

        <section class="details">
            <div>
                <label for="conAge">Patient age *</label>
                <input type="number" name="conAge" id="conAge" value="<?php echo $row['conAge'] ?>">
            </div>
            <div>
                <label for="conBdate">Patient Birthdate *</label>
                <input type="date" name="conBdate" id="conBdate" value="<?php echo $row['conBdate'] ?>">
            </div>
            <div>
                <label for="conContact">Patient Contact Number *</label>
                <input type="text" name="conContact" id="conContact" value="<?php echo $row['conContact'] ?>">
            </div>
        </section>
        <div>
            <label for="conUsername">Patient Username *</label>
            <input type="text" name="conUsername" id="conUsername" value="<?php echo $row['conUsername'] ?>">
        </div>
        <hr>
        <section class="details">
            <div>
                <!-- personal doctor  -->
                <label for="conSelectedDoc">Patient's Personal Doctor *</label>
                <input type="text" name="conSelectedDoc" id="conSelectedDoc" value="<?php echo $row['conSelectedDoc'] ?>">
            </div>
            <!-- specialists  -->
            <div>
                <label for="conDocSpecialty">Doctor's Specialist *</label>
                <select name="conDocSpecialty" id="conDocSpecialty">
                    <option value="<?php echo $row['conDocSpecialty'] ?>"><?php echo $row['conDocSpecialty'] ?></option>
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

        <!-- Appointment Date/Time -->
        <label for="conADateTime">Appointment Date/Time *</label>
        <input type="datetime-local" name="conADateTime" id="conADateTime" value="<?php echo $row['conADateTime'] ?>">

        <!-- compliant -->
        <?php include '../form/diagnose/edit_diagnose_con/derma.php' ?>

        <!-- Appointment created date -->
        <input type="hidden" name="conCdate" id="conCdate" value="<?php echo $row['conCdate'] ?>">

        <label for="conConcern">Patient's Additional Concern *</label>
        <textarea name="conConcern" id="conConcern"
            placeholder="Type additional concern or specify your concern..."><?php echo $row['conConcern'] ?></textarea>

        <input type="submit" name="submit" id="submit" value="Save">
    </form>
</section>