@extends('layout.master')
@section("title")
ورود
@endsection
@section('body')
    <!-- Theme Toggle -->
    <div class="theme-toggle">
        <button id="themeToggle" class="btn-theme-toggle">
            <i class="fas fa-moon"></i>
        </button>
    </div>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home me-1"></i> خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ورود به حساب کاربری</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Login Page -->
    <section class="auth-page py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="auth-card">
                        <div class="auth-header text-center mb-4">
                            <h2>ورود به حساب کاربری</h2>
                            <p class="text-muted">اگر حساب کاربری ندارید، <a href="register.html" class="text-primary">ثبت
                                    نام کنید</a></p>
                        </div>

                        <form id="loginForm">
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">ایمیل یا شماره موبایل</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="example@email.com" required>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">رمز عبور</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" required>
                                    <button type="button" class="input-group-text toggle-password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Remember & Forgot -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        مرا به خاطر بسپار
                                    </label>
                                </div>
                                <a href="forgot-password.html" class="text-primary">فراموشی رمز عبور</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4">
                                <i class="fas fa-sign-in-alt me-2"></i> ورود به حساب
                            </button>

                            <!-- Divider -->
                            <div class="divider">
                                <span>یا وارد شوید با</span>
                            </div>

                            <!-- Social Login -->
                            <div class="social-login">
                                <button type="button" class="btn btn-outline-secondary w-100 mb-3">
                                    <i class="fab fa-google me-2"></i> ورود با گوگل
                                </button>
                                <button type="button" class="btn btn-outline-primary w-100">
                                    <i class="fab fa-telegram me-2"></i> ورود با تلگرام
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Benefits -->
                    <div class="auth-benefits mt-5">
                        <h5 class="text-center mb-4">مزایای داشتن حساب کاربری</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="benefit-item text-center">
                                    <div class="benefit-icon">
                                        <i class="fas fa-history"></i>
                                    </div>
                                    <p class="mb-0">تاریخچه سفارشات</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="benefit-item text-center">
                                    <div class="benefit-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <p class="mb-0">پیگیری سفارشات</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="benefit-item text-center">
                                    <div class="benefit-icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <p class="mb-0">لیست علاقه‌مندی‌ها</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        // مدیریت فرم ورود
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // در حالت واقعی، اطلاعات به سرور ارسال می‌شود
            // شبیه‌سازی لاگین موفق
            showToast('ورود با موفقیت انجام شد. در حال انتقال به پنل کاربری...');

            setTimeout(() => {
                window.location.href = 'index.html';
            }, 2000);
        });

        // نمایش/مخفی کردن رمز عبور
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
@endsection

@section('css')
    <style>
        /* استایل‌های اختصاصی صفحات احراز هویت */
        .auth-card {
            background-color: var(--white);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .auth-header {
            padding-bottom: 20px;
            border-bottom: 1px solid var(--gray-light);
        }

        .input-group-text {
            background-color: var(--light-color);
            border: 1px solid var(--gray-light);
            color: var(--gray-color);
        }

        .toggle-password {
            cursor: pointer;
            transition: var(--transition);
        }

        .toggle-password:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: var(--gray-color);
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: var(--gray-light);
        }

        .divider::before {
            margin-left: 10px;
        }

        .divider::after {
            margin-right: 10px;
        }

        .social-login .btn {
            padding: 12px;
            border-radius: var(--border-radius-sm);
            font-weight: 500;
        }

        .auth-benefits {
            background-color: var(--light-color);
            padding: 30px;
            border-radius: var(--border-radius);
        }

        .benefit-item {
            padding: 20px;
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .benefit-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .benefit-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .auth-card {
                padding: 25px;
            }
        }
    </style>
@endsection
