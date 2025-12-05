<style>
.site-footer {
    background: #000;
    color: #fff;
    padding: 60px 0 20px;
    font-family: Arial, sans-serif;
    margin-top: 80px;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-column {
    width: 30%;
    min-width: 250px;
}

.footer-title {
    color: #d11a2a;
    font-size: 20px;
    margin-bottom: 20px;
    font-weight: bold;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 12px;
    font-size: 15px;
    display: flex;
    align-items: center;
    color: white;
}

.footer-links li i {
    margin-right: 10px;
    color: #d11a2a;
}

.footer-links a {
    color: white;
    text-decoration: none;
}

.footer-links a:hover {
    color: #d11a2a;
}

.footer-bottom {
    margin-top: 30px;
    text-align: center;
    font-size: 14px;
    border-top: 1px solid #222;
    padding-top: 15px;
}
</style>

<footer class="site-footer">
    <div class="footer-container">

        {{-- Quick Links --}}
        <div class="footer-column">
            <h3 class="footer-title">Quick Links</h3>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career Opportunities</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>

        {{-- Follow Us --}}
        <div class="footer-column">
            <h3 class="footer-title">Follow Us</h3>
            <ul class="footer-links">
                <li><i class="fab fa-facebook"></i> Facebook</li>
                <li><i class="fab fa-instagram"></i> Instagram</li>
                <li><i class="fab fa-twitter"></i> Twitter</li>
                <li><i class="fab fa-linkedin"></i> LinkedIn</li>
            </ul>
        </div>

        {{-- Contact Us --}}
        <div class="footer-column">
            <h3 class="footer-title">Contact Us</h3>
            <ul class="footer-links">
                <li><i class="fas fa-phone"></i> +254 739 944 882</li>
                <li><i class="fas fa-comment"></i> Whatsapp</li>
                <li><i class="fas fa-envelope"></i> info@isteducation.com</li>
                <li>
                    <i class="fas fa-location-arrow"></i>
                    Westpoint Building, 6th Floor,<br>
                    Mpaka Road, Westlands, Nairobi
                </li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        Copyright 2025 IST. All Rights Reserved.
    </div>
</footer>