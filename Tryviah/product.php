<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hydrating Serum | THRYVIA</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main class="product-detail-container">
        <div class="product-gallery">
            <div class="main-image">
                <img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?auto=format&fit=crop&q=80&w=800" id="currentImage" alt="Hydrating Serum">
            </div>
            <div class="thumbnail-bar">
                <img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?auto=format&fit=crop&q=80&w=150" onclick="changeImage(this.src)" alt="Thumb 1">
                <img src="https://images.unsplash.com/photo-1601049541289-9b1b7bbbfe19?auto=format&fit=crop&q=80&w=150" onclick="changeImage(this.src)" alt="Thumb 2">
                <img src="https://images.unsplash.com/photo-1608248597279-f99d160bfcbc?auto=format&fit=crop&q=80&w=150" onclick="changeImage(this.src)" alt="Thumb 3">
            </div>
        </div>

        <div class="product-info-sticky">
            <span class="badge">Skin Rituals</span>
            <h1>Hydrating Glow Serum</h1>
            <p class="product-price">$45.00</p>
            
            <div class="product-description">
                <p>A lightweight, purpose-driven serum designed to nourish your skin's natural barrier. Infused with botanical extracts to help you glow from within.</p>
                <ul>
                    <li>Dermatologist tested</li>
                    <li>Vegan & Cruelty-Free</li>
                    <li>Eco-friendly packaging</li>
                </ul>
            </div>

            <div class="purchase-options">
                <div class="quantity-selector">
                    <button onclick="updateQty(-1)">-</button>
                    <input type="number" id="qty" value="1" min="1">
                    <button onclick="updateQty(1)">+</button>
                </div>
                <button class="btn-shop btn-full">Add to Cart</button>
            </div>

            <button class="wishlist-link"><i class="fa-regular fa-heart"></i> Add to Wishlist</button>

            <div class="product-accordion">
                <details>
                    <summary>How to use</summary>
                    <p>Apply 2-3 drops onto clean, damp skin morning and night. Gently press into the face and neck until absorbed.</p>
                </details>
                <details>
                    <summary>Ingredients</summary>
                    <p>Aqua, Hyaluronic Acid, Organic Aloe Vera, Vitamin E, Botanical Blend.</p>
                </details>
            </div>
        </div>
    </main>
    
    <section class="related-products">
    <div class="container">
        <h2 class="section-title">You May Also Love</h2>
        <div class="product-grid">
            <div class="product-card" onclick="location.href='product.html'">
                <div class="img-wrapper">
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=600" alt="Body Oil">
                    <div class="card-overlay">
                        <button class="overlay-btn wishlist-btn"><i class="fa-regular fa-heart"></i> Wishlist</button>
                        <button class="overlay-btn">Add to Cart</button>
                    </div>
                </div>
                <h3>Luminous Body Oil</h3>
                <p class="price">$38.00</p>
            </div>

            <div class="product-card" onclick="location.href='product.html'">
                <div class="img-wrapper">
                    <img src="https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?w=600" alt="Cleansing Balm">
                    <div class="card-overlay">
                        <button class="overlay-btn wishlist-btn"><i class="fa-regular fa-heart"></i> Wishlist</button>
                        <button class="overlay-btn">Add to Cart</button>
                    </div>
                </div>
                <h3>Velvet Cleansing Balm</h3>
                <p class="price">$32.00</p>
            </div>

            <div class="product-card" onclick="location.href='product.html'">
                <div class="img-wrapper">
                    <img src="https://images.unsplash.com/photo-1617897903246-719242758050?w=600" alt="Tonic">
                    <div class="card-overlay">
                        <button class="overlay-btn wishlist-btn"><i class="fa-regular fa-heart"></i> Wishlist</button>
                        <button class="overlay-btn">Add to Cart</button>
                    </div>
                </div>
                <h3>Rose Petal Tonic</h3>
                <p class="price">$28.00</p>
            </div>
        </div>
    </div>
</section>


    <script>
        function changeImage(src) {
            document.getElementById('currentImage').src = src;
        }

        function updateQty(val) {
            let input = document.getElementById('qty');
            let current = parseInt(input.value);
            if(current + val >= 1) input.value = current + val;
        }
    </script>
</body>
</html>
