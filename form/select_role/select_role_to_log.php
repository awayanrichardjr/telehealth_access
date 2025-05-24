<section class="user_role">

    <!-- info label  -->
    <label for="" class="info-label">
        <p>Select role to <b>login</b></p>

        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <p>This is the popped-up section!</p>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>

    <ul>
        <li class="doc">
            <a href="../public/log_doc.php">
                <span class="material-symbols-outlined">stethoscope</span>Doctor
            </a>
        </li>
        <li class="p">
            <a href="../public/log_p.php">
                <span class="material-symbols-outlined">personal_injury</span>Patient
            </a>
        </li>
    </ul>
</section>