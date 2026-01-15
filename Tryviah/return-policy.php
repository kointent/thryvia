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
        .policy-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
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
        .shipping-card {
            background: #f9f8f6;
            padding: 25px;
            border-radius: 4px;
        }
        .shipping-card h4 {
            margin-bottom: 10px;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            color: #888;
        }
        @media (max-width: 768px) {
            .policy-grid { grid-template-columns: 1fr; }
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
            <h1>Shipping & Returns</h1>
            <p>Our commitment to your seamless experience.</p>
        </header>

        <div class="legal-content">
            <section>
                <h3>1. Shipping Information</h3>
                <p>We take great care in packaging your curated items to ensure they arrive in pristine condition. All orders are processed within 24–48 hours.</p>
                
                <div class="policy-grid">
                    <div class="shipping-card">
                        <h4>Local (Within Ghana)</h4>
                        <ul>
                            <li><strong>Accra/Tema:</strong> Same or Next Day Delivery.</li>
                            <li><strong>Regional:</strong> 2–3 Business Days.</li>
                            <li><strong>Rate:</strong> Calculated at checkout based on location.</li>
                        </ul>
                    </div>
                    <div class="shipping-card">
                        <h4>International</h4>
                        <ul>
                            <li><strong>Method:</strong> DHL Express / FedEx.</li>
                            <li><strong>Timeline:</strong> 5–7 Business Days.</li>
                            <li><strong>Note:</strong> Customs duties/taxes are the responsibility of the recipient.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <h3>2. Return & Exchange Policy</h3>
                <p>If you are not entirely satisfied with your purchase, we are here to help. Due to the curated nature of our products, the following conditions apply:</p>
                <ul>
                    <li><strong>Eligibility:</strong> Items must be returned within 7 days of receipt.</li>
                    <li><strong>Condition:</strong> Products must be unused, in original packaging, and with all tags attached.</li>
                    <li><strong>Hygiene Note:</strong> For health and safety, beauty products (serums, oils) and earrings cannot be returned once the seal is broken or the item is worn.</li>
                </ul>
            </section>

            <section>
                <h3>3. Refund Process</h3>
                <p>Once we receive and inspect your returned item, we will notify you of the approval or rejection of your refund. Approved refunds will be processed to your original payment method (Mobile Money or Bank Card) within 5–10 business days.</p>
            </section>

            <section>
                <h3>4. Damaged Items</h3>
                <p>In the rare event that an item arrives damaged, please email <strong>concierge@thryvia.com</strong> within 24 hours of delivery with photos of the damage and your order number. We will arrange a priority replacement at no extra cost.</p>
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
