/* ==========================================
   THRYVIA - CONSOLIDATED SITE LOGIC
   ========================================== */

// 1. MOBILE MENU & SEARCH TOGGLES
function toggleMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenu) {
        mobileMenu.classList.toggle('active');
    }
}

function toggleSearch() {
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.classList.toggle('active');
    }
}

function toggleCart() {
    const cartDropdown = document.getElementById('cartDropdown');
    if (cartDropdown) {
        cartDropdown.classList.toggle('active');
    }
}

// 2. ACCOUNT DASHBOARD TAB SWITCHING
function switchTab(event, tabId) {
    // Prevent the page from jumping
    if (event) event.preventDefault();

    // Select all tab content panes and all navigation links
    const allPanes = document.querySelectorAll('.tab-pane');
    const allLinks = document.querySelectorAll('.account-nav-list a');

    // Hide all panes and remove active class from links
    allPanes.forEach(pane => {
        pane.classList.remove('active');
        pane.style.display = 'none'; // Ensure they are hidden
    });
    
    allLinks.forEach(link => {
        link.classList.remove('active');
    });

    // Show the specific targeted pane
    const targetPane = document.getElementById(tabId);
    if (targetPane) {
        targetPane.classList.add('active');
        targetPane.style.display = 'block'; // Force visibility
    } else {
        console.error("Tab ID not found: " + tabId);
    }

    // Mark the clicked link as active
    if (event && event.currentTarget) {
        event.currentTarget.classList.add('active');
    }
}

// 3. GLOBAL CLICK HANDLER (To close dropdowns/menus)
window.onclick = function(event) {
    // Close cart if clicking outside
    const cartDropdown = document.getElementById('cartDropdown');
    if (cartDropdown && !event.target.matches('.fa-cart-shopping') && !event.target.closest('.cart-dropdown')) {
        cartDropdown.classList.remove('active');
    }

    // Close mobile menu if clicking the overlay background
    const mobileMenu = document.getElementById('mobileMenu');
    if (event.target === mobileMenu) {
        toggleMenu();
    }
};

// 4. FEEDBACK LOGIC (For buttons like "Update Profile")
document.addEventListener('DOMContentLoaded', () => {
    const saveBtn = document.querySelector('.save-btn');
    if (saveBtn) {
        saveBtn.addEventListener('click', function() {
            const originalText = this.innerText;
            this.innerText = "Saving...";
            this.disabled = true;
            
            setTimeout(() => {
                this.innerText = "Updated Successfully";
                this.style.background = "#2ecc71"; // Success Green
                
                setTimeout(() => {
                    this.innerText = originalText;
                    this.style.background = ""; // Back to theme color
                    this.disabled = false;
                }, 2000);
            }, 1000);
        });
    }
});