@extends('layout.master')
@section('title')
    ثبت نام
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
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="fas fa-home me-1"></i> خانه</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Register Page -->
    <section class="auth-page py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="auth-card">
                        <div class="auth-header text-center mb-4">
                            <h2>ایجاد حساب کاربری جدید</h2>
                            <p class="text-muted">
                                اگر حساب کاربری دارید،
                                <a href="login.html" class="text-primary">وارد شوید</a>
                            </p>
                        </div>

                        <form id="registerForm">
                            <div class="row">
                                <!-- Personal Information -->
                                <div class="col-md-6">
                                    <h5 class="mb-4">اطلاعات شخصی</h5>

                                    <div class="mb-3">
                                        <label class="form-label">نام</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <input type="text" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">نام خانوادگی</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <input type="text" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">شماره موبایل</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                            <input type="tel" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">ایمیل</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <!-- Account Information -->
                                <div class="col-md-6">
                                    <h5 class="mb-4">اطلاعات حساب</h5>

                                    <div class="mb-3">
                                        <label class="form-label">رمز عبور</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" id="regPassword" required />
                                            <button type="button" class="input-group-text toggle-password">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="password-strength mt-2">
                                            <div class="strength-bar">
                                                <div class="strength-fill" id="passwordStrength"></div>
                                            </div>
                                            <small class="text-muted">رمز عبور باید حداقل ۸ کاراکتر باشد</small>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">تکرار رمز عبور</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" id="confirmPassword" required />
                                            <button type="button" class="input-group-text toggle-password">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="password-match mt-2">
                                            <small id="passwordMatchText"></small>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">تاریخ تولد</label>
                                        <div class="row">
                                            <div class="col-4">
                                                <select class="form-select">
                                                    <option>روز</option>
                                                    <!-- روزها -->
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select">
                                                    <option>ماه</option>
                                                    <!-- ماه‌ها -->
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select">
                                                    <option>سال</option>
                                                    <!-- سال‌ها -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">جنسیت</label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="male" checked />
                                                <label class="form-check-label" for="male">آقا</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="female" />
                                                <label class="form-check-label" for="female">خانم</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms & Conditions -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" required />
                                    <label class="form-check-label" for="terms">
                                        با <a href="#" class="text-primary">شرایط و قوانین</a> و
                                        <a href="#" class="text-primary">حریم خصوصی</a> فروشگاه
                                        ایرانی موافقم
                                    </label>
                                </div>
                            </div>

                            <!-- Newsletter -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" checked />
                                    <label class="form-check-label" for="newsletter">
                                        مایل به دریافت خبرنامه و پیشنهادات ویژه از طریق ایمیل هستم
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-user-plus me-2"></i> ایجاد حساب کاربری
                            </button>
                        </form>
                    </div>

                    <!-- Registration Benefits -->
                    <div class="registration-benefits mt-5">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="benefit-card">
                                    <div class="benefit-icon">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                    <h5>هدیه ویژه ثبت‌نام</h5>
                                    <p>۱۰٪ تخفیف روی اولین خرید</p>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="benefit-card">
                                    <div class="benefit-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <h5>ارسال رایگان</h5>
                                    <p>برای سفارش‌های بالای ۳۰۰ هزار تومان</p>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="benefit-card">
                                    <div class="benefit-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5>برنامه وفاداری</h5>
                                    <p>کسب امتیاز و تبدیل به کوپن خرید</p>
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
        // مدیریت فرم ثبت نام
        document
            .getElementById("registerForm")
            .addEventListener("submit", function(e) {
                e.preventDefault();

                const password = document.getElementById("regPassword").value;
                const confirmPassword =
                    document.getElementById("confirmPassword").value;

                // بررسی تطابق رمز عبور
                if (password !== confirmPassword) {
                    showToast("رمز عبور و تکرار آن مطابقت ندارند", "error");
                    return;
                }

                // بررسی قدرت رمز عبور
                if (password.length < 8) {
                    showToast("رمز عبور باید حداقل ۸ کاراکتر باشد", "error");
                    return;
                }

                // در حالت واقعی، اطلاعات به سرور ارسال می‌شود
                // شبیه‌سازی ثبت‌نام موفق
                showToast("ثبت‌نام با موفقیت انجام شد. به فروشگاه ایرانی خوش آمدید!");

                setTimeout(() => {
                    window.location.href = "index.html";
                }, 2000);
            });

        // نمایش/مخفی کردن رمز عبور
        document.querySelectorAll(".toggle-password").forEach((btn) => {
            btn.addEventListener("click", function() {
                const input = this.parentElement.querySelector("input");
                const icon = this.querySelector("i");

                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                } else {
                    input.type = "password";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
            });
        });

        // بررسی قدرت رمز عبور
        document
            .getElementById("regPassword")
            .addEventListener("input", function() {
                const password = this.value;
                const strengthBar = document.getElementById("passwordStrength");
                let strength = 0;

                if (password.length >= 8) strength += 25;
                if (/[A-Z]/.test(password)) strength += 25;
                if (/[0-9]/.test(password)) strength += 25;
                if (/[^A-Za-z0-9]/.test(password)) strength += 25;

                strengthBar.style.width = strength + "%";
                strengthBar.style.backgroundColor =
                    strength < 50 ?
                    "var(--danger-color)" :
                    strength < 75 ?
                    "var(--warning-color)" :
                    "var(--success-color)";
            });

        // بررسی تطابق رمز عبور
        document
            .getElementById("confirmPassword")
            .addEventListener("input", function() {
                const password = document.getElementById("regPassword").value;
                const confirmPassword = this.value;
                const matchText = document.getElementById("passwordMatchText");

                if (confirmPassword === "") {
                    matchText.textContent = "";
                    matchText.style.color = "";
                } else if (password === confirmPassword) {
                    matchText.textContent = "رمز عبور مطابقت دارد";
                    matchText.style.color = "var(--success-color)";
                } else {
                    matchText.textContent = "رمز عبور مطابقت ندارد";
                    matchText.style.color = "var(--danger-color)";
                }
            });
    </script>
@endsection
@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه ثبت نام */
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

        h5 {
            color: var(--primary-color);
            font-weight: 600;
        }

        .password-strength {
            margin-top: 10px;
        }

        .strength-bar {
            height: 5px;
            background-color: var(--gray-light);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 5px;
        }

        .strength-fill {
            height: 100%;
            width: 0;
            transition: width 0.3s ease;
            border-radius: 3px;
        }

        .password-match small {
            font-size: 0.85rem;
        }

        .registration-benefits {
            background-color: var(--light-color);
            padding: 40px;
            border-radius: var(--border-radius);
        }

        .benefit-card {
            background-color: var(--white);
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            height: 100%;
            transition: var(--transition);
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.5rem;
        }

        .benefit-card h5 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .benefit-card p {
            color: var(--gray-color);
            margin-bottom: 0;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .auth-card {
                padding: 25px;
            }

            .registration-benefits {
                padding: 25px;
            }
        }
    </style>
@endsection
