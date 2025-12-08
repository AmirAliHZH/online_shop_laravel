@extends('layout.master')
@section('title')
    دسته بندی ها
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
                    <li class="breadcrumb-item active" aria-current="page">
                        دسته‌بندی محصولات
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Categories Page -->
    <section class="categories-page py-5">
        <div class="container">
            <div class="section-header">
                <h1 class="section-title">دسته‌بندی محصولات</h1>
                <p class="section-subtitle">
                    محصولات مورد نظر خود را از بین دسته‌بندی‌های متنوع انتخاب کنید
                </p>
            </div>

            <div class="row">
                <!-- دسته‌بندی اصلی -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="main-category-card">
                        <div class="main-category-image">
                            <img src="https://via.placeholder.com/400x250/4a6cf7/ffffff?text=الکترونیک" alt="الکترونیک" />
                        </div>
                        <div class="main-category-content">
                            <h3>لوازم الکترونیکی</h3>
                            <p>موبایل، لپ‌تاپ، تبلت و لوازم جانبی</p>
                            <div class="sub-categories">
                                <a href="products.html?cat=1">موبایل و تبلت <span class="count">(۳۴۵)</span></a>
                                <a href="products.html?cat=2">لپ‌تاپ و کامپیوتر <span class="count">(۲۱۷)</span></a>
                                <a href="products.html?cat=3">تلویزیون <span class="count">(۱۲۰)</span></a>
                                <a href="products.html?cat=4">هدفون و هندزفری <span class="count">(۱۸۹)</span></a>
                            </div>
                            <a href="products.html?cat=electronic" class="btn btn-outline-primary mt-3">مشاهده همه</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="main-category-card">
                        <div class="main-category-image">
                            <img src="https://via.placeholder.com/400x250/10b981/ffffff?text=مد+و+پوشاک" alt="مد و پوشاک" />
                        </div>
                        <div class="main-category-content">
                            <h3>مد و پوشاک</h3>
                            <p>لباس، کفش، ساعت و زیورآلات</p>
                            <div class="sub-categories">
                                <a href="products.html?cat=5">لباس مردانه <span class="count">(۵۶۲)</span></a>
                                <a href="products.html?cat=6">لباس زنانه <span class="count">(۸۹۰)</span></a>
                                <a href="products.html?cat=7">کفش و کتانی <span class="count">(۴۳۲)</span></a>
                                <a href="products.html?cat=8">ساعت و زیورآلات <span class="count">(۲۷۶)</span></a>
                            </div>
                            <a href="products.html?cat=fashion" class="btn btn-outline-primary mt-3">مشاهده همه</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="main-category-card">
                        <div class="main-category-image">
                            <img src="https://via.placeholder.com/400x250/8b5cf6/ffffff?text=خانه+و+آشپزخانه"
                                alt="خانه و آشپزخانه" />
                        </div>
                        <div class="main-category-content">
                            <h3>خانه و آشپزخانه</h3>
                            <p>لوازم خانگی، دکور و آشپزخانه</p>
                            <div class="sub-categories">
                                <a href="products.html?cat=9">لوازم خانگی <span class="count">(۴۳۱)</span></a>
                                <a href="products.html?cat=10">ظروف و آشپزخانه <span class="count">(۳۲۱)</span></a>
                                <a href="products.html?cat=11">دکور و خانه <span class="count">(۲۱۴)</span></a>
                                <a href="products.html?cat=12">نور و روشنایی <span class="count">(۱۵۶)</span></a>
                            </div>
                            <a href="products.html?cat=home" class="btn btn-outline-primary mt-3">مشاهده همه</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="main-category-card">
                        <div class="main-category-image">
                            <img src="https://via.placeholder.com/400x250/f59e0b/ffffff?text=کالای+دیجیتال"
                                alt="کالای دیجیتال" />
                        </div>
                        <div class="main-category-content">
                            <h3>کالای دیجیتال</h3>
                            <p>گجت، دوربین، کنسول بازی</p>
                            <div class="sub-categories">
                                <a href="products.html?cat=17">دوربین و عکاسی <span class="count">(۱۴۵)</span></a>
                                <a href="products.html?cat=18">کنسول بازی <span class="count">(۸۹)</span></a>
                                <a href="products.html?cat=19">گجت و ابزار <span class="count">(۲۳۴)</span></a>
                                <a href="products.html?cat=20">لوازم جانبی <span class="count">(۳۲۱)</span></a>
                            </div>
                            <a href="products.html?cat=digital" class="btn btn-outline-primary mt-3">مشاهده همه</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="main-category-card">
                        <div class="main-category-image">
                            <img src="https://via.placeholder.com/400x250/ef4444/ffffff?text=سلامت+و+زیبایی"
                                alt="سلامت و زیبایی" />
                        </div>
                        <div class="main-category-content">
                            <h3>سلامت و زیبایی</h3>
                            <p>لوازم آرایشی، بهداشتی و سلامتی</p>
                            <div class="sub-categories">
                                <a href="products.html?cat=21">آرایشی <span class="count">(۵۴۳)</span></a>
                                <a href="products.html?cat=22">بهداشتی <span class="count">(۴۳۲)</span></a>
                                <a href="products.html?cat=23">لوازم شخصی <span class="count">(۲۱۸)</span></a>
                                <a href="products.html?cat=24">عطر و ادکلن <span class="count">(۱۸۷)</span></a>
                            </div>
                            <a href="products.html?cat=beauty" class="btn btn-outline-primary mt-3">مشاهده همه</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="main-category-card">
                        <div class="main-category-image">
                            <img src="https://via.placeholder.com/400x250/06b6d4/ffffff?text=ورزش+و+سفر"
                                alt="ورزش و سفر" />
                        </div>
                        <div class="main-category-content">
                            <h3>ورزش و سفر</h3>
                            <p>لوازم ورزشی، چمدان و ساک</p>
                            <div class="sub-categories">
                                <a href="products.html?cat=25">لوازم ورزشی <span class="count">(۳۲۱)</span></a>
                                <a href="products.html?cat=26">چمدان و ساک <span class="count">(۲۱۴)</span></a>
                                <a href="products.html?cat=27">کمپینگ <span class="count">(۱۴۳)</span></a>
                                <a href="products.html?cat=28">دوچرخه <span class="count">(۹۸)</span></a>
                            </div>
                            <a href="products.html?cat=sports" class="btn btn-outline-primary mt-3">مشاهده همه</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- دسته‌بندی‌های سوپرمارکتی -->
            <div class="supermarket-categories mt-5 pt-5 border-top">
                <h2 class="text-center mb-4">کالاهای سوپرمارکتی</h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-3">
                        <a href="products.html?cat=13" class="supermarket-category">
                            <div class="supermarket-icon">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <span>خواربار</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <a href="products.html?cat=14" class="supermarket-category">
                            <div class="supermarket-icon">
                                <i class="fas fa-drumstick-bite"></i>
                            </div>
                            <span>مواد پروتئینی</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <a href="products.html?cat=15" class="supermarket-category">
                            <div class="supermarket-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <span>نوشیدنی‌ها</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <a href="products.html?cat=16" class="supermarket-category">
                            <div class="supermarket-icon">
                                <i class="fas fa-pump-soap"></i>
                            </div>
                            <span>شوینده و بهداشتی</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه دسته‌بندی‌ها */
        .main-category-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 100%;
        }

        .main-category-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .main-category-image {
            height: 200px;
            overflow: hidden;
        }

        .main-category-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .main-category-card:hover .main-category-image img {
            transform: scale(1.05);
        }

        .main-category-content {
            padding: 25px;
        }

        .main-category-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .main-category-content p {
            color: var(--gray-color);
            margin-bottom: 20px;
        }

        .sub-categories {
            margin-bottom: 20px;
        }

        .sub-categories a {
            display: block;
            padding: 8px 0;
            color: var(--gray-color);
            border-bottom: 1px solid var(--gray-light);
            transition: var(--transition);
        }

        .sub-categories a:last-child {
            border-bottom: none;
        }

        .sub-categories a:hover {
            color: var(--primary-color);
            padding-right: 10px;
        }

        .sub-categories .count {
            float: left;
            background-color: var(--light-color);
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .supermarket-categories {
            background-color: var(--light-color);
            padding: 40px;
            border-radius: var(--border-radius);
        }

        .supermarket-category {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: var(--white);
            padding: 30px 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 100%;
        }

        .supermarket-category:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            color: var(--primary-color);
        }

        .supermarket-icon {
            width: 60px;
            height: 60px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            transition: var(--transition);
        }

        .supermarket-category:hover .supermarket-icon {
            background-color: var(--primary-color);
            color: white;
        }

        .breadcrumb-section {
            background-color: var(--light-color);
            border-bottom: 1px solid var(--gray-light);
        }

        .breadcrumb {
            margin-bottom: 0;
        }

        .breadcrumb-item a {
            color: var(--primary-color);
        }

        .breadcrumb-item.active {
            color: var(--gray-color);
        }
    </style>
@endsection
