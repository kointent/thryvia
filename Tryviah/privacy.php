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
        .highlight-box {
            background: #f9f8f6;
            padding: 20px;
            border-left: 3px solid var(--accent);
            margin: 20px 0;
            font-size: 0.95rem;
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
            <h1>Privacy Policy</h1>
            <p class="last-updated">Last Updated: January 14, 2026</p>
        </header>

        <div class="legal-content">
            <section>
                <h3>1. Introduction</h3>
                <p>Welcome to THRYVIA. We respect your privacy and are committed to protecting your personal data. This Privacy Policy outlines how we collect, use, and safeguard your information when you visit our website and purchase our curated beauty and fashion products.</p>
            </section>

            <section>
                <h3>2. Information We Collect</h3>
                <p>We collect information to provide better services to all our users. The types of information we collect include:</p>
                <ul>
                    <li><strong>Identity Data:</strong> Name, username, or similar identifier.</li>
                    <li><strong>Contact Data:</strong> Billing address, delivery address, email address, and telephone numbers.</li>
                    <li><strong>Financial Data:</strong> While we use third-party processors for MOMO and card payments, we may collect transaction history and basic payment preferences.</li>
                    <li><strong>Technical Data:</strong> IP address, browser type, time zone setting, and location data.</li>
                    <li><strong>Usage Data:</strong> Information about how you use our website, products, and services.</li>
                </ul>
            </section>

            <section>
                <h3>3. How We Use Your Data</h3>
                <p>THRYVIA uses your data only when the law allows us to. Most commonly, we use it for:</p>
                <ul>
                    <li><strong>Order Fulfillment:</strong> Processing your payment, arranging shipping, and providing you with invoices/order confirmations.</li>
                    <li><strong>Customer Support:</strong> Responding to your inquiries via our contact forms.</li>
                    <li><strong>Marketing:</strong> Sending you newsletters or "Style Inspiration" if you have opted-in.</li>
                    <li><strong>Site Improvement:</strong> Using analytics to understand how users interact with our shop to improve the user experience.</li>
                </ul>
            </section>

            <section>
                <h3>4. Data Security</h3>
                <div class="highlight-box">
                    <strong>Payment Security:</strong> We do not store full credit card numbers or MOMO PINs on our servers. All financial transactions are processed through encrypted, PCI-compliant gateways to ensure your financial safety.
                </div>
                <p>We have put in place appropriate security measures to prevent your personal data from being accidentally lost, used, or accessed in an unauthorized way. We limit access to your personal data to those employees and third parties who have a business need to know.</p>
            </section>

            <section>
                <h3>5. Sharing Your Information</h3>
                <p>We do not sell your personal data. We may share your data with trusted third parties to facilitate our services:</p>
                <ul>
                    <li><strong>Delivery Partners:</strong> Logistics companies in Ghana and internationally to deliver your orders.</li>
                    <li><strong>Service Providers:</strong> IT and administration services that help us run our website.</li>
                    <li><strong>Legal Obligations:</strong> If required by the laws of Ghana to comply with legal processes.</li>
                </ul>
            </section>

            <section>
                <h3>6. Your Legal Rights</h3>
                <p>Under certain circumstances, you have rights under data protection laws in relation to your personal data, including the right to:</p>
                <ul>
                    <li>Request access to your personal data.</li>
                    <li>Request correction of your personal data.</li>
                    <li>Request erasure of your personal data.</li>
                    <li>Object to processing or request restriction of processing.</li>
                </ul>
                <p>To exercise any of these rights, please contact us at <strong>privacy@thryvia.com</strong>.</p>
            </section>

            <section>
                <h3>7. Changes to This Policy</h3>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date at the top.</p>
            </section>

            <section>
                <h3>8. Contact Information</h3>
                <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us:</p>
                <p><strong>Email:</strong> privacy@thryvia.com<br>
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
