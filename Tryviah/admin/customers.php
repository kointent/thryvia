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
                <li><a href="orders.php"><i class="fa-solid fa-receipt"></i> Orders</a></li>
                <li class="active"><a href="customers.php"><i class="fa-solid fa-users"></i> Customers</a></li>
                <li><a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a></li>
            </ul>
            <div class="sidebar-footer">
                <a href="index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
        </aside>

<main class="admin-main">
    <header class="admin-header">
        <div>
            <h2>Customers</h2>
            <p style="color: #999; font-size: 0.85rem;">Manage your community and view their purchase history.</p>
        </div>
    </header>

    <div class="admin-content-box">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Orders</th>
                    <th>Total Spend</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="customer-cell">
                        <div class="user-avatar">EA</div>
                        <strong>Efua Amissah</strong>
                    </td>
                    <td>efua.a@example.com</td>
                    <td>Accra, GH</td>
                    <td>4 Orders</td>
                    <td>$420.00</td>
                    <td><button class="detail-link" onclick="openCustomerProfile()">View Profile</button></td>
                </tr>
                <tr>
                    <td class="customer-cell">
                        <div class="user-avatar" style="background: #D1CDC7;">KB</div>
                        <strong>Kwame Boateng</strong>
                    </td>
                    <td>k.boateng@example.com</td>
                    <td>Kumasi, GH</td>
                    <td>1 Order</td>
                    <td>$45.00</td>
                    <td><button class="detail-link">View Profile</button></td>
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

<div class="order-drawer-overlay" id="customerOverlay" onclick="toggleSlider('customerSlider')"></div>

<div class="order-drawer" id="customerSlider">
    <div class="drawer-header">
        <h3>Customer Profile</h3>
        <i class="fa-solid fa-xmark" onclick="toggleSlider('customerSlider')"></i>
    </div>

    <div class="drawer-content">
        <div class="profile-main-info">
            <div class="user-avatar large">EA</div>
            <h4 id="profileName">Efua Amissah</h4>
            <p>Customer since Oct 2025</p>
        </div>

        <div class="stats-grid-mini">
            <div class="mini-stat"><span>Total Spent</span><strong>$420.00</strong></div>
            <div class="mini-stat"><span>Orders</span><strong>4</strong></div>
        </div>

        <section class="drawer-section">
            <label class="admin-label">Contact Details</label>
            <p class="detail-text"><i class="fa-regular fa-envelope"></i> <span id="profileEmail">efua.a@example.com</span></p>
            <p class="detail-text"><i class="fa-solid fa-phone"></i> +233 24 000 0000</p>
        </section>

        <button class="btn-shop btn-full" style="margin-top: 30px;" onclick="openEmailSlider()">
            <i class="fa-regular fa-envelope"></i> Send Email
        </button>   
    </div>
</div>

<div class="order-drawer-overlay" id="emailOverlay" onclick="toggleSlider('emailSlider')" style="z-index: 6000;"></div>
<div class="order-drawer" id="emailSlider" style="z-index: 6001;">
    <div class="drawer-header">
        <h3>Compose Email</h3>
        <i class="fa-solid fa-xmark" onclick="toggleSlider('emailSlider')"></i>
    </div>
    <div class="drawer-content">
        <div class="form-group">
            <label>Recipient</label>
            <input type="text" id="emailRecipient" readonly style="background: #f4f4f4;">
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" id="emailSubject" placeholder="e.g. Special Discount for you!">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea id="emailBody" rows="10" placeholder="Type your message here..." style="width: 100%; padding: 12px; border: 1px solid #e0ddd7; border-radius: 8px; font-family: inherit;"></textarea>
        </div>
        
        <div class="status-box-drawer" style="margin-bottom: 20px;">
            <label class="admin-label">Quick Actions</label>
            <div class="drawer-actions-row">
                <button class="btn-action"><i class="fa-solid fa-paperclip"></i> Attachment</button>
                <button class="btn-action"><i class="fa-solid fa-ticket"></i> Add Coupon</button>
            </div>
        </div>

        <button class="btn-shop btn-full" onclick="sendEmailAction()">Send Message</button>
    </div>
</div>
    </div>
<script src="admin-script.js"></script>

</body>
</html>