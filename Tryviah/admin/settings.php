<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | THRYVIA</title>
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
                <li><a href="customers.php"><i class="fa-solid fa-users"></i> Customers</a></li>
                <li class="active"><a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a></li>
            </ul>
            <div class="sidebar-footer">
                <a href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
        </aside>

        <main class="admin-main">
            <header class="admin-header">
                <h2>Store Settings</h2>
                <button class="btn-shop" onclick="saveAllSettings()">Save Changes</button>
            </header>

            <div class="settings-container">
                <aside class="settings-nav">
                    <button class="s-nav-btn active" onclick="showTab('payments')">Payments</button>
                    <button class="s-nav-btn" onclick="showTab('admins')">Platform Admins</button>
                    <button class="s-nav-btn" onclick="showTab('coupons')">Coupons</button>
                    <button class="s-nav-btn" onclick="showTab('curation')">Storefront Curation</button>
                    <button class="s-nav-btn" onclick="showTab('shipping')">Shipping & Delivery</button>
                    <button class="s-nav-btn" onclick="showTab('newsletter')">Newsletter & Marketing</button>
                    <button class="s-nav-btn" onclick="showTab('general')">General Info</button>
                </aside>

                <div class="settings-content">
                    
                    <section id="newsletter" class="settings-pane">
    <header class="box-header">
        <div>
            <h3>Newsletter Subscribers</h3>
            <p class="section-desc">Manage your community and marketing reach.</p>
        </div>
        <button class="btn-signup"><i class="fa-solid fa-download"></i> Export CSV</button>
    </header>

    <div class="admin-stats" style="grid-template-columns: repeat(2, 1fr); margin-bottom: 25px;">
        <div class="stat-card">
            <p>Total Subscribers</p>
            <h3>1,284</h3>
            <span class="trend">+12% this month</span>
        </div>
        <div class="stat-card">
            <p>Avg. Open Rate</p>
            <h3>42.5%</h3>
            <span class="trend">Industry Avg: 25%</span>
        </div>
    </div>

    <div class="admin-content-box">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Email Address</th>
                    <th>Date Joined</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>mina.k@example.com</td>
                    <td>Oct 24, 2025</td>
                    <td><span class="status-badge completed">Subscribed</span></td>
                    <td><button class="remove-btn">Unsubscribe</button></td>
                </tr>
                <tr>
                    <td>ama.boutique@gmail.com</td>
                    <td>Oct 22, 2025</td>
                    <td><span class="status-badge completed">Subscribed</span></td>
                    <td><button class="remove-btn">Unsubscribe</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="welcome-builder-card">
    <div class="builder-header">
        <div>
            <h4><i class="fa-solid fa-wand-magic-sparkles"></i> Welcome Ritual Email</h4>
            <p class="section-desc">The first message a customer receives after joining the community.</p>
        </div>
        <label class="switch"><input type="checkbox" checked><span class="slider-toggle"></span></label>
    </div>

    <div class="builder-layout">
        <div class="builder-inputs">
    <div class="form-group">
        <label>Subject Line</label>
        <input type="text" value="Welcome to the THRYVIA Community — Your Gift Inside.">
    </div>
    
    <div class="form-group">
        <label>Header Image URL</label>
        <div class="input-with-action">
            <input type="text" value="https://images.unsplash.com/photo-1596462502278-27bfdc4033c8?w=800">
            <button class="small-action-btn">Browse Library</button>
        </div>
    </div>

    <div class="form-group">
        <label>Email Body Copy</label>
        <textarea rows="6" id="emailBody" placeholder="Type your welcome ritual here...">Thank you for joining our community of purposeful elegance...</textarea>
    </div>
</div>

        <div class="email-preview-mobile">
            <div class="mobile-frame">
                <div class="email-content-preview">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc4033c8?w=400" class="preview-img">
                    <div class="preview-text">
                        <h2 style="font-family: 'Playfair Display', serif; font-size: 1.2rem; margin-bottom: 15px;">Welcome to the Family</h2>
                        <p id="bodyPreview">Thank you for joining our community of purposeful elegance...</p>
                        <div class="preview-button">Shop the Collection</div>
                    </div>
                    <div class="preview-footer">
                        © 2026 THRYY/LOUB. Unsubscribe.
                    </div>
                </div>
            </div>
            <p class="preview-label">Live Mobile Preview</p>
        </div>
    </div>
