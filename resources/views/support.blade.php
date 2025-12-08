@extends('layout.master')
@section('title')
    پشتیبانی
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
                    <li class="breadcrumb-item active" aria-current="page">پشتیبانی</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Support Page -->
    <section class="support-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Support Header -->
                    <div class="support-header mb-5">
                        <h1>مرکز پشتیبانی</h1>
                        <p class="lead">
                            ما اینجا هستیم تا به شما کمک کنیم. سوالات متداول را بررسی کنید
                            یا با ما تماس بگیرید.
                        </p>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section mb-5">
                        <h3 class="mb-4">سوالات متداول</h3>

                        <div class="accordion" id="faqAccordion">
                            <!-- FAQ 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1">
                                        نحوه پیگیری سفارش چگونه است؟
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            برای پیگیری سفارش خود می‌توانید از طریق پنل کاربری در
                                            بخش "سفارشات من" اقدام کنید. همچنین کد پیگیری سفارش به
                                            شماره موبایل شما پیامک شده است که می‌توانید از طریق آن
                                            در سایت پست جستجو کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2">
                                        شرایط بازگشت کالا چیست؟
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            شما می‌توانید تا ۷ روز پس از دریافت کالا، در صورت عدم
                                            رضایت یا وجود مشکل، درخواست بازگشت کالا دهید. کالا باید
                                            سالم و بدون استفاده باشد. برای اطلاعات بیشتر به صفحه
                                            "شرایط بازگشت کالا" مراجعه کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq3">
                                        نحوه استفاده از کد تخفیف چگونه است؟
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            کد تخفیف خود را در صفحه سبد خرید در قسمت "کد تخفیف" وارد
                                            کرده و دکمه "اعمال کد" را بزنید. در صورت معتبر بودن کد،
                                            مبلغ تخفیف از جمع فاکتور کسر خواهد شد.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq4">
                                        زمان تحویل سفارش چقدر است؟
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            زمان تحویل بستگی به آدرس شما و روش ارسال انتخاب شده
                                            دارد. تحویل در تهران معمولاً ۱-۲ روز کاری و در سایر
                                            شهرها ۳-۷ روز کاری طول می‌کشد.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq5">
                                        آیا محصولات گارانتی دارند؟
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            بله، اکثر محصولات الکترونیکی دارای گارانتی رسمی هستند.
                                            مدت گارانتی در صفحه هر محصول مشخص شده است. در صورت نیاز
                                            به خدمات پس از فروش، می‌توانید از طریق پنل کاربری
                                            درخواست خود را ثبت کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form-section">
                        <h3 class="mb-4">تماس با پشتیبانی</h3>
                        <div class="card">
                            <div class="card-body">
                                <form id="supportForm">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">نام</label>
                                            <input type="text" class="form-control" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">ایمیل</label>
                                            <input type="email" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">موضوع</label>
                                        <select class="form-select" required>
                                            <option value="" selected>انتخاب کنید</option>
                                            <option>سوال درباره محصول</option>
                                            <option>پیگیری سفارش</option>
                                            <option>بازگشت کالا</option>
                                            <option>تخفیف و کد تخفیف</option>
                                            <option>پیشنهاد و انتقاد</option>
                                            <option>سایر</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">پیام شما</label>
                                        <textarea class="form-control" rows="5" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">شماره سفارش (اختیاری)</label>
                                        <input type="text" class="form-control" />
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        ارسال پیام
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Support Sidebar -->
                <div class="col-lg-4">
                    <div class="support-sidebar">
                        <!-- Quick Help -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">راهنمای سریع</h5>
                                <ul class="quick-help-list">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-shopping-cart"></i>
                                            نحوه سفارش و خرید
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-truck"></i>
                                            نحوه ارسال و تحویل
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-undo"></i>
                                            شرایط بازگشت کالا
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-shield-alt"></i>
                                            ضمانت و گارانتی
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-credit-card"></i>
                                            روش‌های پرداخت
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Live Chat -->
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <div class="live-chat-icon mb-3">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h5>گفتگوی آنلاین</h5>
                                <p class="text-muted">برای گفتگوی مستقیم با کارشناسان ما</p>
                                <button class="btn btn-success w-100" id="startChat">
                                    <i class="fas fa-comment-dots me-2"></i> شروع گفتگو
                                </button>
                                <p class="small text-muted mt-2 mb-0">
                                    <i class="fas fa-clock"></i>
                                    پاسخگویی ۲۴ ساعته
                                </p>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">راه‌های ارتباطی</h5>

                                <div class="contact-info-item mb-3">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h6>تلفن پشتیبانی</h6>
                                        <p class="mb-0">۰۲۱-۱۲۳۴۵۶۷۸</p>
                                        <small class="text-muted">شنبه تا پنجشنبه، ۸ صبح تا ۸ شب</small>
                                    </div>
                                </div>

                                <div class="contact-info-item mb-3">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h6>ایمیل پشتیبانی</h6>
                                        <p class="mb-0">support@eshop.ir</p>
                                        <small class="text-muted">پاسخگویی در کمتر از ۲۴ ساعت</small>
                                    </div>
                                </div>

                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h6>آدرس دفتر مرکزی</h6>
                                        <p class="mb-0">تهران، خیابان ولیعصر، پلاک ۱۲۳۴</p>
                                        <small class="text-muted">مراجعه حضوری با هماهنگی قبلی</small>
                                    </div>
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
        // مدیریت فرم پشتیبانی
        document
            .getElementById("supportForm")
            .addEventListener("submit", function(e) {
                e.preventDefault();

                // در حالت واقعی، اطلاعات به سرور ارسال می‌شود
                showToast(
                    "پیام شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت."
                );

                // ریست فرم
                this.reset();
            });

        // مدیریت شروع چت
        document
            .getElementById("startChat")
            .addEventListener("click", function() {
                // در حالت واقعی، چت آنلاین راه‌اندازی می‌شود
                showToast(
                    "گفتگوی آنلاین راه‌اندازی شد. کارشناسان ما به زودی پاسخ خواهند داد."
                );
            });
    </script>
@endsection

@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه پشتیبانی */
        .support-header {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .faq-section,
        .contact-form-section {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .accordion-button {
            background-color: var(--light-color);
            font-weight: 600;
            padding: 15px;
            border: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--primary-color);
            color: white;
        }

        .accordion-button::after {
            margin-right: auto;
            margin-left: 0;
        }

        .accordion-item {
            border: none;
            margin-bottom: 10px;
            border-radius: var(--border-radius-sm) !important;
            overflow: hidden;
        }

        .accordion-body {
            background-color: var(--white);
            padding: 20px;
        }

        .support-sidebar .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .quick-help-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .quick-help-list li {
            margin-bottom: 10px;
        }

        .quick-help-list a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            background-color: var(--light-color);
            border-radius: var(--border-radius-sm);
            color: var(--dark-color);
            transition: var(--transition);
        }

        .quick-help-list a:hover {
            background-color: var(--primary-color);
            color: white;
            padding-right: 20px;
        }

        .quick-help-list i {
            margin-left: 10px;
            width: 20px;
            text-align: center;
        }

        .live-chat-icon {
            width: 60px;
            height: 60px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 1.8rem;
            color: white;
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 15px;
            background-color: var(--light-color);
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
        }

        .contact-info-item:hover {
            background-color: rgba(74, 108, 247, 0.1);
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }

        .contact-details h6 {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .contact-details p {
            margin-bottom: 0;
        }

        .contact-details small {
            font-size: 0.8rem;
        }
    </style>
@endsection
