<section class="user_role">
    <label for="" class="info-label">
        <p>Select role to <b>register</b></p>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>
        <!-- Hidden Section -->
        <div id="popupSection">
            <h1>Select Your Role to Create an Account</h1>
            <p>Choose the type of user account you want to register:</p>
            <br>
            <p><b>Patient:</b> Book appointments, consult with doctors online, and access your medical history.</p>
            <p><b>Doctor:</b> Manage appointments, provide online consultations, and view patient records.</p>
            <br>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>
    <ul>
        <li class="doc">
            <a href="../public/reg_doc.php">
                <span class="material-symbols-outlined">stethoscope</span>Doctor
            </a>
        </li>
        <li class="p">
            <a href="../public/reg_p.php">
                <span class="material-symbols-outlined">personal_injury</span>Patient
            </a>
        </li>
    </ul>
</section>