<section class="available_doc">
    <label for="" class="info-label" style="justify-self: start;">
        <a href="https://calendar.google.com/calendar/u/0/r">
            <span class="material-symbols-outlined">edit_calendar</span>
            <p>Edit Schedule/Click to Google Calendar</p>
        </a>
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
    <div class="calendar">
        <iframe
            src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FManila&showPrint=0&showTitle=0&hl=en&src=YXdheWFucmljaGFyZGpyQGdtYWlsLmNvbQ&src=ZW4tZ2IucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043"
            style="box-shadow: 0px 10px 5px var(--shadow)" width="800" height="600" frameborder="0"
            scrolling="no"></iframe>
    </div>
</section>