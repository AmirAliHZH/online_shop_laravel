@extends('layout.master')
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
                    <li class="breadcrumb-item active" aria-current="page">
                        تماس با ما
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Contact Page -->
    <section class="contact-page py-5">
        <div class="container">
            <div class="contact-header text-center mb-5">
                <h1>تماس با ما</h1>
                <p class="lead">
                    از اینکه با ما در ارتباط هستید خوشحالیم. نظرات، پیشنهادات و سوالات
                    خود را با ما در میان بگذارید.
                </p>
            </div>

            <div class="row">
                <!-- Contact Information -->
                <div class="col-lg-4 mb-4">
                    <div class="contact-info">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4>آدرس دفتر مرکزی</h4>
                            <p>تهران، خیابان ولیعصر، پلاک ۱۲۳۴، طبقه سوم</p>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h4>تلفن‌های تماس</h4>
                            <p>۰۲۱-۱۲۳۴۵۶۷۸</p>
                            <p>۰۹۱۲۳۴۵۶۷۸۹</p>
                            <small class="text-muted">شنبه تا پنجشنبه، ۸ صبح تا ۸ شب</small>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4>ایمیل‌های ارتباطی</h4>
                            <p>info@eshop.ir</p>
                            <p>support@eshop.ir</p>
                            <p>sales@eshop.ir</p>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4>ساعات کاری</h4>
                            <p>شنبه تا چهارشنبه: ۸:۰۰ تا ۱۷:۰۰</p>
                            <p>پنجشنبه: ۸:۰۰ تا ۱۴:۰۰</p>
                            <p>جمعه‌ها تعطیل</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h3 class="mb-4">فرم تماس با ما</h3>
                        <p class="text-muted mb-4">
                            لطفاً فرم زیر را پر کنید تا در اسرع وقت با شما تماس بگیریم.
                        </p>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">نام و نام خانوادگی
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">شماره موبایل <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" required />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">ایمیل <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">موضوع <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option value="" selected>انتخاب کنید</option>
                                    <option>پیشنهاد</option>
                                    <option>انتقاد</option>
                                    <option>سوال درباره محصول</option>
                                    <option>پیگیری سفارش</option>
                                    <option>همکاری</option>
                                    <option>سایر</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">پیام شما <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="6" required></textarea>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacyPolicy" required />
                                    <label class="form-check-label" for="privacyPolicy">
                                        با
                                        <a href="#" class="text-primary">قوانین حریم خصوصی</a>
                                        موافقم
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i> ارسال پیام
                            </button>
                        </form>
                    </div>

                    <!-- Google Map -->
                    <div class="map-section mt-5">
                        <h4 class="mb-4">موقعیت ما روی نقشه</h4>
                        <div class="map-container">
                            <!-- در حالت واقعی، اینجا کد embed نقشه گوگل قرار می‌گیرد -->
                            <div class="map-placeholder">
                                <div class="map-content">
                                    <i class="fas fa-map-marked-alt"></i>
                                    <p>نقشه گوگل</p>
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
        // مدیریت فرم تماس
        document
            .getElementById("contactForm")
            .addEventListener("submit", function(e) {
                e.preventDefault();

                // در حالت واقعی، اطلاعات به سرور ارسال می‌شود
                showToast(
                    "پیام شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت."
                );

                // ریست فرم
                this.reset();
            });
    </script>
@endsection

@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه تماس */
        .contact-header {
            background-color: var(--white);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .contact-info {
            display: grid;
            gap: 20px;
        }

        .info-card {
            background-color: var(--white);
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .info-icon {
            width: 60px;
            height: 60px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            transition: var(--transition);
        }

        .info-card:hover .info-icon {
            background-color: var(--primary-color);
            color: white;
        }

        .info-card h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .info-card p {
            color: var(--gray-color);
            margin-bottom: 8px;
        }

        .contact-form-card {
            background-color: var(--white);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            padding: 12px 15px;
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(74, 108, 247, 0.25);
        }

        .map-section {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .map-container {
            height: 300px;
            border-radius: var(--border-radius);
            overflow: hidden;
            background-color: var(--light-color);
        }

        .map-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eef2ff;
            color: var(--primary-color);
        }

        .map-content {
            text-align: center;
        }

        .map-content i {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .contact-header {
                padding: 25px;
            }

            .contact-form-card {
                padding: 25px;
            }
        }
    </style>
@endsection
