<section class="user_role">
    <label for="" class="info-label">
        <p>Select role to <b>register</b></p>

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

<style>
    .info-button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        color: var(--blue);
    }

    #popupSection {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: var(--card-border);
        box-shadow: var(--card-shadow);
        z-index: 1000;

        transition: 1s;
    }
</style>