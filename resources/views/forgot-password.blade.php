@extends('layout.master')
@section('title')
    فراموشی رمز عبور
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
                    <li class="breadcrumb-item"><a href="login.html">ورود</a></li>
                    <li class="breadcrumb-item active" aria-current="page">بازیابی رمز عبور</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Forgot Password Page -->
    <section class="auth-page py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="auth-card">
                        <div class="auth-header text-center mb-4">
                            <h2>بازیابی رمز عبور</h2>
                            <p class="text-muted">لطفاً ایمیل یا شماره موبایل خود را وارد کنید</p>
                        </div>

                        <!-- Step 1: Enter Email/Phone -->
                        <div class="forgot-step active" id="step1">
                            <form id="forgotForm">
                                <div class="mb-4">
                                    <label class="form-label">ایمیل یا شماره موبایل</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="text" class="form-control" id="recoveryInput"
                                            placeholder="example@email.com یا ۰۹۱۲۳۴۵۶۷۸۹" required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="captcha-container">
                                        <div class="captcha-code">X8Y3K9</div>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" id="refreshCaptcha">
                                            <i class="fas fa-redo"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control mt-2" placeholder="کد امنیتی را وارد کنید"
                                        required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i> ارسال کد بازیابی
                                </button>
                            </form>
                        </div>

                        <!-- Step 2: Enter Verification Code -->
                        <div class="forgot-step" id="step2">
                            <div class="text-center mb-4">
                                <div class="verification-icon mb-3">
                                    <i class="fas fa-mail-bulk"></i>
                                </div>
                                <h4>کد تایید ارسال شد</h4>
                                <p class="text-muted">کد ۶ رقمی به <span id="sentTo"></span> ارسال شد</p>
                            </div>

                            <form id="verificationForm">
                                <div class="mb-4">
                                    <label class="form-label text-center d-block">کد تایید</label>
                                    <div class="verification-inputs">
                                        <input type="text" class="verification-digit" maxlength="1" required>
                                        <input type="text" class="verification-digit" maxlength="1" required>
                                        <input type="text" class="verification-digit" maxlength="1" required>
                                        <input type="text" class="verification-digit" maxlength="1" required>
                                        <input type="text" class="verification-digit" maxlength="1" required>
                                        <input type="text" class="verification-digit" maxlength="1" required>
                                    </div>
                                </div>

                                <div class="timer mb-4 text-center">
                                    <p class="mb-2">دریافت مجدد کد پس از:</p>
                                    <div class="countdown">۰۲:۰۰</div>
                                </div>

                                <div class="d-flex gap-3">
                                    <button type="button" class="btn btn-outline-secondary flex-grow-1" id="backToStep1">
                                        <i class="fas fa-arrow-right me-2"></i> بازگشت
                                    </button>
                                    <button type="submit" class="btn btn-primary flex-grow-1">
                                        <i class="fas fa-check me-2"></i> تایید کد
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Step 3: Set New Password -->
                        <div class="forgot-step" id="step3">
                            <div class="text-center mb-4">
                                <div class="verification-icon mb-3">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h4>رمز عبور جدید</h4>
                                <p class="text-muted">رمز عبور جدید خود را وارد کنید</p>
                            </div>

                            <form id="newPasswordForm">
                                <div class="mb-3">
                                    <label class="form-label">رمز عبور جدید</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="newPassword" required>
                                        <button type="button" class="input-group-text toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <div class="password-strength mt-2">
                                        <div class="strength-bar">
                                            <div class="strength-fill" id="newPasswordStrength"></div>
                                        </div>
                                        <small class="text-muted">رمز عبور باید حداقل ۸ کاراکتر باشد</small>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">تکرار رمز عبور جدید</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="confirmNewPassword" required>
                                        <button type="button" class="input-group-text toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <div class="password-match mt-2">
                                        <small id="newPasswordMatchText"></small>
                                    </div>
                                </div>

                                <div class="d-flex gap-3">
                                    <button type="button" class="btn btn-outline-secondary flex-grow-1"
                                        id="backToStep2">
                                        <i class="fas fa-arrow-right me-2"></i> بازگشت
                                    </button>
                                    <button type="submit" class="btn btn-primary flex-grow-1">
                                        <i class="fas fa-save me-2"></i> ذخیره رمز عبور
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Step 4: Success -->
                        <div class="forgot-step" id="step4">
                            <div class="success-content text-center py-4">
                                <div class="success-icon mb-4">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h4 class="mb-3">رمز عبور با موفقیت تغییر کرد!</h4>
                                <p class="text-muted mb-4">اکنون می‌توانید با رمز عبور جدید وارد حساب کاربری خود شوید</p>
                                <a href="login.html" class="btn btn-primary btn-lg">
                                    <i class="fas fa-sign-in-alt me-2"></i> ورود به حساب کاربری
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Help Section -->
                    <div class="help-section mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">
                                    <i class="fas fa-question-circle me-2"></i> راهنمایی
                                </h6>
                                <ul class="help-list">
                                    <li>کد بازیابی به ایمیل یا شماره موبایل شما ارسال می‌شود</li>
                                    <li>کد ارسالی تا ۵ دقیقه معتبر است</li>
                                    <li>در صورت عدم دریافت کد، پوشه اسپم را بررسی کنید</li>
                                    <li>برای مشکل در دریافت کد با پشتیبانی تماس بگیرید</li>
                                </ul>
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
        // مدیریت مراحل بازیابی رمز عبور
        let currentStep = 1;

        // مرحله ۱: ارسال کد بازیابی
        document.getElementById('forgotForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const recoveryInput = document.getElementById('recoveryInput').value;
            document.getElementById('sentTo').textContent = recoveryInput;

            // شبیه‌سازی ارسال کد
            showToast('کد بازیابی به ' + recoveryInput + ' ارسال شد');

            // رفتن به مرحله بعد
            goToStep(2);
            startCountdown();
        });

        // مرحله ۲: تایید کد
        document.getElementById('verificationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // شبیه‌سازی تایید کد
            showToast('کد تایید با موفقیت تأیید شد');

            // رفتن به مرحله بعد
            goToStep(3);
        });

        // مرحله ۳: تنظیم رمز جدید
        document.getElementById('newPasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmNewPassword').value;

            // بررسی تطابق رمز عبور
            if (newPassword !== confirmPassword) {
                showToast('رمز عبور و تکرار آن مطابقت ندارند', 'error');
                return;
            }

            // بررسی قدرت رمز عبور
            if (newPassword.length < 8) {
                showToast('رمز عبور باید حداقل ۸ کاراکتر باشد', 'error');
                return;
            }

            // شبیه‌سازی تغییر رمز
            showToast('رمز عبور با موفقیت تغییر کرد');

            // رفتن به مرحله آخر
            goToStep(4);
        });

        // دکمه‌های بازگشت
        document.getElementById('backToStep1').addEventListener('click', function() {
            goToStep(1);
        });

        document.getElementById('backToStep2').addEventListener('click', function() {
            goToStep(2);
        });

        // نمایش/مخفی کردن رمز عبور
        document.querySelectorAll('.toggle-password').forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
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

        // بررسی قدرت رمز عبور جدید
        document.getElementById('newPassword').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.getElementById('newPasswordStrength');
            let strength = 0;

            if (password.length >= 8) strength += 25;
            if (/[A-Z]/.test(password)) strength += 25;
            if (/[0-9]/.test(password)) strength += 25;
            if (/[^A-Za-z0-9]/.test(password)) strength += 25;

            strengthBar.style.width = strength + '%';
            strengthBar.style.backgroundColor =
                strength < 50 ? 'var(--danger-color)' :
                strength < 75 ? 'var(--warning-color)' :
                'var(--success-color)';
        });

        // بررسی تطابق رمز عبور جدید
        document.getElementById('confirmNewPassword').addEventListener('input', function() {
            const password = document.getElementById('newPassword').value;
            const confirmPassword = this.value;
            const matchText = document.getElementById('newPasswordMatchText');

            if (confirmPassword === '') {
                matchText.textContent = '';
                matchText.style.color = '';
            } else if (password === confirmPassword) {
                matchText.textContent = 'رمز عبور مطابقت دارد';
                matchText.style.color = 'var(--success-color)';
            } else {
                matchText.textContent = 'رمز عبور مطابقت ندارد';
                matchText.style.color = 'var(--danger-color)';
            }
        });

        // تایمر شمارش معکوس
        let countdownInterval;

        function startCountdown() {
            let timeLeft = 120; // 2 دقیقه
            const countdownElement = document.querySelector('.countdown');

            clearInterval(countdownInterval);

            countdownInterval = setInterval(() => {
                timeLeft--;

                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;

                countdownElement.textContent =
                    minutes.toString().padStart(2, '0') + ':' +
                    seconds.toString().padStart(2, '0');

                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = '۰۰:۰۰';
                }
            }, 1000);
        }

        // تغییر مراحل
        function goToStep(step) {
            // مخفی کردن تمام مراحل
            document.querySelectorAll('.forgot-step').forEach(stepEl => {
                stepEl.classList.remove('active');
            });

            // نمایش مرحله فعلی
            document.getElementById('step' + step).classList.add('active');
            currentStep = step;
        }

        // تازه‌سازی کد کپچا
        document.getElementById('refreshCaptcha').addEventListener('click', function() {
            const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
            let captcha = '';

            for (let i = 0; i < 6; i++) {
                captcha += chars.charAt(Math.floor(Math.random() * chars.length));
            }

            document.querySelector('.captcha-code').textContent = captcha;
        });

        // تولید کد کپچا اولیه
        document.querySelector('#refreshCaptcha').click();

        // مدیریت ورودی کد تایید
        document.querySelectorAll('.verification-digit').forEach((input, index, inputs) => {
            input.addEventListener('input', function() {
                if (this.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && this.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
@endsection
@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه بازیابی رمز عبور */
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

        .forgot-step {
            display: none;
        }

        .forgot-step.active {
            display: block;
        }

        .captcha-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .captcha-code {
            flex: 1;
            background-color: var(--light-color);
            padding: 15px;
            text-align: center;
            font-family: monospace;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 5px;
            border-radius: var(--border-radius-sm);
            user-select: none;
        }

        .verification-icon {
            width: 80px;
            height: 80px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            color: white;
            font-size: 2rem;
        }

        .verification-inputs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .verification-digit {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
            border: 2px solid var(--gray-light);
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
        }

        .verification-digit:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(74, 108, 247, 0.25);
        }

        .timer {
            padding: 15px;
            background-color: var(--light-color);
            border-radius: var(--border-radius);
        }

        .countdown {
            font-family: monospace;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
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

        .success-content {
            padding: 20px;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 3rem;
            color: white;
        }

        .help-section .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .help-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .help-list li {
            padding: 8px 0;
            border-bottom: 1px solid var(--gray-light);
            color: var(--gray-color);
        }

        .help-list li:last-child {
            border-bottom: none;
        }

        .help-list li::before {
            content: '•';
            color: var(--primary-color);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .auth-card {
                padding: 25px;
            }

            .verification-digit {
                width: 40px;
                height: 50px;
                font-size: 1.2rem;
            }
        }
    </style>
@endsection