</div>
</section>
                    <section id="payments" class="settings-pane active">
                        <h3>Payment Gateways</h3>
                        <div class="gateway-card">
                            <div class="gateway-header">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd5cmdwOs2lqhgYXFFsNgbj-SowHmz5Owo-Q&s" alt="Paystack" style="height: 20px;">
                                <label class="switch"><input type="checkbox" checked><span class="slider-toggle"></span></label>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Public Key</label><input type="text" placeholder="pk_live_xxxx"></div>
                                <div class="form-group"><label>Secret Key</label><input type="password" placeholder="sk_live_xxxx"></div>
                            </div>
                        </div>

                        <div class="gateway-card">
                            <div class="gateway-header">
                                <img src="https://flutterwave.com/images/logo/full.svg" alt="Flutterwave" style="height: 20px;">
                                <label class="switch"><input type="checkbox"><span class="slider-toggle"></span></label>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Public Key</label><input type="text" placeholder="FLWPUBK-xxxx"></div>
                                <div class="form-group"><label>Secret Key</label><input type="password" placeholder="FLWSECK-xxxx"></div>
                            </div>
                        </div>
                    </section>

                    <section id="shipping" class="settings-pane">
    <div class="box-header">
        <h3>Shipping & Delivery</h3>
        <p class="section-desc">Configure how you charge for shipping and delivery zones.</p>
    </div>

    <div class="gateway-card">
        <div class="gateway-header">
            <h4><i class="fa-solid fa-truck-fast"></i> Global Shipping</h4>
            <label class="switch"><input type="checkbox" checked><span class="slider-toggle"></span></label>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Standard Shipping Fee ($)</label>
                <input type="number" value="10.00" placeholder="0.00">
            </div>
            <div class="form-group">
                <label>Free Shipping Threshold ($)</label>
                <input type="number" value="100.00" placeholder="e.g. 100">
                <small>Orders above this amount ship free.</small>
            </div>
        </div>
    </div>

    <div class="gateway-card">
        <div class="gateway-header">
            <h4><i class="fa-solid fa-location-dot"></i> Local Delivery (Accra)</h4>
            <label class="switch"><input type="checkbox" checked><span class="slider-toggle"></span></label>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Local Delivery Fee</label>
                <input type="number" value="5.00">
            </div>
            <div class="form-group">
                <label>Estimated Delivery Time</label>
                <input type="text" value="24 - 48 Hours">
            </div>
        </div>
    </div>
</section>

                    <section id="admins" class="settings-pane">
                        <div class="box-header">
                            <h3>Team Management</h3>
                            <button class="btn-signup" onclick="toggleSlider('adminSlider')">+ Add Member</button>
                        </div>
                        <div class="admin-list-mini">
 <div class="admin-row">
    <div class="admin-info">
        <div class="user-avatar">AD</div>
        <div>
            <p><strong class="admin-name-link" onclick="openEditAdminSlider('Admin User', 'admin@thryvia.com', 'Super Admin')">Admin User</strong></p>
            <span class="admin-meta">Super Admin • Active</span>
        </div>
    </div>
    <button class="remove-btn" onclick="openEditAdminSlider('Admin User', 'admin@thryvia.com', 'Super Admin')">Edit</button>
