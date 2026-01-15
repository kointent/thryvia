<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THRYVIA | Purposeful Elegance</title>
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

<div class="shop-header-banner">
    <h1>My Account</h1>
    <p>Manage your personal profile, addresses, and security settings.</p>
</div>

<main class="shop-container">
    <aside class="shop-sidebar">
        <div class="filter-group">
            <h3>Account Settings</h3>
            <ul class="account-nav-list">
                <!-- Added onclick handlers to switch tabs -->
                <li><a href="#" class="active" onclick="switchTab(event, 'profile-info')"><i class="fa-regular fa-circle-user"></i> Profile Info</a></li>
                <li><a href="#" onclick="switchTab(event, 'order-history')"><i class="fa-solid fa-clock-rotate-left"></i> Order History</a></li>
                <li><a href="#" onclick="switchTab(event, 'saved-addresses')"><i class="fa-regular fa-map"></i> Saved Addresses</a></li>
                <li><a href="#" onclick="switchTab(event, 'security')"><i class="fa-solid fa-shield-halved"></i> Password & Security</a></li>
                <li class="logout-item"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
            </ul>
        </div>
    </aside>

    <!-- Structural Fix: All content is now inside .account-content, and properly nested in .tab-pane divs -->
    <div class="tab-content"> 
        <div class="account-content">
            
            <!-- Tab 1: Profile Info (Previously stuck outside) -->
            <div class="tab-pane active" id="profile-info">
                <div class="account-form-wrapper">
                    <section class="form-section">
                        <h2 class="section-title">Personal Identity</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" value="Efua">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" value="Amissah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" value="efua.a@example.com" readonly class="readonly-input">
                            </div>
                            <div class="form-group">
                                <label>Primary Phone</label>
                                <input type="tel" placeholder="+233 24 000 0000">
                            </div>
                        </div>
                    </section>

                    <section class="form-section">
                        <h2 class="section-title">Primary Shipping Address</h2>
                        <div class="form-group">
                            <label>Street Address / Apartment / Suite</label>
                            <input type="text" placeholder="123 Luxury Lane, Apt 4B">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" placeholder="Accra">
                            </div>
                            <div class="form-group">
                                <label>Region / State</label>
                                <input type="text" placeholder="Greater Accra">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="styled-select">
                                    <option>Ghana</option>
                                    <option>Nigeria</option>
                                    <option>United Kingdom</option>
                                    <option>USA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Postal / Digital Address</label>
                                <input type="text" placeholder="GA-123-4567">
                            </div>
                        </div>
                    </section>

                    <section class="form-section">
                        <h2 class="section-title">Communication Preferences</h2>
                        <div class="checkbox-group">
                            <input type="checkbox" id="news" checked>
                            <label for="news">Subscribe to our weekly newsletter & collection drops</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="sms">
                            <label for="sms">Receive order updates via SMS</label>
                        </div>
                    </section>

                    <div class="form-actions">
                        <button class="btn-shop save-btn">Update Profile</button>
                        <button class="btn-text">Cancel</button>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Order History -->
            <div class="tab-pane" id="order-history">
                <div class="account-form-wrapper">
                    <h2 class="section-title">Order History</h2>
                    <div class="order-list">
                        <div class="order-card">
                            <div class="order-header">
                                <span class="order-id">#TL-8892</span>
                                <span class="order-status delivered">Delivered</span>
                            </div>
                            <div class="order-details">
                                <p>Placed on Oct 24, 2025</p>
                                <p>Total: $165.00 (2 items)</p>
                            </div>
                            <button class="btn-text">View Order Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 3: Saved Addresses -->
            <div class="tab-pane" id="saved-addresses">
                <div class="account-form-wrapper">
                    <h2 class="section-title">Saved Addresses</h2>
                    <div class="address-grid">
                        <div class="address-card primary">
                            <span class="badge">Primary</span>
                            <p><strong>Efua Amissah</strong></p>
                            <p>123 Luxury Lane, Apt 4B</p>
                            <p>Accra, Ghana</p>
                            <div class="card-actions">
                                <button class="btn-text">Edit</button>
                                <button class="btn-text">Remove</button>
                            </div>
                        </div>
                        <button class="add-address-btn"><i class="fa-solid fa-plus"></i> Add New Address</button>
                    </div>
                </div>
            </div>

            <!-- Tab 4: Security -->
            <div class="tab-pane" id="security">
                <div class="account-form-wrapper">
                    <h2 class="section-title">Password & Security</h2>
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password">
                    </div>
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password">
                    </div>
                    <button class="btn-shop">Change Password</button>
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

<script src="script.js"></script>
</body>
</html>