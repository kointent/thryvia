<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | THRYVIA</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="mobile-overlay" id="mobileMenu">
    <div class="mobile-menu-content">
        <i class="fa-solid fa-xmark close-menu" onclick="toggleMenu()"></i>
        <ul class="mobile-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop All</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="account.php">My Account</a></li>
        </ul>
    </div>
</div>

<nav>
    <div class="nav-left">
        <i class="fa-solid fa-bars hamburger" onclick="toggleMenu()"></i>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
             <li><a href="shop.php">Shop All</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="account.php">My Account</a></li>
        </ul>
    </div>

    <div class="logo">THRYVIA</div>

    <div class="nav-icons">
        <div class="search-container">
            <input type="text" class="search-input" id="searchInput" placeholder="Search...">
            <i class="fa-solid fa-magnifying-glass" onclick="toggleSearch()"></i>
        </div>

        <div class="cart-wrapper">
            <i class="fa-solid fa-cart-shopping" onclick="toggleCart()"></i>
            <span class="cart-count">2</span>
            
            <div class="cart-dropdown" id="cartDropdown">
                <h4>Your Cart (2)</h4>
                <div class="cart-items">
                    <div class="cart-item">
                        <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=50" alt="item">
                        <div class="item-info">
                            <p class="item-name">Silk Slip Dress</p>
                            <p class="item-price">1 x $120.00</p>
                        </div>
                    </div>
                    <div class="cart-item">
                        <img src="https://images.unsplash.com/photo-1583467875263-d50dec37a88c?w=50" alt="item">
                        <div class="item-info">
                            <p class="item-name">Eau de Parfum</p>
                            <p class="item-price">1 x $85.00</p>
                        </div>
                    </div>
                </div>
                <div class="cart-total">
                    <span>Total:</span>
                    <span>$205.00</span>
                </div>
                <button class="btn-checkout">Checkout Now</button>
            </div>
        </div>

<?php if(isset($_SESSION['user_id'])): ?>
        <a href="account.php" class="desktop-only" style="margin-right:10px;">My Account</a>
        <a href="logout.php" class="btn-signup desktop-only">Log Out</a>
    <?php else: ?>
        <a href="auth.php" class="btn-signup desktop-only">Log In</a>
    <?php endif; ?>
    </div>
</nav>

<script>
    function toggleSearch() {
        document.getElementById('searchInput').classList.toggle('active');
    }

    function toggleMenu() {
        document.getElementById('mobileMenu').classList.toggle('active');
    }

    function toggleCart() {
        document.getElementById('cartDropdown').classList.toggle('active');
    }

    // Close dropdowns when clicking outside
    window.onclick = function(event) {
        if (!event.target.matches('.fa-cart-shopping') && !event.target.matches('.cart-dropdown') && !event.target.closest('.cart-dropdown')) {
            document.getElementById('cartDropdown').classList.remove('active');
        }
    }
</script>

    <main class="contact-page">
        <div class="contact-container">
            <div class="contact-form-section">
                <span class="badge">Get in Touch</span>
                <h1>We'd love to hear from you</h1>
                <p>Have a question about our apparel or beauty services? Send us a message and our team will respond within 24 hours.</p>

                <form class="main-contact-form">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <select>
                            <option>Order Inquiry</option>
                            <option>Beauty Service Booking</option>
                            <option>General Question</option>
                            <option>Collaboration</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="5" placeholder="How can we help?"></textarea>
                    </div>
                    <button type="submit" class="btn-shop">Send Message</button>
                </form>
            </div>

            <div class="contact-info-section">
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.627791834169!2d-0.1873105!3d5.6214309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMzcnMTcuMSJOIDDCsDExJzE0LjMiVw!5e0!3m2!1sen!2sgh!4v1700000000000!5m2!1sen!2sgh" 
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
                
                <div class="info-grid">
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4>Visit Us</h4>
                            <p>123 Elegance Lane, Accra, Ghana</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-phone"></i>
                        <div>
                            <h4>Call Us</h4>
                            <p>+233 (0) 24 000 0000</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-envelope"></i>
                        <div>
                            <h4>Email Us</h4>
                            <p>hello@thryyloub.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <div class="logo">THRYVIA</div>
                <p>Curating beauty and fashion with a soulful purpose.</p>
            </div>
            <div class="footer-col">
                <h4>Support</h4>
                <a href="contact.php">Contact Us</a>
                <a href="return-policy.php">Shipping & Returns</a>
                <a href="privacy.php">Privacy Policy</a>
                <a href="terms.php">Terms & Conditions</a>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <div class="newsletter-box">
                    <input type="email" placeholder="Email Address">
                    <button>Stay Inspired</button>
                </div>
            </div>
        </div>
    </footer>

    </body>
</html>
