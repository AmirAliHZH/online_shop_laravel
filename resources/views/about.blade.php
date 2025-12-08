@extends('layout.master')
@section('title')
    درباره ما
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
                    <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- About Page -->
    <section class="about-page py-5">
        <div class="container">
            <!-- Hero Section -->
            <div class="about-hero mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold mb-4">فروشگاه ایرانی، اعتماد شما سرمایه ماست</h1>
                        <p class="lead mb-4">ما در سال ۱۳۹۰ با هدف ارائه بهترین محصولات با مناسب‌ترین قیمت و بالاترین کیفیت
                            خدمات، فعالیت خود را آغاز کردیم. امروز با افتخار به یکی از برترین فروشگاه‌های آنلاین کشور تبدیل
                            شده‌ایم.</p>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <h3 class="stat-number">۱۲+</h3>
                                <p class="stat-label">سال تجربه</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-number">۵۰,۰۰۰+</h3>
                                <p class="stat-label">محصول</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-number">۵۰۰,۰۰۰+</h3>
                                <p class="stat-label">مشتری راضی</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-number">۹۸%</h3>
                                <p class="stat-label">رضایت مشتریان</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="https://via.placeholder.com/600x400/4a6cf7/ffffff?text=تیم+فروشگاه+ایرانی"
                                alt="تیم فروشگاه ایرانی" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="mission-vision-section py-5">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="mission-card">
                            <div class="mission-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="mb-3">ماموریت ما</h3>
                            <p>ارائه تجربه‌ای بی‌نظیر از خرید آنلاین با تمرکز بر کیفیت محصولات، قیمت مناسب، تحویل سریع و
                                پشتیبانی کامل. ما اعتقاد داریم که رضایت مشتری مهم‌ترین سرمایه هر کسب‌وکاری است.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="vision-card">
                            <div class="vision-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="mb-3">چشم‌انداز ما</h3>
                            <p>تبدیل شدن به برترین پلتفرم تجارت الکترونیک در ایران با استانداردهای بین‌المللی. هدف ما ایجاد
                                اکوسیستمی است که در آن خریداران و فروشندگان بتوانند به راحتی و امنیت کامل با هم تعامل داشته
                                باشند.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values -->
            <div class="values-section py-5">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">ارزش‌های ما</h2>
                    <p class="section-subtitle">اصولی که در تمام مراحل کار به آن پایبند هستیم</p>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h5>اعتماد و امنیت</h5>
                            <p>اطلاعات و معاملات مشتریان برای ما مقدس است و با بالاترین استانداردهای امنیتی از آنها محافظت
                                می‌کنیم.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h5>کیفیت</h5>
                            <p>تمامی محصولات با دقت بالا انتخاب شده و قبل از عرضه کنترل کیفیت می‌شوند.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h5>پشتیبانی</h5>
                            <p>تیم پشتیبانی ما ۲۴/۷ آماده پاسخگویی به سوالات و حل مشکلات شماست.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h5>سرعت</h5>
                            <p>از سفارش تا تحویل، سرعت در تمام مراحل برای ما اهمیت ویژه‌ای دارد.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="team-section py-5">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">تیم مدیریت</h2>
                    <p class="section-subtitle">افراد متخصصی که پشت این موفقیت هستند</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="https://via.placeholder.com/300x300/4a6cf7/ffffff?text=مدیر+عامل" alt="مدیر عامل">
                            </div>
                            <div class="team-info">
                                <h5>محمد احمدی</h5>
                                <p class="position">مدیر عامل و بنیان‌گذار</p>
                                <p class="bio">کارآفرین برتر سال ۱۴۰۰ با بیش از ۱۵ سال تجربه در تجارت الکترونیک</p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="https://via.placeholder.com/300x300/10b981/ffffff?text=مدیر+فنی" alt="مدیر فنی">
                            </div>
                            <div class="team-info">
                                <h5>فاطمه محمدی</h5>
                                <p class="position">مدیر فنی</p>
                                <p class="bio">متخصص فناوری اطلاعات با ۱۲ سال سابقه در توسعه پلتفرم‌های تجارت الکترونیک
                                </p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="https://via.placeholder.com/300x300/8b5cf6/ffffff?text=مدیر+بازاریابی"
                                    alt="مدیر بازاریابی">
                            </div>
                            <div class="team-info">
                                <h5>علی رضایی</h5>
                                <p class="position">مدیر بازاریابی</p>
                                <p class="bio">متخصص دیجیتال مارکتینگ با تجربه در برندینگ و استراتژی‌های فروش آنلاین</p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="https://via.placeholder.com/300x300/f59e0b/ffffff?text=مدیر+فروش"
                                    alt="مدیر فروش">
                            </div>
                            <div class="team-info">
                                <h5>زهرا کریمی</h5>
                                <p class="position">مدیر فروش و مشتریان</p>
                                <p class="bio">متخصص روابط مشتری با سابقه درخشان در افزایش رضایت مشتریان و فروش</p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <div class="timeline-section py-5">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">تاریخچه ما</h2>
                    <p class="section-subtitle">سفر ما از ابتدا تا امروز</p>
                </div>

                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-year">۱۳۹۰</div>
                        <div class="timeline-content">
                            <h5>تاسیس فروشگاه</h5>
                            <p>فروشگاه ایرانی با یک تیم ۵ نفره و سرمایه‌ای اندک فعالیت خود را آغاز کرد.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-year">۱۳۹۲</div>
                        <div class="timeline-content">
                            <h5>گسترش محصولات</h5>
                            <p>اضافه شدن دسته‌بندی لوازم الکترونیکی و پوشاک به مجموعه محصولات</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-year">۱۳۹۵</div>
                        <div class="timeline-content">
                            <h5>افتتاح انبار مرکزی</h5>
                            <p>تاسیس انبار ۵۰۰۰ متری در تهران برای بهبود خدمات ارسال</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-year">۱۳۹۸</div>
                        <div class="timeline-content">
                            <h5>رکورد فروش</h5>
                            <p>دستیابی به ۱۰۰ هزار مشتری فعال و فروش ماهانه ۵ میلیارد تومان</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-year">۱۴۰۲</div>
                        <div class="timeline-content">
                            <h5>توسعه بین‌المللی</h5>
                            <p>شروع فعالیت‌های بین‌المللی و همکاری با برندهای جهانی</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section text-center py-5 mt-5">
                <div class="cta-content">
                    <h2 class="mb-4">به خانواده بزرگ فروشگاه ایرانی بپیوندید</h2>
                    <p class="mb-4">ما همیشه به دنبال استعدادهای درخشان و همکاران متعهد هستیم</p>
                    <div class="cta-buttons">
                        <a href="contact.html" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-briefcase me-2"></i>همکاری با ما
                        </a>
                        <a href="products.html" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-shopping-cart me-2"></i>مشاهده محصولات
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه درباره ما */
        .about-hero {
            background-color: var(--white);
            padding: 50px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            background-color: var(--light-color);
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .stat-item:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .about-image {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-hover);
        }

        .mission-card,
        .vision-card {
            background-color: var(--white);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            height: 100%;
            transition: var(--transition);
        }

        .mission-card:hover,
        .vision-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .mission-icon,
        .vision-icon {
            width: 70px;
            height: 70px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            transition: var(--transition);
        }

        .mission-card:hover .mission-icon {
            background-color: var(--primary-color);
            color: white;
        }

        .vision-card:hover .vision-icon {
            background-color: var(--primary-color);
            color: white;
        }

        .values-section {
            background-color: var(--light-color);
            border-radius: var(--border-radius);
            padding: 50px 30px;
        }

        .value-card {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            height: 100%;
            transition: var(--transition);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .value-icon {
            width: 60px;
            height: 60px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-color);
            margin: 0 auto 20px;
            transition: var(--transition);
        }

        .value-card:hover .value-icon {
            background-color: var(--primary-color);
            color: white;
        }

        .value-card h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .team-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .team-image {
            height: 250px;
            overflow: hidden;
        }

        .team-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .team-card:hover .team-image img {
            transform: scale(1.05);
        }

        .team-info {
            padding: 25px;
            text-align: center;
        }

        .team-info h5 {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .position {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 15px;
        }

        .bio {
            color: var(--gray-color);
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .social-links a {
            width: 35px;
            height: 35px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-color);
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            right: 50%;
            transform: translateX(50%);
            top: 0;
            bottom: 0;
            width: 4px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }

        .timeline-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
            position: relative;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-year {
            width: 40%;
            text-align: center;
            padding: 15px 25px;
            background-color: var(--primary-color);
            color: white;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 1.2rem;
            position: relative;
            z-index: 1;
        }

        .timeline-content {
            width: 50%;
            background-color: var(--white);
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .timeline-content h5 {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .cta-section {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: var(--border-radius);
            color: white;
            padding: 60px;
        }

        .cta-section h2 {
            color: white;
        }

        .cta-buttons .btn-primary {
            background-color: white;
            color: var(--primary-color);
            border-color: white;
        }

        .cta-buttons .btn-primary:hover {
            background-color: var(--light-color);
            color: var(--primary-color);
        }

        .cta-buttons .btn-outline-primary {
            background-color: transparent;
            color: white;
            border-color: white;
        }

        .cta-buttons .btn-outline-primary:hover {
            background-color: white;
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .about-hero {
                padding: 30px;
            }

            .timeline::before {
                right: 30px;
            }

            .timeline-item {
                flex-direction: column !important;
                align-items: flex-start;
                margin-right: 60px;
            }

            .timeline-year,
            .timeline-content {
                width: 100%;
            }

            .timeline-year {
                margin-bottom: 20px;
            }

            .cta-section {
                padding: 40px 20px;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .cta-buttons .btn {
                width: 100%;
                margin: 0 !important;
            }
        }
    </style>
@endsection


