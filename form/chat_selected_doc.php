<section class="form chat">
    <!-- <h1>Chat</h1> -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="chat-profile">
            <div class="chat-profile">
                <!-- img -->
                <img src="../img/images/user.png" alt="1mg">

                <!-- doctor's name -->
                <h5>
                    <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
                </h5>
            </div>

            <!-- video call btn -->
            <a href="#">
                <span class="material-symbols-outlined">
                    video_call
                </span>
            </a>
        </div>

        <!-- conversation -->
        <div class="convo">
            <!-- table here... -->
        </div>

        <!-- type messages here... -->
        <div class="chat-textarea">
            <input type="text" name="pChat" id="pChat" placeholder="Type messages...">
            <input type="submit" name="submit" id="submit" value="Send">
        </div>
    </form>
</section>