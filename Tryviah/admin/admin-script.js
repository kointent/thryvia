/**
 * THRYVIA Admin Dashboard Script
 * Consolidated logic for navigation, drawers, modals, and form interactions.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Initialize specific UI elements if they exist
    const emailBody = document.getElementById('emailBody');
    if (emailBody) {
        emailBody.addEventListener('input', updateEmailPreview);
    }
});

/* ==========================================
   1. NAVIGATION & SIDEBAR
   ========================================== */
function toggleSidebar() {
    const sidebar = document.querySelector('.admin-sidebar');
    sidebar.classList.toggle('active');
}

/* ==========================================
   2. SLIDER / DRAWER CONTROLS
   Generic function to toggle any slider by ID
   ========================================== */
function toggleSlider(sliderId) {
    const slider = document.getElementById(sliderId);
    const overlayId = sliderId.replace('Slider', 'Overlay');
    const overlay = document.getElementById(overlayId);

    if (slider) slider.classList.toggle('active');
    if (overlay) overlay.classList.toggle('active');
}

// Specific wrappers for clarity in HTML onclicks
function openOrderDetails() { toggleSlider('orderDrawer'); }
function closeOrderDrawer() { toggleSlider('orderDrawer'); }

/* ==========================================
   3. CUSTOMER MANAGEMENT
   ========================================== */
function openCustomerProfile() {
    // In a real app, you'd fetch data here. 
    // For now, it just opens the drawer defined in customers.html
    toggleSlider('customerSlider');
}

function openEmailSlider() {
    const email = document.getElementById('profileEmail')?.innerText || "customer@example.com";
    const recipientInput = document.getElementById('emailRecipient');
    
    if (recipientInput) recipientInput.value = email;
    toggleSlider('emailSlider');
}

function sendEmailAction() {
    alert("Message sent successfully!");
    toggleSlider('emailSlider');
}

/* ==========================================
   4. PRODUCT MANAGEMENT
   ========================================== */
function openAddProductSlider() {
    document.getElementById('productSliderTitle').innerText = "Add New Product";
    document.getElementById('productSubmitBtn').innerText = "Publish Product";
    document.getElementById('editProductActions').style.display = "none";
    document.getElementById('gallerySection').style.display = "none";
    document.getElementById('productForm').reset();
    toggleSlider('productSlider');
}

function openEditProductSlider(name, cat, price, desc) {
    document.getElementById('productSliderTitle').innerText = "Edit Product";
    document.getElementById('productSubmitBtn').innerText = "Update Product";
    document.getElementById('editProductActions').style.display = "block";
    document.getElementById('gallerySection').style.display = "block";
    
    // Fill form
    document.getElementById('pNameInput').value = name;
    document.getElementById('pCategoryInput').value = cat;
    document.getElementById('pPriceInput').value = price;
    document.getElementById('pDescInput').value = desc;

    toggleSlider('productSlider');
}

// Image Upload Handlers
function handleMainImage(input) {
    const preview = document.getElementById('pMainPreview');
    const placeholder = document.getElementById('mainPlaceholder');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = (e) => {
            preview.src = e.target.result;
            preview.style.display = "block";
            placeholder.style.display = "none";
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function previewGallery(input, previewId, iconId) {
    const preview = document.getElementById(previewId);
    const icon = document.getElementById(iconId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = (e) => {
            preview.src = e.target.result;
            preview.style.display = "block";
            icon.style.display = "none";
        };
        reader.readAsDataURL(input.files[0]);
    }
}

/* ==========================================
   5. SETTINGS & TABS
   ========================================== */
function showTab(tabId) {
    // Hide all panes
    document.querySelectorAll('.settings-pane').forEach(pane => {
        pane.classList.remove('active');
    });
    // Deactivate all buttons
    document.querySelectorAll('.s-nav-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    // Show selected
    document.getElementById(tabId).classList.add('active');
    event.currentTarget.classList.add('active');
}

function updateEmailPreview() {
    const bodyText = document.getElementById('emailBody').value;
    const preview = document.getElementById('bodyPreview');
    if (preview) preview.innerText = bodyText;
}

function saveAllSettings() {
    alert("All changes have been saved successfully!");
}

/* ==========================================
   6. ORDER FILTERING
   ========================================== */
function filterOrders(status, btn) {
    // Update button states
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    // Filter table rows
    const rows = document.querySelectorAll('.admin-table tbody tr');
    rows.forEach(row => {
        if (status === 'all') {
            row.style.display = '';
        } else {
            row.classList.contains(status) ? row.style.display = '' : row.style.display = 'none';
        }
    });
}

/* ==========================================
   7. TEAM / ADMIN MANAGEMENT
   ========================================== */
function openEditAdminSlider(name, email, role) {
    document.getElementById('adminSliderTitle').innerText = "Edit Team Member";
    document.getElementById('adminSubmitBtn').innerText = "Update Permissions";
    document.getElementById('adminPasswordGroup').style.display = "none";
    document.getElementById('editAdminActions').style.display = "block";
    
    document.getElementById('adminNameInput').value = name;
    document.getElementById('adminEmailInput').value = email;
    document.getElementById('adminRoleInput').value = role;
    
    toggleSlider('adminSlider');
}

/* ==========================================
   8. AUTH TOGGLE (index.html)
   ========================================== */
function toggleAuth() {
    const login = document.getElementById('loginForm');
    const register = document.getElementById('registerForm');
    if (login.style.display === 'none') {
        login.style.display = 'block';
        register.style.display = 'none';
    } else {
        login.style.display = 'none';
        register.style.display = 'block';
    }
}