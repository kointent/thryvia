<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | THRYVIA</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="admin-body">

    <div class="admin-container">
        <div class="mobile-admin-nav">
    <div class="logo">THRYVIA</div>
    <div class="menu-toggle" onclick="toggleSidebar()">
        <i class="fa-solid fa-bars"></i>
    </div>
</div>
        <aside class="admin-sidebar">
            <div class="logo">THRYVIA</div>
            <p class="admin-label">Management</p>
            <ul class="admin-nav">
                <li><a href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="admin-products.php"><i class="fa-solid fa-box"></i> Products</a></li>
                <li class="active"><a href="orders.php"><i class="fa-solid fa-receipt"></i> Orders</a></li>
                <li><a href="customers.php"><i class="fa-solid fa-users"></i> Customers</a></li>
                <li><a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a></li>
            </ul>
            <div class="sidebar-footer">
                <a href="index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
        </aside>

<main class="admin-main">
    <header class="admin-header">
        <div>
            <h2>Orders</h2>
            <p style="color: #999; font-size: 0.85rem;">Manage your store's sales and fulfillment.</p>
        </div>
        <div class="header-actions">
            <div class="search-container" style="display: flex; align-items: center; border-bottom: 1px solid #e0ddd7;">
                <input type="text" placeholder="Search Order ID..." style="border:none; padding: 10px; background: transparent;">
                <i class="fa-solid fa-magnifying-glass" style="color: #9A8272;"></i>
            </div>
        </div>
    </header>

    <div class="order-tabs">
    <button class="tab-btn active" onclick="filterOrders('all', this)">All Orders</button>
    <button class="tab-btn" onclick="filterOrders('pending', this)">Pending</button>
    <button class="tab-btn" onclick="filterOrders('shipped', this)">Shipped</button>
    <button class="tab-btn" onclick="filterOrders('completed', this)">Completed</button>
</div>

    <div class="admin-content-box">
        <table class="admin-table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Items</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr class="pending">
            <td>Oct 24, 2025</td>
            <td><strong>#TL-8892</strong></td>
            <td>Efua Amissah</td>
            <td>2 Items</td>
            <td>$165.00</td>
            <td><span class="status-badge pending">Pending</span></td>
            <td><button class="detail-link" onclick="openOrderDetails()">View Details</button></td>
        </tr>

        <tr class="shipped">
            <td>Oct 23, 2025</td>
            <td><strong>#TL-8891</strong></td>
            <td>Kwame Boateng</td>
            <td>1 Item</td>
            <td>$45.00</td>
            <td><span class="status-badge shipped">Shipped</span></td>
            <td><button class="detail-link" onclick="openOrderDetails()">View Details</button></td>
        </tr>

        <tr class="completed">
            <td>Oct 22, 2025</td>
            <td><strong>#TL-8890</strong></td>
            <td>Sarah Mensah</td>
            <td>3 Items</td>
            <td>$210.00</td>
            <td><span class="status-badge completed">Completed</span></td>
            <td><button class="detail-link" onclick="openOrderDetails()">View Details</button></td>
        </tr>
    </tbody>
</table>
    </div>
</main>

<div class="admin-modal-overlay" id="productModal">
    <div class="admin-modal-content">
        <div class="modal-header">
            <h3>Add New Product</h3>
            <i class="fa-solid fa-xmark" onclick="toggleProductModal()" style="cursor:pointer"></i>
        </div>
        <form class="admin-form">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" placeholder="e.g. Silk Wrap Dress">
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Category</label>
                    <select class="styled-select" style="border: 1px solid #e0ddd7; padding: 10px;">
                        <option>Apparel</option>
                        <option>Beauty</option>
                        <option>Accessories</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Price ($)</label>
                    <input type="number" placeholder="0.00">
                </div>
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <textarea rows="4" placeholder="Describe the item..."></textarea>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <div class="image-upload-box">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Click to upload or drag and drop</span>
                    <input type="file" hidden>
                </div>
            </div>
            <button type="submit" class="btn-shop btn-full">Publish Product</button>
        </form>
    </div>
</div>

<div class="order-drawer-overlay" id="orderDrawerOverlay" onclick="closeOrderDrawer()"></div>
<div class="order-drawer" id="orderDrawer">
    <div class="drawer-header">
        <h3>Order Details <span id="displayOrderID">#TL-8892</span></h3>
        <i class="fa-solid fa-xmark" onclick="closeOrderDrawer()"></i>
    </div>

    <div class="drawer-content">
        <section class="drawer-section">
            <label class="admin-label">Customer Info</label>
            <div class="customer-info-card">
                <p><strong>Efua Amissah</strong></p>
                <p>efua.a@example.com</p>
                <p>+233 24 000 0000</p>
            </div>
        </section>

        <section class="drawer-section">
            <label class="admin-label">Shipping Address</label>
            <p class="address-text">12 Elegance Lane, East Legon<br>Accra, Ghana</p>
        </section>

        <section class="drawer-section">
            <label class="admin-label">Items Purchased</label>
            <div class="drawer-item">
                <img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?w=100" alt="item">
                <div class="item-meta">
                    <p>Hydrating Glow Serum</p>
                    <span>Qty: 1 | $45.00</span>
                </div>
            </div>
            <div class="drawer-item">
                <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=100" alt="item">
                <div class="item-meta">
                    <p>Silk Slip Dress (Sand, M)</p>
                    <span>Qty: 1 | $120.00</span>
                </div>
            </div>
        </section>

        <section class="drawer-section fulfillment-box">
            <div class="summary-row"><span>Subtotal</span> <span>$165.00</span></div>
            <div class="summary-row"><span>Shipping</span> <span>FREE</span></div>
            <div class="summary-row total"><span>Total</span> <span>$165.00</span></div>
            
            <div class="status-update">
                <label class="admin-label">Update Status</label>
                <select class="styled-select" style="border: 1px solid #e0ddd7; padding: 10px;">
                    <option>Processing</option>
                    <option>Shipped</option>
                    <option>Delivered</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <button class="btn-shop btn-full">Save Changes</button>
        </section>
    </div>
</div>

    </div>
<script src="admin-script.js"></script>

</body>
</html>