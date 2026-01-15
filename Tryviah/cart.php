<?php require 'db_connect.php'; 
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shopping Bag | THRYVIA</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main class="cart-page-container">
        <div class="cart-header">
            <h1>Shopping Bag</h1>
            
        </div>

        <div class="cart-content">
            <div class="cart-items-list">
                <?php if(empty($_SESSION['cart'])): ?>
                    <p>Your cart is empty. <a href="shop.php">Shop Now</a></p>
                <?php else: ?>
                    <?php foreach($_SESSION['cart'] as $id => $item): 
                        $subtotal = $item['price'] * $item['qty'];
                        $total += $subtotal;
                    ?>
                <div class="cart-table-header desktop-only">
                    <span>Product</span>
                    <span>Quantity</span>
                    <span>Total</span>
                </div>

                <div class="cart-page-item">
                    <div class="item-details">
                            <img src="<?php echo $item['image']; ?>" style="width:80px;">
                        <div>
                            <h3><?php echo $item['name']; ?></h3>
                            <button href="cart_action.php?remove=<?php echo $id; ?>" class="remove-btn">Remove</button>
                        </div>
                    </div>
                    <div class="item-qty">
                            Qty: <?php echo $item['qty']; ?>
                        
                        <div class="quantity-selector">
                            <button>-</button>
                            <input type="number" value="1">
                            <button>+</button>
                        </div>
                    
                    <div class="item-total-price">
                      $<?php echo number_format($subtotal, 2); ?>
                    </div>
                    </div>
                     <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>

             <aside class="cart-summary">
                <div class="summary-card">
                    <h3>Order Summary</h3>
                    <div class="summary-row total-row">
                        <span>Total</span>
                        <span>$<?php echo number_format($total, 2); ?></span>
                    </div>
                    <?php if(!empty($_SESSION['cart'])): ?>
                        <a href="checkout.php" class="btn-shop btn-full" style="display:block; text-align:center;">Proceed to Checkout</a>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </main>

    </body>
</html>
