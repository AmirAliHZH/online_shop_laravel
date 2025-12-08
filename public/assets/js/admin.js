// فایل JavaScript مخصوص پنل مدیریت

document.addEventListener('DOMContentLoaded', function() {
    
    // مدیریت Sidebar در موبایل
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });
        
        // بستن Sidebar با کلیک خارج از آن
        document.addEventListener('click', function(event) {
            if (!sidebar.contains(event.target) && !toggleBtn.contains(event.target)) {
                sidebar.classList.remove('show');
            }
        });
    }
    
    // مدیریت جدول‌ها با DataTable
    const tables = document.querySelectorAll('table');
    
    tables.forEach(table => {
        if (table.classList.contains('data-table')) {
            // در حالت واقعی، اینجا DataTable راه‌اندازی می‌شود
            console.log('DataTable initialized for:', table);
        }
    });
    
    // مدیریت فیلترها
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterType = this.getAttribute('data-filter');
            
            // حذف کلاس active از تمام دکمه‌ها
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // اضافه کردن کلاس active به دکمه کلیک شده
            this.classList.add('active');
            
            // اعمال فیلتر
            applyFilter(filterType);
        });
    });
    
    function applyFilter(filterType) {
        console.log('Applying filter:', filterType);
        // در حالت واقعی، اینجا فیلتر اعمال می‌شود
    }
    
    // مدیریت Modal حذف
    const deleteBtns = document.querySelectorAll('.btn-delete');
    
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            const itemName = this.getAttribute('data-name');
            
            if (confirm(`آیا از حذف "${itemName}" مطمئن هستید؟`)) {
                // در حالت واقعی، درخواست حذف به سرور ارسال می‌شود
                showToast('آیتم با موفقیت حذف شد', 'success');
                
                // حذف ردیف از جدول
                const row = this.closest('tr');
                if (row) {
                    row.style.opacity = '0.5';
                    setTimeout(() => row.remove(), 300);
                }
            }
        });
    });
    
    // مدیریت فرم‌ها
    const adminForms = document.querySelectorAll('form');
    
    adminForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // اعتبارسنجی فرم
            if (validateForm(this)) {
                // در حالت واقعی، اطلاعات به سرور ارسال می‌شود
                showToast('اطلاعات با موفقیت ذخیره شد', 'success');
            }
        });
    });
    
    function validateForm(form) {
        let isValid = true;
        const requiredInputs = form.querySelectorAll('[required]');
        
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });
        
        return isValid;
    }
    
    // مدیریت آپلود تصویر
    const fileInputs = document.querySelectorAll('input[type="file"]');
    
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
            const fileName = this.files[0]?.name;
            const preview = this.nextElementSibling;
            
            if (preview && preview.classList.contains('file-preview')) {
                preview.textContent = fileName || 'هیچ فایلی انتخاب نشده';
            }
        });
    });
    
    // مدیریت Tab‌ها
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabPanes.forEach(pane => {
        pane.addEventListener('show.bs.tab', function() {
            // به‌روزرسانی محتوای Tab
            console.log('Tab shown:', this.id);
        });
    });
    
    // مدیریت تاریخ‌ها
    const dateInputs = document.querySelectorAll('input[type="date"]');
    
    dateInputs.forEach(input => {
        // تنظیم تاریخ پیش‌فرض به امروز
        if (!input.value) {
            const today = new Date().toISOString().split('T')[0];
            input.value = today;
        }
    });
    
    // مدیریت جستجو
    const searchInputs = document.querySelectorAll('.search-input');
    
    searchInputs.forEach(input => {
        let timeout;
        
        input.addEventListener('input', function() {
            clearTimeout(timeout);
            
            timeout = setTimeout(() => {
                const searchTerm = this.value.trim();
                
                if (searchTerm.length >= 2) {
                    performSearch(searchTerm);
                }
            }, 500);
        });
    });
    
    function performSearch(term) {
        console.log('Searching for:', term);
        // در حالت واقعی، جستجو انجام می‌شود
    }
    
    // مدیریت انتخاب همه
    const selectAllCheckbox = document.querySelector('.select-all');
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.item-select');
            
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    }
    
    // مدیریت دسته‌جمعی
    const bulkActions = document.querySelector('.bulk-actions');
    
    if (bulkActions) {
        const actionSelect = bulkActions.querySelector('select');
        const applyBtn = bulkActions.querySelector('.apply-bulk');
        
        applyBtn.addEventListener('click', function() {
            const selectedItems = document.querySelectorAll('.item-select:checked');
            const action = actionSelect.value;
            
            if (selectedItems.length === 0) {
                showToast('لطفاً حداقل یک آیتم را انتخاب کنید', 'error');
                return;
            }
            
            if (confirm(`آیا از ${action} ${selectedItems.length} آیتم مطمئن هستید؟`)) {
                // در حالت واقعی، عملیات دسته‌جمعی انجام می‌شود
                showToast(`عملیات ${action} روی ${selectedItems.length} آیتم انجام شد`, 'success');
                
                selectedItems.forEach(checkbox => {
                    checkbox.checked = false;
                });
                
                if (selectAllCheckbox) {
                    selectAllCheckbox.checked = false;
                }
            }
        });
    }
    
    // مدیریت نمودارها
    const chartContainers = document.querySelectorAll('.chart-container');
    
    chartContainers.forEach(container => {
        const canvas = container.querySelector('canvas');
        
        if (canvas) {
            // در حالت واقعی، نمودارها با Chart.js راه‌اندازی می‌شوند
            console.log('Chart initialized for:', canvas.id);
        }
    });
    
    // مدیریت اعلان‌ها
    const notificationBell = document.querySelector('.notification-bell');
    
    if (notificationBell) {
        notificationBell.addEventListener('click', function() {
            const dropdown = this.nextElementSibling;
            
            if (dropdown.classList.contains('show')) {
                // علامت اعلان‌های خوانده شده
                const badge = this.querySelector('.badge');
                if (badge) badge.remove();
            }
        });
    }
    
    // مدیریت خروج از سیستم
    const logoutBtn = document.querySelector('.btn-logout');
    
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (confirm('آیا از خروج از سیستم مطمئن هستید؟')) {
                // در حالت واقعی، نشست کاربر بسته می‌شود
                showToast('با موفقیت خارج شدید');
                
                setTimeout(() => {
                    window.location.href = '../index.html';
                }, 1500);
            }
        });
    }
    
    // مدیریت نمایش/مخفی کردن رمز عبور
    const passwordToggles = document.querySelectorAll('.toggle-password');
    
    passwordToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.previousElementSibling;
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
    
    // تابع نمایش Toast
    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toast-notification ${type}`;
        toast.innerHTML = `
            <div class="toast-content">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.classList.add('show');
        }, 10);
        
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 300);
        }, 3000);
    }
    
    // استایل Toast برای پنل مدیریت
    const toastStyle = document.createElement('style');
    toastStyle.textContent = `
        .toast-notification {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: var(--white);
            color: var(--dark-color);
            padding: 15px 25px;
            border-radius: var(--border-radius-sm);
            box-shadow: var(--shadow-hover);
            z-index: 9999;
            transform: translateX(-100px);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
            max-width: 350px;
        }
        
        .toast-notification.show {
            transform: translateX(0);
            opacity: 1;
        }
        
        .toast-content {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .toast-content i {
            font-size: 1.3rem;
        }
        
        .toast-notification.success .toast-content i {
            color: var(--secondary-color);
        }
        
        .toast-notification.error .toast-content i {
            color: var(--danger-color);
        }
    `;
    document.head.appendChild(toastStyle);
    
    // مدیریت رفرش خودکار داده‌ها
    let autoRefreshInterval;
    
    function startAutoRefresh() {
        autoRefreshInterval = setInterval(() => {
            refreshDashboardData();
        }, 30000); // هر 30 ثانیه
    }
    
    function stopAutoRefresh() {
        clearInterval(autoRefreshInterval);
    }
    
    function refreshDashboardData() {
        console.log('Refreshing dashboard data...');
        // در حالت واقعی، داده‌ها از سرور دریافت می‌شوند
    }
    
    // شروع رفرش خودکار وقتی صفحه Dashboard باز است
    if (window.location.pathname.includes('dashboard.html')) {
        startAutoRefresh();
        
        // توقف رفرش وقتی صفحه غیرفعال است
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                stopAutoRefresh();
            } else {
                startAutoRefresh();
            }
        });
    }
    
    // مدیریت وضعیت آنلاین/آفلاین
    window.addEventListener('online', function() {
        showToast('اتصال اینترنت برقرار شد', 'success');
        if (window.location.pathname.includes('dashboard.html')) {
            startAutoRefresh();
        }
    });
    
    window.addEventListener('offline', function() {
        showToast('اتصال اینترنت قطع شده است', 'error');
        stopAutoRefresh();
    });
});