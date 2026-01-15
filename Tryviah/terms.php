<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THRYVIA | Purposeful Elegance</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        .legal-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
            line-height: 1.8;
            color: var(--text);
        }
        .legal-header {
            text-align: center;
            margin-bottom: 50px;
        }
        .legal-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .legal-content section {
            margin-bottom: 40px;
        }
        .legal-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            margin-bottom: 15px;
            border-bottom: 1px solid #e0ddd7;
            padding-bottom: 10px;
            color: var(--accent);
        }
        .last-updated {
            font-size: 0.9rem;
            color: #888;
            font-style: italic;
        }
        .legal-content ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }
        .legal-content li {
            margin-bottom: 10px;
        }
    </style>
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

        <button class="btn-signup desktop-only">Sign Up</button>
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

<main class="legal-container">
        <header class="legal-header">
            <h1>Terms & Conditions</h1>
            <p class="last-updated">Last Updated: January 14, 2026</p>
        </header>

        <div class="legal-content">
            <section>
                <h3>1. Agreement to Terms</h3>
                <p>By accessing or using the THRYVIA website ([Your URL]), you agree to be bound by these Terms and Conditions and our Privacy Policy. If you do not agree with any part of these terms, you are prohibited from using this site.</p>
            </section>

            <section>
                <h3>2. Intellectual Property Rights</h3>
                <p>Unless otherwise stated, THRYVIA and/or its licensors own the intellectual property rights for all material on this website. This includes, but is not limited to, logos, design, text, graphics, and software. You may view and print pages for personal use, but you must not:</p>
                <ul>
                    <li>Republish or redistribute material from THRYVIA.</li>
                    <li>Sell, rent, or sub-license website content.</li>
                    <li>Reproduce or duplicate material for commercial purposes.</li>
                </ul>
            </section>

            <section>
                <h3>3. User Accounts</h3>
                <p>When you create an account with us, you guarantee that the information you provide is accurate and current. You are responsible for maintaining the confidentiality of your account and password. We reserve the right to terminate accounts or cancel orders at our sole discretion if these terms are violated.</p>
            </section>

            <section>
                <h3>4. Products and Pricing</h3>
                <p>All products are subject to availability. We reserve the right to limit the quantities of any products or services that we offer. While we strive for accuracy, errors in pricing or description may occur. In the event of an error, THRYVIA reserves the right to cancel any orders placed for the incorrectly priced item.</p>
                <ul>
                    <li><strong>Currency:</strong> All prices are displayed in [USD/GHS].</li>
                    <li><strong>Payments:</strong> We support Credit/Debit cards and Secured Mobile Money (MOMO) transactions.</li>
                </ul>
            </section>

            <section>
                <h3>5. Shipping & Delivery</h3>
                <p>Shipping lead times are estimates. THRYVIA is not responsible for delays caused by third-party carriers or customs clearance. Risk of loss passes to you upon delivery of the items to the carrier.</p>
            </section>

            <section>
                <h3>6. Limitation of Liability</h3>
                <p>In no event shall THRYVIA, nor any of its officers, directors, and employees, be held liable for anything arising out of or in any way connected with your use of this website. THRYVIA shall not be held liable for any indirect, consequential, or special liability arising out of your use of our products.</p>
            </section>

            <section>
                <h3>7. Governing Law</h3>
                <p>These Terms shall be governed by and defined following the laws of <strong>Ghana</strong>. THRYVIA and yourself irrevocably consent that the courts of Ghana shall have exclusive jurisdiction to resolve any dispute which may arise in connection with these terms.</p>
            </section>

            <section>
                <h3>8. Contact Us</h3>
                <p>If you have any questions about these Terms, please contact our support team at:</p>
                <p><strong>Email:</strong> support@thryvia.com<br>
                <strong>Address:</strong> 123 Elegance Lane, Accra, Ghana</p>
            </section>
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
