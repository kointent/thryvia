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


    <header class="hero">
        <div class="hero-content">
            <h1>Where Purpose <br> Meets Elegance</h1>
            <p>Thoughtfully crafted pieces and services to help you rise, thrive, and bloom with intention.</p>
            <a href="#" class="btn-shop">Shop Now</a>
        </div>
    </header>

    <section class="container">
        <h2 class="section-title">Featured Products</h2>
        <?php require 'db_connect.php'; ?>
<div class="product-grid" id="shopGrid">
    <?php
    // Fetch products from DB
    $stmt = $pdo->query("SELECT * FROM products");
    while ($row = $stmt->fetch()) {
    ?>
    <div class="product-card" data-category="<?php echo $row['category']; ?>">
        <div class="img-wrapper">
            <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
            <div class="card-overlay">
                <form action="cart_action.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $row['image_url']; ?>">
                    <button type="submit" name="add_to_cart" class="overlay-btn">Add to Cart</button>
                </form>
            </div>
        </div>
        <h3><?php echo $row['name']; ?></h3>
        <p class="price">$<?php echo $row['price']; ?></p>
    </div>
    <?php } ?>
</div>
    </section>

    <section class="editors-choice">
        <div class="split-layout">
            <div class="split-img">
                <img src="https://images.unsplash.com/photo-1596462502278-27bfdc4033c8?auto=format&fit=crop&q=80&w=800" alt="Skincare">
            </div>
            <div class="split-text">
                <span class="badge">Editor's Choice</span>
                <h2>The Radiance Ritual</h2>
                <p>Our award-winning serum combined with the morning glow moisturizer. Designed to give you a natural, glass-skin finish every single morning.</p>
                <a href="#" class="btn-shop">Shop the Set</a>
            </div>
        </div>
    </section>
    <section class="container category-section">
    <h2 class="section-title">Shop by Category</h2>
    <div class="category-grid">
        <div class="category-card">
            <div class="category-img-container">
                <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&q=80&w=400" alt="Apparel">
            </div>
            <h3>Apparel</h3>
        </div>
        <div class="category-card">
            <div class="category-img-container">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&q=80&w=400" alt="Beauty">
            </div>
            <h3>Beauty</h3>
        </div>
        <div class="category-card">
            <div class="category-img-container">
                <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&q=80&w=400" alt="Services">
            </div>
            <h3>Services</h3>
        </div>
        <div class="category-card">
            <div class="category-img-container">
                <img src="https://images.unsplash.com/photo-1513519247388-19346feb9574?auto=format&fit=crop&q=80&w=400" alt="Gifting">
            </div>
            <h3>Gifting</h3>
        </div>
    </div>
</section>

    
<section class="trust-bar">
    <div class="trust-item">
        <div class="icon-circle">
            <i class="fa-solid fa-rotate-left"></i>
        </div>
        <div class="trust-text">
            <h4>30 Days Return</h4>
            <p>Easy returns & exchanges</p>
        </div>
    </div>
    <div class="trust-item">
        <div class="icon-circle">
            <i class="fa-solid fa-truck-fast"></i>
        </div>
        <div class="trust-text">
            <h4>Nationwide Delivery</h4>
            <p>Fast shipping to your door</p>
        </div>
    </div>
    <div class="trust-item">
        <div class="icon-circle">
            <i class="fa-solid fa-shield-virus"></i> </div>
        <div class="trust-text">
            <h4>Secured MOMO Payment</h4>
            <p>Safe & encrypted transactions</p>
        </div>
    </div>
</section>


    
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


    <script>
        function toggleSearch() {
            document.getElementById('searchInput').classList.toggle('active');
        }

        function toggleMenu() {
            document.getElementById('mobileMenu').classList.toggle('active');
        }
        
        // Close mobile menu when clicking on the transparent overlay part
document.getElementById('mobileMenu').addEventListener('click', function(event) {
    if (event.target === this) {
        toggleMenu();
    }
});

    </script>
    
</body>
</html>
