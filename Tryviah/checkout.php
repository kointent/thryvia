<?php 
require 'db_connect.php'; 

// Enforce Login
if (!isset($_SESSION['user_id'])) {
    header("Location: auth.php");
    exit();
}

$total = 0;
foreach($_SESSION['cart'] as $item) {
    $total += ($item['price'] * $item['qty']);
}

// Handle Order Placement
if (isset($_POST['place_order'])) {
    $user_id = $_SESSION['user_id'];
    
    // Insert into Orders Table
    $stmt = $pdo->prepare("INSERT INTO orders (user_id, total_amount) VALUES (?, ?)");
    $stmt->execute([$user_id, $total]);
    
    // Clear Cart
    unset($_SESSION['cart']);
    
    // Redirect
    echo "<script>alert('Order Placed Successfully!'); window.location.href='account.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | THRYVIA</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #fff;">

    <header class="checkout-header">
        <div class="logo">THRYVIA</div>
        <a href="cart.html" class="back-link"><i class="fa-solid fa-chevron-left"></i> Return to Cart</a>
    </header>

    <main class="checkout-container">                <form method="POST" class="checkout-main">
    <form method="POST" class="checkout-main">

            <div class="checkout-main">
            <section class="checkout-section">
                <h3>Contact Information</h3>
             <div class="form-group"><input type="text" placeholder="Full Address" required></div>

            </section>

            <section class="checkout-section">
                <h3>Shipping Address</h3>
                <div class="form-row">
                    <div class="form-group"><input type="text" placeholder="First Name"></div>
                    <div class="form-group"><input type="text" placeholder="Last Name"></div>
                </div>
                <div class="form-group"><input type="text" placeholder="Address"></div>
                <div class="form-group"><input type="text" placeholder="City"></div>
                <div class="form-row">
                    <div class="form-group"><input type="text" placeholder="Country"></div>
                    <div class="form-group"><input type="text" placeholder="Phone Number"></div>
                </div>
            </section>

            <section class="checkout-section">
                <h3>Payment Method</h3>
                <div class="payment-options">
                    <label class="payment-card active">
                        <input type="radio" name="payment" checked>
                        <div class="payment-info">
                            <span>Mobile Money (MOMO)</span>
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                    </label>
                    <label class="payment-card">
                        <input type="radio" name="payment">
                        <div class="payment-info">
                            <span>Credit / Debit Card</span>
                            <i class="fa-regular fa-credit-card"></i>
                        </div>
                    </label>
                </div>
            </section>

            <button class="btn-shop btn-full" style="margin-top: 30px;">Complete Order</button>
            </div>

             <aside class="checkout-sidebar">
                <div class="checkout-summary-box">
                <div class="summary-item">
                    <div class="summary-img-wrap">
                        <img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?w=100" alt="item">
                        <span class="qty-badge">1</span>
                    </div>
                    <span>Hydrating Serum</span>
                    <span class="price-right">$45.00</span>
                </div>
                
                <hr class="divider">
                
                <div class="total-line">
                    <span>Subtotal</span>
                    <span>$45.00</span>
                </div>
                <div class="total-line">
                    <span>Shipping</span>
                    <span class="free-text">FREE</span>
                </div>
                <div class="total-line final-total">
                    <span>Total</span>
                    <span>$45.00</span>
                </div>
             </div>
             </aside>
    </main>

</body>
</html>