</div>
                        </div>
                    </section>

                    <section id="coupons" class="settings-pane">
                        <div class="box-header">
                            <h3>Discount Codes</h3>
                            <button class="btn-signup" onclick="toggleSlider('couponSlider')">+ Create New</button>
                        </div>
                        <table class="admin-table">
                            <thead><tr><th>Code</th><th>Discount</th><th>Usage</th><th>Status</th><th>Action</th></tr></thead>
                            <tbody>
                                <tr>
                                    <td><strong>WELCOME20</strong></td>
                                    <td>20% Off</td>
                                    <td>45/100</td>
                                    <td><span class="status-badge completed">Active</span></td>
                                    <td><button class="detail-link" onclick="toggleSlider('couponSlider')">Edit</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <section id="curation" class="settings-pane">
                        <h3>Visual Curation</h3>
                        <div class="curation-grid">
                            <div class="curation-card">
                                <div class="curation-image-placeholder"><i class="fa-solid fa-images"></i><span>Hero Banner</span></div>
                                <div class="curation-details">
                                    <label>Link to Collection</label>
                                    <select class="styled-select"><option>New Arrivals</option><option>Beauty</option></select>
                                    <button class="btn-action change-btn" style="margin-top:10px; width:100%;">Change Image</button>
                                </div>
                            </div>
                            <div class="curation-card">
                                <div class="curation-image-placeholder"><i class="fa-solid fa-star"></i><span>Editor's Choice</span></div>
                                <div class="curation-details">
                                    <label>Selected Product IDs</label>
                                    <input type="text" placeholder="102, 105, 110">
                                    <button class="btn-action change-btn" style="margin-top:10px; width:100%;">Save Selection</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="general" class="settings-pane">
                        <h3>Store Identity</h3>
                        <div class="form-group">
                            <label>Announcement Bar Text</label>
                            <input type="text" value="Free shipping on beauty orders over $50">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Currency</label>
                                <select class="styled-select"><option>USD ($)</option><option>GHS (₵)</option></select>
                            </div>
                            <div class="form-group">
                                <label>Low Stock Alert Level</label>
                                <input type="number" value="5">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tax Rate (%)</label>
                            <input type="number" value="0">
                        </div>
                    </section>

                </div>
            </div>
        </main>
    </div>

    

    <div class="order-drawer-overlay" id="couponOverlay" onclick="toggleSlider('couponSlider')"></div>
    <div class="order-drawer" id="couponSlider">
        <div class="drawer-header"><h3>Manage Coupon</h3><i class="fa-solid fa-xmark" onclick="toggleSlider('couponSlider')"></i></div>
        <div class="drawer-content">
            <div class="form-group"><label>Coupon Code</label><input type="text"></div>
            <div class="form-row">
                <div class="form-group"><label>Discount %</label><input type="number"></div>
                <div class="form-group"><label>Limit</label><input type="number"></div>
            </div>
            <div class="status-box-drawer">
                <label class="admin-label">Actions</label>
                <div class="drawer-actions-row">
                    <button class="btn-action pause"><i class="fa-solid fa-pause"></i> Pause</button>
                    <button class="btn-action delete"><i class="fa-solid fa-trash"></i> Delete</button>
                </div>
            </div>
            <button class="btn-shop btn-full">Save Changes</button>
        </div>
    </div>

<div class="order-drawer-overlay" id="adminOverlay" onclick="toggleSlider('adminOverlay')"></div>

<div class="order-drawer-overlay" id="adminOverlay" onclick="toggleSlider('adminSlider')"></div>

<div class="order-drawer" id="adminSlider">
    <div class="drawer-header">
        <h3 id="adminSliderTitle">Add Team Member</h3>
        <i class="fa-solid fa-xmark" onclick="toggleSlider('adminSlider')"></i>
    </div>
    <div class="drawer-content">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" id="adminNameInput">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" id="adminEmailInput">
        </div>
        <div class="form-group" id="adminPasswordGroup">
            <label>Password</label>
            <input type="password">
        </div>
        <div class="form-group">
            <label>Role</label>
            <select class="styled-select" id="adminRoleInput">
                <option value="Manager">Manager</option>
                <option value="Super Admin">Super Admin</option>
            </select>
        </div>

        <div id="editAdminActions" class="status-box-drawer" style="display:none;">
            <label class="admin-label">Account Security</label>
            <div class="drawer-actions-row">
                <button class="btn-action"><i class="fa-solid fa-key"></i> Reset Password</button>
                <button class="btn-action delete"><i class="fa-solid fa-user-slash"></i> Deactivate</button>
            </div>
        </div>

        <button class="btn-shop btn-full" id="adminSubmitBtn">Create Account</button>
    </div>
</div>
<script src="admin-script.js"></script>

</body>
</html>