@extends('admin.layout.master')
@section('title')
    پنل مدیریت
@endsection
@section('css')
    <style>
        /* استایل‌های مخصوص پنل مدیریت */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
            background-color: var(--light-color);
        }

        .sidebar {
            width: 250px;
            background-color: var(--white);
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: fixed;
            right: 0;
            top: 0;
            height: 100vh;
            z-index: 100;
            overflow-y: auto;
        }

        .main-content {
            flex: 1;
            margin-right: 250px;
            transition: var(--transition);
        }

        .sidebar.collapsed {
            transform: translateX(100%);
        }

        .sidebar.collapsed+.main-content {
            margin-right: 0;
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid var(--gray-light);
            background-color: var(--primary-color);
            color: white;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .sidebar-menu ul {
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--dark-color);
            transition: var(--transition);
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: var(--light-color);
            color: var(--primary-color);
            border-right: 3px solid var(--primary-color);
        }

        .sidebar-menu i {
            width: 25px;
            margin-left: 10px;
            font-size: 1.1rem;
        }

        .admin-header {
            background-color: var(--white);
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .stat-card.primary i {
            color: var(--primary-color);
        }

        .stat-card.success i {
            color: var(--secondary-color);
        }

        .stat-card.warning i {
            color: var(--warning-color);
        }

        .stat-card.danger i {
            color: var(--danger-color);
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            color: var(--gray-color);
            font-size: 0.95rem;
        }

        .chart-container {
            background-color: var(--white);
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-container {
            background-color: var(--white);
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .toggle-sidebar {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark-color);
            cursor: pointer;
        }

        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-right: 0;
            }
        }
    </style>
@endsection
@section('body')
    <!-- Main -->
    <main class="p-4">
        <div class="container-fluid">
            <h2 class="mb-4">داشبورد مدیریت</h2>

            <!-- Stats Cards -->
            <div class="stats-cards">
                <div class="stat-card primary">
                    <i class="fas fa-shopping-cart"></i>
                    <div class="stat-value">۱,۲۴۵</div>
                    <div class="stat-label">سفارشات جدید</div>
                </div>

                <div class="stat-card success">
                    <i class="fas fa-dollar-sign"></i>
                    <div class="stat-value">۲۵۴.۳ <small>میلیون</small></div>
                    <div class="stat-label">درآمد این ماه</div>
                </div>

                <div class="stat-card warning">
                    <i class="fas fa-users"></i>
                    <div class="stat-value">۵,۸۴۲</div>
                    <div class="stat-label">کاربران جدید</div>
                </div>

                <div class="stat-card danger">
                    <i class="fas fa-box"></i>
                    <div class="stat-value">۱۲</div>
                    <div class="stat-label">محصولات تمام شده</div>
                </div>
            </div>

            <!-- Charts -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="chart-container">
                        <div class="chart-header">
                            <h5>آمار فروش ۳ ماه گذشته</h5>
                            <select class="form-select" style="width: auto;">
                                <option>۳ ماه گذشته</option>
                                <option>۶ ماه گذشته</option>
                                <option>سال جاری</option>
                            </select>
                        </div>
                        <canvas id="salesChart" height="250"></canvas>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="chart-container">
                        <h5 class="mb-4">دسته‌بندی محصولات پرفروش</h5>
                        <canvas id="categoryChart" height="250"></canvas>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="table-container mt-4">
                <h5 class="mb-4">سفارشات اخیر</h5>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>شماره سفارش</th>
                                <th>مشتری</th>
                                <th>تاریخ</th>
                                <th>مبلغ</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-78542</td>
                                <td>محمد احمدی</td>
                                <td>۱۴۰۲/۰۵/۱۲</td>
                                <td>۳,۴۵۰,۰۰۰ تومان</td>
                                <td><span class="badge bg-success">تحویل شده</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">مشاهده</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-78541</td>
                                <td>فاطمه محمدی</td>
                                <td>۱۴۰۲/۰۵/۱۱</td>
                                <td>۱۲,۸۰۰,۰۰۰ تومان</td>
                                <td><span class="badge bg-warning">در حال پردازش</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">مشاهده</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-78540</td>
                                <td>علی رضایی</td>
                                <td>۱۴۰۲/۰۵/۱۰</td>
                                <td>۵,۶۰۰,۰۰۰ تومان</td>
                                <td><span class="badge bg-primary">ارسال شده</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">مشاهده</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-78539</td>
                                <td>زهرا کریمی</td>
                                <td>۱۴۰۲/۰۵/۰۹</td>
                                <td>۲,۳۰۰,۰۰۰ تومان</td>
                                <td><span class="badge bg-danger">لغو شده</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">مشاهده</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-78538</td>
                                <td>حسین نجفی</td>
                                <td>۱۴۰۲/۰۵/۰۸</td>
                                <td>۸,۷۵۰,۰۰۰ تومان</td>
                                <td><span class="badge bg-success">تحویل شده</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">مشاهده</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-3">
                    <a href="orders.html" class="btn btn-outline-primary">مشاهده همه سفارشات</a>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script>
        // مدیریت نمایش/مخفی کردن sidebar
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });

        // نمودار فروش
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['خرداد', 'تیر', 'مرداد'],
                datasets: [{
                    label: 'فروش (میلیون تومان)',
                    data: [185, 210, 254],
                    borderColor: '#4a6cf7',
                    backgroundColor: 'rgba(74, 108, 247, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            font: {
                                family: 'Vazir, sans-serif'
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                family: 'Vazir, sans-serif'
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                family: 'Vazir, sans-serif'
                            }
                        }
                    }
                }
            }
        });

        // نمودار دسته‌بندی‌ها
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        const categoryChart = new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['موبایل', 'لپ‌تاپ', 'پوشاک', 'لوازم خانگی', 'سایر'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        '#4a6cf7',
                        '#10b981',
                        '#8b5cf6',
                        '#f59e0b',
                        '#ef4444'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                family: 'Vazir, sans-serif'
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection


