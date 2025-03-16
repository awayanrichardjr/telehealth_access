<footer class="user_footer">
    <div class="links">
        <a href="../public/user.php">
            <label style="color: var(--yellow);"><b>|</b> </label><b>TELEHEALTH ACCESS</b>
        </a>
        <ul>
            <li><a href="#">Support</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Get in touch!</a></li>
        </ul>
        <ul>
            <li><a href="../public/about.php">ABOUT US</a></li>
            <li><a href="../public/contact.php">CONTACT US</a></li>
            <li><a href="#">SERVICES</a></li>
        </ul>
    </div>
    <hr>
    <ul class="links social-icons">
        <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-linkedin"></a></li>
    </ul>
    <p class="copyright">&copyCopyright <?php
    $yr = date('Y');
    echo $yr - 1 . "-" . date('Y'); ?> TELEHEALTH ACCESS, All Rights Reserved</p>
</footer>