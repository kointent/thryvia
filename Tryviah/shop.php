<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop All | THRYVIA</title>
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

    <div class="shop-header-banner">
        <h1>All Products</h1>
        <p>Curated elegance for your lifestyle</p>
    </div>

    <main class="shop-container">
<aside class="shop-sidebar">
<div class="filter-group">
    <h3>Category</h3>
    <div class="custom-select-wrapper">
        <select class="styled-select" onchange="filterProducts(this.value)">
            <option value="all">All Items</option>
            <option value="apparel">Apparel</option>
            <option value="beauty">Beauty</option>
            <option value="accessories">Accessories</option>
            <option value="services">Services</option>
        </select>
    </div>
</div>


    <div class="filter-group">
        <h3>Sort By</h3>
        <div class="custom-select-wrapper">
            <select class="styled-select">
                <option>Newest First</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
            </select>
        </div>
    </div>
</aside>


        <div class="shop-results">
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



    <script>
        function filterProducts(category) {
            const cards = document.querySelectorAll('.product-card');
            const buttons = document.querySelectorAll('.filter-btn');

            // Update Active Button
            buttons.forEach(btn => {
                btn.classList.remove('active');
                if(btn.innerText.toLowerCase() === category || (category === 'all' && btn.innerText === 'All Items')) {
                    btn.classList.add('active');
                }
            });

            // Filter Logic
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
