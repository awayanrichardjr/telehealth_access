<section class="user_feed">
    <!-- eye-catching content here -->
    <div class="user_feed_content">
        <label for="" class="info-label">
            <h2>Welcome to the Telehealth Feed!</h2>
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

        <p>This is where you can find the latest updates and information.</p>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $feed_name = ucwords($_POST['feed_name']);
            $feed_post = $_POST['feed_post'];
            $feed_Cdate = $_POST['feed_Cdate'];
            $feed_DocStatus = $_POST['feed_DocStatus'];

            $sql = "INSERT INTO feed (feed_name, feed_post, feed_Cdate, feed_DocStatus) VALUES ('$feed_name','$feed_post', '$feed_Cdate', '$feed_DocStatus')";

            if ($conn->query($sql) === TRUE) {
                header("location: ../public/main_doc.php");
                exit();
            } else {
                header("location: ../public/main_doc.php?error=Error inserting data into database");
                exit();
                // echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // feed form 
        include_once '../form/user_feed_doc.php';
        ?>
        <!-- </section> -->