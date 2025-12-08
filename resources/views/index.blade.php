@extends('layout.master')
@section('title')
    صفحه اصلی
@endsection
@section('body')
    <!-- Theme Toggle -->
    <div class="theme-toggle">
        <button id="themeToggle" class="btn-theme-toggle">
            <i class="fas fa-moon"></i>
        </button>
    </div>

    <!-- Header -->
    <header class="header sticky-top">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">
                            <i class="fas fa-truck me-1"></i>
                            ارسال رایگان برای سفارش‌های بالای ۵۰۰ هزار تومان
                        </p>
                    </div>
                    <div class="col-md-6 text-start">
                        <div class="top-links">
                            <a href="login.html"><i class="fas fa-user me-1"></i> ورود به حساب کاربری</a>
                            <a href="register.html">ثبت نام</a>
                            <a href="support.html">پشتیبانی</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg main-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.svg" alt="فروشگاه ایرانی" class="logo">
                </a>

                <div class="search-box">
                    <form action="products.html">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو در محصولات...">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="header-icons">
                    <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#userModal">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#favoriteModal">
                        <i class="fas fa-heart"></i>
                        <span class="badge">۳</span>
                    </a>
                    <a href="cart.html" class="icon-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge">۲</span>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">خانه</a>
                        </li>
                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                دسته‌بندی محصولات
                            </a>
                            <div class="dropdown-menu mega-menu-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6>لوازم الکترونیکی</h6>
                                            <ul>
                                                <li><a href="products.html?cat=1">موبایل و تبلت</a></li>
                                                <li><a href="products.html?cat=2">لپ‌تاپ و کامپیوتر</a></li>
                                                <li><a href="products.html?cat=3">تلویزیون و سینمای خانگی</a></li>
                                                <li><a href="products.html?cat=4">هدفون و هندزفری</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h6>مد و پوشاک</h6>
                                            <ul>
                                                <li><a href="products.html?cat=5">لباس مردانه</a></li>
                                                <li><a href="products.html?cat=6">لباس زنانه</a></li>
                                                <li><a href="products.html?cat=7">کفش و کتانی</a></li>
                                                <li><a href="products.html?cat=8">ساعت و زیورآلات</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h6>خانه و آشپزخانه</h6>
                                            <ul>
                                                <li><a href="products.html?cat=9">لوازم خانگی</a></li>
                                                <li><a href="products.html?cat=10">ظروف و آشپزخانه</a></li>
                                                <li><a href="products.html?cat=11">دکور و خانه</a></li>
                                                <li><a href="products.html?cat=12">نور و روشنایی</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h6>کالاهای سوپرمارکتی</h6>
                                            <ul>
                                                <li><a href="products.html?cat=13">خواربار</a></li>
                                                <li><a href="products.html?cat=14">مواد پروتئینی</a></li>
                                                <li><a href="products.html?cat=15">نوشیدنی‌ها</a></li>
                                                <li><a href="products.html?cat=16">شوینده و بهداشتی</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html?cat=discount">تخفیف‌های ویژه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">تماس با ما</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Slider -->
    <section class="main-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-content">
                        <img src="https://via.placeholder.com/1200x400/4a6cf7/ffffff?text=تخفیف‌های+شگفت‌انگیز+بهاره"
                            alt="تخفیف بهاره">
                        <div class="slide-overlay">
                            <div class="slide-text">
                                <h2>فروش بهاری</h2>
                                <p>تا ۵۰٪ تخفیف روی محصولات منتخب</p>
                                <a href="products.html?cat=discount" class="btn btn-primary btn-lg">مشاهده تخفیف‌ها</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <img src="https://via.placeholder.com/1200x400/10b981/ffffff?text=جدیدترین+گوشی‌های+موبایل"
                            alt="گوشی موبایل">
                        <div class="slide-overlay">
                            <div class="slide-text">
                                <h2>جدیدترین محصولات</h2>
                                <p>بهترین گوشی‌های سال ۲۰۲۳ با گارانتی معتبر</p>
                                <a href="products.html?cat=1" class="btn btn-primary btn-lg">خرید از اینجا</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <img src="https://via.placeholder.com/1200x400/8b5cf6/ffffff?text=لوازم+خانگی+هوشمند"
                            alt="لوازم خانگی">
                        <div class="slide-overlay">
                            <div class="slide-text">
                                <h2>خانه هوشمند</h2>
                                <p>لوازم خانگی مدرن با قیمت ویژه</p>
                                <a href="products.html?cat=9" class="btn btn-primary btn-lg">مشاهده محصولات</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">دسته‌بندی محصولات</h2>
                <p class="section-subtitle">محصولات مورد نظر خود را از بین دسته‌بندی‌های متنوع انتخاب کنید</p>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="products.html?cat=1" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h5>موبایل و تبلت</h5>
                        <p>۳۴۵ محصول</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="products.html?cat=2" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h5>لپ‌تاپ و کامپیوتر</h5>
                        <p>۲۱۷ محصول</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="products.html?cat=5" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <h5>پوشاک مردانه</h5>
                        <p>۵۶۲ محصول</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="products.html?cat=9" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h5>لوازم خانگی</h5>
                        <p>۴۳۱ محصول</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products py-5 bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">محصولات منتخب</h2>
                <p class="section-subtitle">برترین محصولات با بهترین قیمت‌ها</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/300x300/4a6cf7/ffffff?text=گوشی+موبایل"
                                alt="گوشی موبایل">
                            <div class="product-badges">
                                <span class="badge bg-danger">تخفیف ویژه</span>
                                <span class="badge bg-success">جدید</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-action add-to-favorite"><i class="far fa-heart"></i></button>
                                <button class="btn-action add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                                <button class="btn-action quick-view"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title"><a href="product.html">گوشی موبایل سامسونگ گلکسی S23</a></h5>
                            <div class="product-price">
                                <span class="price-main">۳۲,۹۹۰,۰۰۰ <span class="currency">تومان</span></span>
                                <span class="price-discount">۳۶,۵۰۰,۰۰۰</span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="rating-count">(۱۲۴)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/300x300/10b981/ffffff?text=لپ‌تاپ" alt="لپ‌تاپ">
                            <div class="product-badges">
                                <span class="badge bg-primary">پرفروش</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-action add-to-favorite"><i class="far fa-heart"></i></button>
                                <button class="btn-action add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                                <button class="btn-action quick-view"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title"><a href="product.html">لپ‌تاپ اپل مک‌بوک پرو ۱۴ اینچ</a></h5>
                            <div class="product-price">
                                <span class="price-main">۷۸,۵۰۰,۰۰۰ <span class="currency">تومان</span></span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="rating-count">(۸۹)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/300x300/8b5cf6/ffffff?text=هدفون" alt="هدفون">
                            <div class="product-badges">
                                <span class="badge bg-warning">پیشنهاد ویژه</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-action add-to-favorite"><i class="far fa-heart"></i></button>
                                <button class="btn-action add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                                <button class="btn-action quick-view"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title"><a href="product.html">هدفون بی‌سیم سونی WH-1000XM4</a></h5>
                            <div class="product-price">
                                <span class="price-main">۱۲,۳۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                <span class="price-discount">۱۴,۹۰۰,۰۰۰</span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-count">(۲۴۱)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/300x300/f59e0b/ffffff?text=ساعت+هوشمند"
                                alt="ساعت هوشمند">
                            <div class="product-badges">
                                <span class="badge bg-info">محصول جدید</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-action add-to-favorite"><i class="far fa-heart"></i></button>
                                <button class="btn-action add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                                <button class="btn-action quick-view"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title"><a href="product.html">ساعت هوشمند اپل واچ سری ۸</a></h5>
                            <div class="product-price">
                                <span class="price-main">۲۴,۷۰۰,۰۰۰ <span class="currency">تومان</span></span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="rating-count">(۶۷)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="products.html" class="btn btn-outline-primary btn-lg">مشاهده همه محصولات</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h5>ارسال سریع</h5>
                        <p>ارسال در کمتر از ۲۴ ساعت در تهران</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>ضمانت بازگشت</h5>
                        <p>۷ روز ضمانت بازگشت کالا</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>پشتیبانی ۲۴/۷</h5>
                        <p>پشتیبانی آنلاین در تمام ساعات</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="feature-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h5>پرداخت امن</h5>
                        <p>پرداخت آنلاین با امنیت بالا</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modal')
    <!-- Modals -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">حساب کاربری</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="user-avatar mb-3">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <h6>سلام، کاربر عزیز!</h6>
                        <p class="text-muted">برای مشاهده حساب کاربری خود وارد شوید</p>
                        <div class="d-grid gap-2">
                            <a href="login.html" class="btn btn-primary">ورود به حساب کاربری</a>
                            <a href="register.html" class="btn btn-outline-primary">ثبت نام</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick View Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">مشاهده سریع محصول</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Quick view content will be loaded by JS -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
