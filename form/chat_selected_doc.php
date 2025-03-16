<section class="form chat">
    <!-- <h1>Chat</h1> -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="chat-profile">
            <div class="chat-profile">
                <img src="../img/images/user.png" alt="1mg">
                <h5>
                    <?php echo $_SESSION['docFname'] . " " . $_SESSION['docMname'] . " " . $_SESSION['docLname'] . " " . $_SESSION['docSuffix'] ?>
                </h5>
            </div>
            <a href="#">
                <span class="material-symbols-outlined">
                    video_call
                </span>
            </a>
        </div>

        <div class="convo"></div>

        <div class="chat-textarea">
            <input type="text" name="pChat" id="pChat" placeholder="Type messages...">
            <input type="submit" name="submit" id="submit" value="Send">
        </div>
    </form>
</section>