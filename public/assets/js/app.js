// فایل اصلی JavaScript برای فروشگاه ایرانی

document.addEventListener('DOMContentLoaded', function() {
    
    // تغییر تم (تیره/روشن)
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = themeToggle.querySelector('i');
    
    // بررسی تم ذخیره شده در localStorage
    const currentTheme = localStorage.getItem('theme') || 'light';
    document.body.setAttribute('data-theme', currentTheme);
    updateThemeIcon(currentTheme);
    
    themeToggle.addEventListener('click', function() {
        const currentTheme = document.body.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        document.body.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeIcon(newTheme);
        
        // افکت تغییر تم
        document.body.style.opacity = 0.8;
        setTimeout(() => {
            document.body.style.opacity = 1;
        }, 300);
    });
    
    function updateThemeIcon(theme) {
        if (theme === 'dark') {
            themeIcon.className = 'fas fa-sun';
        } else {
            themeIcon.className = 'fas fa-moon';
        }
    }
    
    // مدیریت افزودن به علاقه‌مندی‌ها
    const favoriteButtons = document.querySelectorAll('.add-to-favorite');
    
    favoriteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const icon = this.querySelector('i');
            
            if (icon.classList.contains('far')) {
                icon.className = 'fas fa-heart';
                this.style.color = '#ef4444';
                
                // نمایش پیام
                showToast('محصول به علاقه‌مندی‌ها اضافه شد');
            } else {
                icon.className = 'far fa-heart';
                this.style.color = '';
                
                // نمایش پیام
                showToast('محصول از علاقه‌مندی‌ها حذف شد');
            }
        });
    });
    
    // مدیریت افزودن به سبد خرید
    const cartButtons = document.querySelectorAll('.add-to-cart');
    
    cartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // شبیه‌سازی افزودن به سبد خرید
            const productCard = this.closest('.product-card');
            const productTitle = productCard.querySelector('.product-title').textContent;
            
            // نمایش پیام
            showToast(`"${productTitle}" به سبد خرید اضافه شد`);
            
            // افکت دکمه
            this.style.backgroundColor = '#10b981';
            this.style.color = 'white';
            
            setTimeout(() => {
                this.style.backgroundColor = '';
                this.style.color = '';
            }, 1000);
        });
    });
    
    // مشاهده سریع محصول
    const quickViewButtons = document.querySelectorAll('.quick-view');
    
    quickViewButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const productCard = this.closest('.product-card');
            const productImage = productCard.querySelector('.product-image img').src;
            const productTitle = productCard.querySelector('.product-title').textContent;
            const productPrice = productCard.querySelector('.price-main').textContent;
            
            // ایجاد محتوای مدال
            const modalContent = `
                <div class="row">
                    <div class="col-md-6">
                        <img src="${productImage}" alt="${productTitle}" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h3>${productTitle}</h3>
                        <div class="product-price my-4">
                            <span class="price-main h4">${productPrice}</span>
                        </div>
                        <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                        
                        <div class="product-options my-4">
                            <div class="mb-3">
                                <label class="form-label">رنگ:</label>
                                <div class="color-options">
                                    <button class="color-option" style="background-color: #1e293b;" data-color="مشکی"></button>
                                    <button class="color-option" style="background-color: #64748b;" data-color="نقره‌ای"></button>
                                    <button class="color-option" style="background-color: #3a56d4;" data-color="آبی"></button>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">تعداد:</label>
                                <div class="quantity-selector d-flex align-items-center" style="max-width: 150px;">
                                    <button class="btn btn-outline-secondary quantity-btn" data-action="decrease">-</button>
                                    <input type="number" class="form-control text-center quantity-input" value="1" min="1">
                                    <button class="btn btn-outline-secondary quantity-btn" data-action="increase">+</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex">
                            <button class="btn btn-primary btn-lg flex-grow-1 add-to-cart-modal">
                                <i class="fas fa-shopping-cart me-2"></i>افزودن به سبد خرید
                            </button>
                            <button class="btn btn-outline-primary btn-lg">
                                <i class="far fa-heart me-2"></i>افزودن به علاقه‌مندی‌ها
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            // نمایش مدال
            const modalBody = document.querySelector('#quickViewModal .modal-body');
            modalBody.innerHTML = modalContent;
            
            const quickViewModal = new bootstrap.Modal(document.getElementById('quickViewModal'));
            quickViewModal.show();
            
            // مدیریت تعداد محصول
            setupQuantitySelector();
            
            // مدیریت دکمه افزودن به سبد خرید در مدال
            const addToCartModalBtn = document.querySelector('.add-to-cart-modal');
            addToCartModalBtn.addEventListener('click', function() {
                showToast(`"${productTitle}" به سبد خرید اضافه شد`);
                quickViewModal.hide();
            });
        });
    });
    
    // تابع تنظیم انتخاب تعداد
    function setupQuantitySelector() {
        const quantityInput = document.querySelector('.quantity-input');
        const quantityBtns = document.querySelectorAll('.quantity-btn');
        
        quantityBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.getAttribute('data-action');
                let value = parseInt(quantityInput.value);
                
                if (action === 'increase') {
                    value++;
                } else if (action === 'decrease' && value > 1) {
                    value--;
                }
                
                quantityInput.value = value;
            });
        });
        
        quantityInput.addEventListener('change', function() {
            let value = parseInt(this.value);
            if (isNaN(value) || value < 1) {
                this.value = 1;
            }
        });
    }
    
    // مدیریت انتخاب رنگ
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('color-option')) {
            e.preventDefault();
            
            // حذف انتخاب از همه گزینه‌ها
            document.querySelectorAll('.color-option').forEach(option => {
                option.classList.remove('selected');
            });
            
            // انتخاب گزینه کلیک شده
            e.target.classList.add('selected');
        }
    });
    
    // تابع نمایش پیام (Toast)
    function showToast(message, type = 'success') {
        // ایجاد عنصر toast
        const toastEl = document.createElement('div');
        toastEl.className = `toast-notification ${type}`;
        toastEl.innerHTML = `
            <div class="toast-content">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                <span>${message}</span>
            </div>
        `;
        
        // اضافه کردن به صفحه
        document.body.appendChild(toastEl);
        
        // نمایش با انیمیشن
        setTimeout(() => {
            toastEl.classList.add('show');
        }, 10);
        
        // حذف بعد از 3 ثانیه
        setTimeout(() => {
            toastEl.classList.remove('show');
            setTimeout(() => {
                if (toastEl.parentNode) {
                    toastEl.parentNode.removeChild(toastEl);
                }
            }, 300);
        }, 3000);
    }
    
    // استایل toast
    const toastStyle = document.createElement('style');
    toastStyle.textContent = `
        .toast-notification {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--white);
            color: var(--dark-color);
            padding: 15px 25px;
            border-radius: var(--border-radius-sm);
            box-shadow: var(--shadow-hover);
            z-index: 9999;
            transform: translateY(100px);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
            max-width: 350px;
        }
        
        .toast-notification.show {
            transform: translateY(0);
            opacity: 1;
        }
        
        .toast-content {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .toast-content i {
            font-size: 1.3rem;
            color: var(--primary-color);
        }
        
        .toast-notification.success .toast-content i {
            color: var(--secondary-color);
        }
        
        .toast-notification.error .toast-content i {
            color: var(--danger-color);
        }
    `;
    document.head.appendChild(toastStyle);
    
    // مدیریت فرم جستجو
    const searchForm = document.querySelector('.search-box form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const searchInput = this.querySelector('input[type="text"]');
            if (!searchInput.value.trim()) {
                e.preventDefault();
                searchInput.focus();
                showToast('لطفاً عبارت جستجو را وارد کنید', 'error');
            }
        });
    }
    
    // اسکرول نرم برای هدر
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header');
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // اضافه کردن استایل برای هدر هنگام اسکرول
    const headerStyle = document.createElement('style');
    headerStyle.textContent = `
        .header.scrolled {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1) !important;
        }
        
        .header.scrolled .main-navbar {
            padding: 10px 0 !important;
        }
    `;
    document.head.appendChild(headerStyle);
    
    // مدیریت انتخاب رنگ در محصولات
    const colorOptions = document.querySelectorAll('.color-option');
    colorOptions.forEach(option => {
        option.addEventListener('click', function() {
            // حذف کلاس selected از همه
            colorOptions.forEach(opt => opt.classList.remove('selected'));
            // اضافه کردن کلاس selected به گزینه انتخاب شده
            this.classList.add('selected');
        });
    });
    
    // مقداردهی اولیه به گزینه اول
    if (colorOptions.length > 0) {
        colorOptions[0].classList.add('selected');
    }
});