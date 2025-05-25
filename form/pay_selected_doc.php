<section class="form payment">
    <label for="" class="info-label">
        <h1>Payment Method</h1>
        <!-- with js -->
        <button class="info-button" onclick="document.getElementById('popupSection').style.display='block';">
            <span class="material-symbols-outlined" style="font-size: 17px;">info</span>
        </button>

        <!-- Hidden Section -->
        <div id="popupSection">
            <div class="payment-footer">
                <h1 style="display: flex; justify-content: start; align-items: center; gap: 0.3rem;">
                    Payment Information
                    <span class="material-symbols-outlined">payments</span>
                </h1>
                <p>- To complete your purchase, please select a payment method from the options above.</p>
                <p>- Once you click "Pay Now," you will be redirected to the respective payment platform to finalize your transaction.</p>
                <p>- If you have any questions or need assistance, feel free to contact our support team.</p>
            </div>
            <button class="info-button" onclick="document.getElementById('popupSection').style.display='none'">Close</button>
        </div>
    </label>
    <form action="">
        <ul class=" payment-list">
            <li>
                <img src="../img/logo/paymaya.png" alt="Paymaya">
                <input type="submit" name="submit" id="submit" value="Pay Now" style="background-color: grey;">
                <p style="color: red;">Unavailable</p>
            <li>
                <img src="../img/logo/gcash.png" alt="Gcash">
                <input type="submit" name="submit" id="submit" value="Pay Now" style="background-color: grey;">
                <p style="color: red;">Unavailable</p>
            </li>
            <li>
                <img src="../img/logo/paypal.png" alt="paypal">
                <input type="submit" name="submit" id="submit" value="Pay Now" onclick="window.open('https://www.paypal.com/myaccount/transfer/homepage?from=SUM-QuickLink', 'PopupWindow', 'width=600,height=700');">
                <p style="color: var(--blue);">Recomended</p>
            </li>
        </ul>
    </form>
</section>