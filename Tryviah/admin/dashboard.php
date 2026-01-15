<!DOCTYPE .php>
<.php lang="en">
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
                <li class="active"><a href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="admin-products.php"><i class="fa-solid fa-box"></i> Products</a></li>
                <li><a href="orders.php"><i class="fa-solid fa-receipt"></i> Orders</a></li>
                <li><a href="customers.php"><i class="fa-solid fa-users"></i> Customers</a></li>
                <li><a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a></li>
            </ul>
            <div class="sidebar-footer">
                <a href="index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
        </aside>

        <main class="admin-main">
            <header class="admin-header">
                <h2>Overview</h2>
                <div class="admin-user">
                    <span>Admin User</span>
                    <div class="user-avatar">A</div>
                </div>
            </header>

            <div class="admin-stats">
                <div class="stat-card">
                    <p>Total Revenue</p>
                    <h3>$12,840.00</h3>
                    <span class="trend">+12% this month</span>
                </div>
                <div class="stat-card">
                    <p>Total Orders</p>
                    <h3>154</h3>
                    <span class="trend">+5% this week</span>
                </div>
                <div class="stat-card">
                    <p>New Customers</p>
                    <h3>48</h3>
                    <span class="trend">+18% this month</span>
                </div>
            </div>

            <div class="admin-content-box">
                <div class="box-header">
                    <h3>Recent Orders</h3>
                    <button class="btn-signup">View All</button>
                </div>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1024</td>
                            <td>Abena Mansa</td>
                            <td><span class="status-badge paid">Paid</span></td>
                            <td>$120.00</td>
                        </tr>
                        <tr>
                            <td>#1023</td>
                            <td>Kofi Mensah</td>
                            <td><span class="status-badge pending">Pending</span></td>
                            <td>$85.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
<script src="admin-script.js"></script>

</body>
</.php>