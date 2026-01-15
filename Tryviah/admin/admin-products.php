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
                <li class="active"><a href="#"><i class="fa-solid fa-box"></i> Products</a></li>
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
        <h2>Product Management</h2>
        <button class="btn-signup" onclick="openAddProductSlider()">+Add New Product</button>
    </header>

    <div class="admin-content-box">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?w=50" class="admin-thumb"></td>
                    <td>Hydrating Glow Serum</td>
                    <td>Beauty</td>
                    <td>$45.00</td>
                    <td>24 In Stock</td>
                    <td><button class="remove-btn" onclick="openEditProductSlider('Silk Dress', 'Apparel', '120.00', 'Luxurious silk wrap dress...')">
            Edit
        </button></td>
                </tr>
                <tr>
                    <td><img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?w=50" class="admin-thumb"></td>
                    <td>Hydrating Glow Serum</td>
                    <td>Beauty</td>
                    <td>$45.00</td>
                    <td>24 In Stock</td>
                    <td><button class="remove-btn" onclick="openEditProductSlider('Silk Dress', 'Apparel', '120.00', 'Luxurious silk wrap dress...')">
            Edit
        </button></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
<div class="order-drawer-overlay" id="productOverlay" onclick="toggleSlider('productSlider')"></div>

<div class="order-drawer" id="productSlider">
    <div class="drawer-header">
        <h3 id="productSliderTitle">Add New Product</h3>
        <i class="fa-solid fa-xmark" onclick="toggleSlider('productSlider')"></i>
    </div>
    <div class="drawer-content">
        <form id="productForm">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" id="pNameInput" placeholder="e.g. Silk Wrap Dress">
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Category</label>
                    <select class="styled-select" id="pCategoryInput">
                        <option value="Apparel">Apparel</option>
                        <option value="Beauty">Beauty</option>
                        <option value="Accessories">Accessories</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Price ($)</label>
                    <input type="number" id="pPriceInput" placeholder="0.00">
                </div>
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <textarea id="pDescInput" rows="4" placeholder="Describe the item..."></textarea>
            </div>
            
            <div class="form-group">
    <label>Main Product Image</label>
    <div class="image-upload-box main-upload" onclick="document.getElementById('pMainUpload').click()">
        <img id="pMainPreview" src="" style="display:none; width:100%; height:100%; object-fit: cover; border-radius: 8px;">
        <div id="mainPlaceholder">
            <i class="fa-solid fa-cloud-arrow-up"></i>
            <span>Main Image</span>
        </div>
        <input type="file" id="pMainUpload" hidden accept="image/*" onchange="handleMainImage(this)">
    </div>
</div>

<div class="form-group" id="gallerySection" style="display:none;">
    <label>Gallery Images (Max 3)</label>
    <div class="gallery-grid">
        <div class="gallery-upload-box" onclick="document.getElementById('pGal1').click()">
            <img id="pGal1Preview" src="" style="display:none;">
            <i class="fa-solid fa-plus" id="pGal1Icon"></i>
            <input type="file" id="pGal1" hidden accept="image/*" onchange="previewGallery(this, 'pGal1Preview', 'pGal1Icon')">
        </div>
        <div class="gallery-upload-box" onclick="document.getElementById('pGal2').click()">
            <img id="pGal2Preview" src="" style="display:none;">
            <i class="fa-solid fa-plus" id="pGal2Icon"></i>
            <input type="file" id="pGal2" hidden accept="image/*" onchange="previewGallery(this, 'pGal2Preview', 'pGal2Icon')">
        </div>
        <div class="gallery-upload-box" onclick="document.getElementById('pGal3').click()">
            <img id="pGal3Preview" src="" style="display:none;">
            <i class="fa-solid fa-plus" id="pGal3Icon"></i>
            <input type="file" id="pGal3" hidden accept="image/*" onchange="previewGallery(this, 'pGal3Preview', 'pGal3Icon')">
        </div>
    </div>
</div>

            <div id="editProductActions" class="status-box-drawer" style="display:none; margin-bottom: 20px;">
                <label class="admin-label">Inventory Actions</label>
                <div class="drawer-actions-row">
                    <button type="button" class="btn-action pause"><i class="fa-solid fa-eye-slash"></i> Hide</button>
                    <button type="button" class="btn-action delete"><i class="fa-solid fa-trash"></i> Delete</button>
                </div>
            </div>

            <button type="submit" class="btn-shop btn-full" id="productSubmitBtn">Publish Product</button>
        </form>
    </div>
</div>

        
<script src="admin-script.js"></script>
    </div>

</body>
</html>