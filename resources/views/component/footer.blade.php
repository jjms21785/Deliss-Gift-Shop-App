 
<style>
    .deliss-footer {
        background: #1c1c1c;
        color: #fff;
        padding: 50px 30px 20px;
        font-family: Arial, sans-serif;
        margin-top: 100px;
        min-height: 100vh;
    }
    .footer-top {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 40px;
    }

    .footer-left {
        max-width: 500px;
    }

    .footer-left h2 {
        font-size: 82px;
        color: pink;
    }

    .tagline {
        position: absolute;
        margin-top: 5px;
        text-align: right;
        color: #bbb;
        width: 240px;
    }

    .footer-left .subtitle {
        font-size: 12px;
        margin: -15px 5 20px;
        text-transform: uppercase;
    }

    .deliss-note {
        letter-spacing: 2px;
        word-spacing: 2px;
    }

    .footer-left p {
        font-size: 14px;
        line-height: 1.6;
        color: #ccc;
    }

    .footer-section {
        min-width: 380px;
    }

    .footer-section h4 {
        margin-bottom: 10px;
        color: #fff;
        font-size: 14px;
        letter-spacing: 1px;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        font-size: 13px;
        margin-bottom: 6px;
        color: #ccc;
        cursor: pointer;
    }

    .payment-icons {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .payment-icons img {
        height: 28px;
        background: #fff;
        border-radius: 6px;
        padding: 4px 8px;
    }

    .footer-divider {
        border: 0;
        border-top: 1px solid #333;
        margin: 40px 0 20px;
    }

    .footer-bottom {
        text-align: center;
        color: #ccc;
    }

    .laravel-logo {
        width: 700px;
    }

    .footer-note {  
        max-width: 1100px;
        margin: 0 auto;
        font-size: 13px;
        line-height: 1.8;
        letter-spacing: 2px;
        word-spacing: 2px;
    }
</style>

<div class="deliss-footer">
        <div class="footer-top">
            <div class="footer-left">
                <p class="tagline">EST 2025</p>
                <h2>Deliss</h2>
                <p class="subtitle">WHERE ELEGANCE MEETS SWEETNESS</p>
                <p class="deliss-note">Deliss Gift Shop offers handcrafted sweets and elegant treats perfect for every occasion. Discover a world of flavor, beauty, and delight—all in one place.</p>
            </div>

            <div class="footer-section">
            <h4>COSTUMER CARE</h4>
            <ul>
                <li>TRACK ORDER</li>
                <li>CONTACT US</li>
                <li>DELIVERY</li>
                <li>PAYMENT</li>
                <li>TERMS & CONDITIOS</li>
                <li>PRIVACY POLICY</li>
                <li>COOKIE POLICY</li>
            </ul>
            </div>

            <div class="footer-section">
            <h4>ABOUT US</h4>
            <ul>
                <li>BEHIND DELISS</li>
                <li>MISSION</li>
                <li>VISION</li>
                <li>CONTACTS</li>
                <li>FRANCHISING</li>
            </ul>
            <h4>DELIVERY ACCEPTS</h4>
            <div class="payment-icons">
                <img src="{{ asset('icons/gcash-icon.png') }}" alt="gcash">
                <img src="{{ asset('icons/maya-icon.png') }}" alt="maya">
                <img src="{{ asset('icons/paypal-icon.png') }}" alt="paypal">
                <img src="{{ asset('icons/cod-icon.png') }}" alt="cod">
            </div>
            </div>
        </div>

        <hr class="footer-divider"/>

        <div class="footer-bottom">
            <img src="{{ asset('images/laravel-logo-air.png') }}" alt="Laravel Logo" class="laravel-logo">
            <p class="footer-note">
            This project was developed using the Laravel framework as part of our CS405 course, Open Source Programming with Frameworks. It serves as a practical exploration of modern web application development, focusing on MVC architecture, routing, templating with Blade, database integration via ******, and ***** design. By leveraging Laravel’s robust features and ecosystem, this project deepens our understanding of scalable, maintainable, and secure back-end development practices within an open-source environment.
            </p>
        </div>
</div>
