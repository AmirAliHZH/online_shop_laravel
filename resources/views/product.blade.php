@extends('layout.master')
@section('title')
    محصول
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
                    <li class="breadcrumb-item">
                        <a href="categories.html">الکترونیک</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="products.html">موبایل و تبلت</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        گوشی موبایل سامسونگ گلکسی S23
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Details -->
    <section class="product-details py-5">
        <div class="container">
            <div class="row">
                <!-- Product Images -->
                <div class="col-lg-6">
                    <div class="product-gallery">
                        <!-- Main Image -->
                        <div class="main-image mb-3">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/600x600/4a6cf7/ffffff?text=گوشی+سامسونگ+جلو"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/600x600/10b981/ffffff?text=گوشی+سامسونگ+عقب"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/600x600/8b5cf6/ffffff?text=گوشی+سامسونگ+کنار"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/600x600/f59e0b/ffffff?text=گوشی+سامسونگ+بسته‌بندی"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thumbnails -->
                        <div class="thumbnail-slider">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/100x100/4a6cf7/ffffff?text=جلو"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/100x100/10b981/ffffff?text=عقب"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/100x100/8b5cf6/ffffff?text=کنار"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://via.placeholder.com/100x100/f59e0b/ffffff?text=بسته‌بندی"
                                            alt="گوشی سامسونگ" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <div class="product-badges mb-3">
                            <span class="badge bg-danger">۱۵٪ تخفیف</span>
                            <span class="badge bg-success">جدید</span>
                            <span class="badge bg-primary">پرفروش</span>
                        </div>

                        <h1 class="product-title">گوشی موبایل سامسونگ گلکسی S23</h1>

                        <div class="product-rating mb-3">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="rating-text">۴.۲ از ۵</span>
                            </div>
                            <span class="review-count">(۱۲۴ نظر)</span>
                            <span class="stock-status text-success">
                                <i class="fas fa-check-circle"></i> موجود در انبار
                            </span>
                        </div>

                        <div class="product-price mb-4">
                            <div class="current-price">
                                <span class="price">۳۲,۹۹۰,۰۰۰</span>
                                <span class="currency">تومان</span>
                            </div>
                            <div class="old-price">
                                <span class="price">۳۶,۵۰۰,۰۰۰</span>
                                <span class="currency">تومان</span>
                            </div>
                            <div class="discount-percent">۱۵٪</div>
                        </div>

                        <div class="product-description mb-4">
                            <p>
                                گوشی هوشمند سامسونگ گلکسی S23 با صفحه نمایش Dynamic AMOLED 2X
                                6.1 اینچی، پردازنده Snapdragon 8 Gen 2 و دوربین اصلی ۵۰
                                مگاپیکسلی ارائه شده است. این گوشی با باتری ۳۹۰۰ میلی‌آمپر
                                ساعتی و قابلیت شارژ ۲۵ واتی همراه است.
                            </p>
                        </div>

                        <!-- Product Options -->
                        <div class="product-options mb-4">
                            <!-- Color Option -->
                            <div class="option-group mb-4">
                                <h6 class="option-title">رنگ:</h6>
                                <div class="color-options">
                                    <div class="color-option selected" data-color="مشکی" style="background-color: #1e293b">
                                        <div class="color-tooltip">مشکی</div>
                                    </div>
                                    <div class="color-option" data-color="سبز" style="background-color: #10b981">
                                        <div class="color-tooltip">سبز</div>
                                    </div>
                                    <div class="color-option" data-color="بنفش" style="background-color: #8b5cf6">
                                        <div class="color-tooltip">بنفش</div>
                                    </div>
                                    <div class="color-option" data-color="کرم" style="background-color: #fef3c7">
                                        <div class="color-tooltip">کرم</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Storage Option -->
                            <div class="option-group mb-4">
                                <h6 class="option-title">حافظه داخلی:</h6>
                                <div class="storage-options">
                                    <button class="storage-option active" data-storage="128">
                                        ۱۲۸ گیگابایت
                                    </button>
                                    <button class="storage-option" data-storage="256">
                                        ۲۵۶ گیگابایت
                                    </button>
                                    <button class="storage-option" data-storage="512">
                                        ۵۱۲ گیگابایت
                                    </button>
                                </div>
                            </div>

                            <!-- Quantity -->
                            <div class="option-group mb-4">
                                <h6 class="option-title">تعداد:</h6>
                                <div class="quantity-selector">
                                    <button class="quantity-btn decrease">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" class="quantity-input" value="1" min="1"
                                        max="10" />
                                    <button class="quantity-btn increase">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons mb-5">
                            <button class="btn btn-primary btn-lg add-to-cart-btn">
                                <i class="fas fa-shopping-cart me-2"></i>افزودن به سبد خرید
                            </button>
                            <button class="btn btn-outline-primary btn-lg">
                                <i class="far fa-heart me-2"></i>افزودن به علاقه‌مندی‌ها
                            </button>
                        </div>

                        <!-- Product Meta -->
                        <div class="product-meta">
                            <div class="meta-item">
                                <i class="fas fa-shipping-fast"></i>
                                <span>ارسال رایگان برای سفارش‌های بالای ۵۰۰ هزار تومان</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>گارانتی ۱۸ ماهه سامسونگ</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-undo"></i>
                                <span>ضمانت بازگشت ۷ روزه</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-headset"></i>
                                <span>پشتیبانی ۲۴ ساعته</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="product-tabs mt-5">
                <ul class="nav nav-tabs" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                            data-bs-target="#description" type="button" role="tab">
                            توضیحات محصول
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs"
                            type="button" role="tab">
                            مشخصات فنی
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab">
                            نظرات کاربران
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions"
                            type="button" role="tab">
                            پرسش و پاسخ
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="productTabContent">
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="p-4">
                            <h4>گوشی هوشمند سامسونگ گلکسی S23</h4>
                            <p>
                                گلکسی S23 جدیدترین پرچمدار سامسونگ با طراحی زیبا و امکانات
                                پیشرفته است. این گوشی با پردازنده قدرتمند Snapdragon 8 Gen 2،
                                عملکرد فوق‌العاده‌ای در اجرای بازی‌ها و برنامه‌های سنگین ارائه
                                می‌دهد.
                            </p>

                            <h5 class="mt-4">ویژگی‌های اصلی:</h5>
                            <ul>
                                <li>
                                    صفحه نمایش Dynamic AMOLED 2X 6.1 اینچی با رفرش ریت ۱۲۰ هرتز
                                </li>
                                <li>پردازنده Snapdragon 8 Gen 2 با ۸ گیگابایت رم</li>
                                <li>دوربین اصلی ۵۰ مگاپیکسل با لرزش‌گیر اپتیکال</li>
                                <li>دوربین سلفی ۱۲ مگاپیکسلی</li>
                                <li>باتری ۳۹۰۰ میلی‌آمپر ساعتی با شارژ ۲۵ واتی</li>
                                <li>مقاوم در برابر آب و گرد و غبار با استاندارد IP68</li>
                                <li>سیستم عامل اندروید ۱۳ با رابط کاربری One UI 5.1</li>
                            </ul>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <img src="https://via.placeholder.com/500x300/4a6cf7/ffffff?text=نمایش+صفحه+نمایش"
                                        alt="صفحه نمایش" class="img-fluid rounded mb-3" />
                                </div>
                                <div class="col-md-6">
                                    <img src="https://via.placeholder.com/500x300/10b981/ffffff?text=دوربین+اصلی"
                                        alt="دوربین" class="img-fluid rounded mb-3" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specifications Tab -->
                    <div class="tab-pane fade" id="specs" role="tabpanel">
                        <div class="p-4">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th width="30%">صفحه نمایش</th>
                                        <td>
                                            Dynamic AMOLED 2X، ۶.۱ اینچ، رزولوشن ۲۳۴۰×۱۰۸۰، ۱۲۰ هرتز
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>پردازنده</th>
                                        <td>Snapdragon 8 Gen 2 (۴ نانومتر)</td>
                                    </tr>
                                    <tr>
                                        <th>رم</th>
                                        <td>۸ گیگابایت</td>
                                    </tr>
                                    <tr>
                                        <th>حافظه داخلی</th>
                                        <td>۱۲۸/۲۵۶/۵۱۲ گیگابایت</td>
                                    </tr>
                                    <tr>
                                        <th>دوربین اصلی</th>
                                        <td>
                                            سه گانه: ۵۰ مگاپیکسل (اصلی) + ۱۰ مگاپیکسل (تله‌فوتو) +
                                            ۱۲ مگاپیکسل (اولترا واید)
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>دوربین سلفی</th>
                                        <td>۱۲ مگاپیکسل</td>
                                    </tr>
                                    <tr>
                                        <th>باتری</th>
                                        <td>
                                            ۳۹۰۰ میلی‌آمپر ساعتی، شارژ ۲۵ واتی، شارژ بی‌سیم ۱۵ واتی
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>سیستم عامل</th>
                                        <td>اندروید ۱۳ با One UI 5.1</td>
                                    </tr>
                                    <tr>
                                        <th>سایر مشخصات</th>
                                        <td>
                                            مقاوم در برابر آب IP68، اسکنر اثر انگشت درون صفحه، تشخیص
                                            چهره
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ابعاد و وزن</th>
                                        <td>۱۴۶.۳ × ۷۰.۹ × ۷.۶ میلی‌متر، ۱۶۸ گرم</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="overall-rating text-center">
                                        <div class="rating-number">۴.۲</div>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="text-muted">از ۱۲۴ نظر</p>
                                    </div>

                                    <div class="rating-bars mt-4">
                                        <div class="rating-bar">
                                            <span>۵ ستاره</span>
                                            <div class="bar">
                                                <div class="fill" style="width: 65%"></div>
                                            </div>
                                            <span>۶۵٪</span>
                                        </div>
                                        <div class="rating-bar">
                                            <span>۴ ستاره</span>
                                            <div class="bar">
                                                <div class="fill" style="width: 25%"></div>
                                            </div>
                                            <span>۲۵٪</span>
                                        </div>
                                        <div class="rating-bar">
                                            <span>۳ ستاره</span>
                                            <div class="bar">
                                                <div class="fill" style="width: 7%"></div>
                                            </div>
                                            <span>۷٪</span>
                                        </div>
                                        <div class="rating-bar">
                                            <span>۲ ستاره</span>
                                            <div class="bar">
                                                <div class="fill" style="width: 2%"></div>
                                            </div>
                                            <span>۲٪</span>
                                        </div>
                                        <div class="rating-bar">
                                            <span>۱ ستاره</span>
                                            <div class="bar">
                                                <div class="fill" style="width: 1%"></div>
                                            </div>
                                            <span>۱٪</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="reviews-list">
                                        <!-- Review 1 -->
                                        <div class="review-item">
                                            <div class="review-header">
                                                <div class="reviewer-info">
                                                    <h6 class="mb-0">محمد احمدی</h6>
                                                    <div class="review-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <span class="review-date">۱۴۰۲/۰۵/۱۰</span>
                                            </div>
                                            <div class="review-body">
                                                <p>
                                                    کیفیت ساخت عالی، دوربین فوق‌العاده و باتری خوبی
                                                    داره. کاملاً راضی هستم.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Review 2 -->
                                        <div class="review-item">
                                            <div class="review-header">
                                                <div class="reviewer-info">
                                                    <h6 class="mb-0">فاطمه محمدی</h6>
                                                    <div class="review-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                                <span class="review-date">۱۴۰۲/۰۵/۰۸</span>
                                            </div>
                                            <div class="review-body">
                                                <p>
                                                    طراحی زیبا و نازک، اما شارژر داخل جعبه نیست که کمی
                                                    آزاردهنده است.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add Review Button -->
                                    <button class="btn btn-primary mt-4" data-bs-toggle="modal"
                                        data-bs-target="#addReviewModal">
                                        <i class="fas fa-plus me-2"></i>افزودن نظر
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Questions Tab -->
                    <div class="tab-pane fade" id="questions" role="tabpanel">
                        <div class="p-4">
                            <div class="questions-list">
                                <!-- Question 1 -->
                                <div class="question-item">
                                    <div class="question-header">
                                        <h6>
                                            آیا گوشی گلکسی S23 با شارژر سریع ۴۵ واتی سازگار است؟
                                        </h6>
                                        <span class="question-date">پرسیده شده در ۱۴۰۲/۰۵/۱۲</span>
                                    </div>
                                    <div class="question-body">
                                        <p>
                                            <strong>پاسخ:</strong> بله، این گوشی از شارژ سریع تا ۲۵
                                            وات پشتیبانی می‌کند و با شارژرهای ۴۵ واتی نیز سازگار است
                                            اما با حداکثر سرعت ۲۵ وات شارژ می‌شود.
                                        </p>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="question-item">
                                    <div class="question-header">
                                        <h6>آیا گوشی دارای گارانتی رسمی سامسونگ است؟</h6>
                                        <span class="question-date">پرسیده شده در ۱۴۰۲/۰۵/۱۰</span>
                                    </div>
                                    <div class="question-body">
                                        <p>
                                            <strong>پاسخ:</strong> بله، این محصول دارای ۱۸ ماه
                                            گارانتی رسمی سامسونگ می‌باشد.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Ask Question Button -->
                            <button class="btn btn-outline-primary mt-4" data-bs-toggle="modal"
                                data-bs-target="#askQuestionModal">
                                <i class="fas fa-question-circle me-2"></i>پرسش سوال جدید
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="related-products mt-5 pt-5 border-top">
                <h3 class="mb-4">محصولات مرتبط</h3>
                <div class="row">
                    <!-- Related Product 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://via.placeholder.com/300x300/10b981/ffffff?text=گوشی+اپل"
                                    alt="گوشی اپل" />
                                <div class="product-actions">
                                    <button class="btn-action add-to-favorite">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button class="btn-action add-to-cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="product.html">گوشی موبایل اپل آیفون ۱۴ پرو</a>
                                </h5>
                                <div class="product-price">
                                    <span class="price-main">۶۸,۵۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-count">(۱۸۹)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://via.placeholder.com/300x300/8b5cf6/ffffff?text=گوشی+شیائومی"
                                    alt="گوشی شیائومی" />
                                <div class="product-actions">
                                    <button class="btn-action add-to-favorite">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button class="btn-action add-to-cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="product.html">گوشی موبایل شیائومی ۱۳ پرو</a>
                                </h5>
                                <div class="product-price">
                                    <span class="price-main">۲۴,۹۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                    <span class="price-discount">۲۸,۵۰۰,۰۰۰</span>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="rating-count">(۲۳۴)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://via.placeholder.com/300x300/f59e0b/ffffff?text=گوشی+گوگل"
                                    alt="گوشی گوگل" />
                                <div class="product-actions">
                                    <button class="btn-action add-to-favorite">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button class="btn-action add-to-cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="product.html">گوشی موبایل گوگل پیکسل ۷ پرو</a>
                                </h5>
                                <div class="product-price">
                                    <span class="price-main">۳۶,۸۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-count">(۱۴۵)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://via.placeholder.com/300x300/ef4444/ffffff?text=گوشی+وان+پلاس"
                                    alt="گوشی وان پلاس" />
                                <div class="product-actions">
                                    <button class="btn-action add-to-favorite">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button class="btn-action add-to-cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="product.html">گوشی موبایل وان پلاس ۱۱</a>
                                </h5>
                                <div class="product-price">
                                    <span class="price-main">۲۸,۵۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                    <span class="price-discount">۳۲,۰۰۰,۰۰۰</span>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-count">(۱۹۸)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modal')
    <!-- Modals -->
    <!-- Add Review Modal -->
    <div class="modal fade" id="addReviewModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ثبت نظر جدید</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="reviewForm">
                        <div class="mb-3">
                            <label class="form-label">امتیاز شما</label>
                            <div class="rating-input">
                                <i class="far fa-star" data-rating="1"></i>
                                <i class="far fa-star" data-rating="2"></i>
                                <i class="far fa-star" data-rating="3"></i>
                                <i class="far fa-star" data-rating="4"></i>
                                <i class="far fa-star" data-rating="5"></i>
                            </div>
                            <input type="hidden" id="ratingValue" value="0" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">عنوان نظر</label>
                            <input type="text" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">متن نظر</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت نظر</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Ask Question Modal -->
    <div class="modal fade" id="askQuestionModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">پرسش سوال جدید</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="questionForm">
                        <div class="mb-3">
                            <label class="form-label">سوال شما</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال سوال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });

        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });

        // Product Options Management
        document.querySelectorAll(".color-option").forEach((option) => {
            option.addEventListener("click", function() {
                document.querySelectorAll(".color-option").forEach((opt) => {
                    opt.classList.remove("selected");
                });
                this.classList.add("selected");
            });
        });

        document.querySelectorAll(".storage-option").forEach((option) => {
            option.addEventListener("click", function() {
                document.querySelectorAll(".storage-option").forEach((opt) => {
                    opt.classList.remove("active");
                });
                this.classList.add("active");
            });
        });

        // Quantity Selector
        const quantityInput = document.querySelector(".quantity-input");
        const decreaseBtn = document.querySelector(".quantity-btn.decrease");
        const increaseBtn = document.querySelector(".quantity-btn.increase");

        decreaseBtn.addEventListener("click", function() {
            let value = parseInt(quantityInput.value);
            if (value > 1) {
                quantityInput.value = value - 1;
            }
        });

        increaseBtn.addEventListener("click", function() {
            let value = parseInt(quantityInput.value);
            if (value < 10) {
                quantityInput.value = value + 1;
            }
        });

        // Rating Input
        const ratingStars = document.querySelectorAll(".rating-input i");
        const ratingValue = document.getElementById("ratingValue");

        ratingStars.forEach((star) => {
            star.addEventListener("click", function() {
                const rating = this.getAttribute("data-rating");
                ratingValue.value = rating;

                ratingStars.forEach((s) => {
                    if (s.getAttribute("data-rating") <= rating) {
                        s.classList.remove("far");
                        s.classList.add("fas");
                    } else {
                        s.classList.remove("fas");
                        s.classList.add("far");
                    }
                });
            });
        });

        // Add to Cart Button
        const addToCartBtn = document.querySelector(".add-to-cart-btn");
        addToCartBtn.addEventListener("click", function() {
            const color = document
                .querySelector(".color-option.selected")
                .getAttribute("data-color");
            const storage = document
                .querySelector(".storage-option.active")
                .getAttribute("data-storage");
            const quantity = quantityInput.value;

            // Show success message
            showToast(
                `گوشی سامسونگ S23 (${color} - ${storage}GB) به تعداد ${quantity} عدد به سبد خرید اضافه شد`
            );

            // Button animation
            this.innerHTML = '<i class="fas fa-check me-2"></i>اضافه شد';
            this.classList.add("btn-success");
            this.classList.remove("btn-primary");

            setTimeout(() => {
                this.innerHTML =
                    '<i class="fas fa-shopping-cart me-2"></i>افزودن به سبد خرید';
                this.classList.remove("btn-success");
                this.classList.add("btn-primary");
            }, 2000);
        });
    </script>
@endsection
@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه محصول */
        .product-gallery {
            background-color: var(--white);
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .main-image {
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .thumbnail-slider {
            margin-top: 20px;
        }

        .thumbnail-slider .swiper-slide {
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: var(--border-radius-sm);
            overflow: hidden;
            transition: var(--transition);
        }

        .thumbnail-slider .swiper-slide:hover {
            border-color: var(--primary-color);
        }

        .product-info {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .product-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .stars {
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--warning-color);
        }

        .rating-text {
            font-weight: 600;
            margin-right: 5px;
        }

        .review-count {
            color: var(--gray-color);
        }

        .stock-status {
            background-color: rgba(16, 185, 129, 0.1);
            padding: 5px 10px;
            border-radius: var(--border-radius-sm);
            font-size: 0.9rem;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .current-price {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .current-price .price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .current-price .currency {
            font-size: 1.2rem;
            color: var(--primary-color);
        }

        .old-price {
            display: flex;
            align-items: center;
            gap: 5px;
            text-decoration: line-through;
            color: var(--gray-color);
        }

        .discount-percent {
            background-color: var(--danger-color);
            color: white;
            padding: 5px 15px;
            border-radius: var(--border-radius-sm);
            font-weight: 600;
        }

        .option-title {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .color-options {
            display: flex;
            gap: 15px;
        }

        .color-option {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            border: 2px solid transparent;
            transition: var(--transition);
        }

        .color-option.selected {
            border-color: var(--primary-color);
            transform: scale(1.1);
        }

        .color-option:hover .color-tooltip {
            opacity: 1;
            visibility: visible;
        }

        .color-tooltip {
            position: absolute;
            bottom: 100%;
            right: 50%;
            transform: translateX(50%);
            background-color: var(--dark-color);
            color: var(--white);
            padding: 5px 10px;
            border-radius: var(--border-radius-sm);
            font-size: 0.8rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            margin-bottom: 10px;
        }

        .storage-options {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .storage-option {
            padding: 10px 20px;
            background-color: var(--light-color);
            border: 2px solid transparent;
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            transition: var(--transition);
        }

        .storage-option.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .storage-option:hover:not(.active) {
            border-color: var(--primary-color);
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            max-width: 150px;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            background-color: var(--light-color);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .quantity-btn:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .quantity-input {
            width: 60px;
            height: 40px;
            text-align: center;
            border: 1px solid var(--gray-light);
            border-left: none;
            border-right: none;
            font-family: var(--font-primary);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .action-buttons .btn {
            flex: 1;
            min-width: 200px;
        }

        .product-meta {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--gray-light);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--gray-color);
        }

        .meta-item i {
            color: var(--primary-color);
        }

        .product-tabs {
            background-color: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .nav-tabs {
            border-bottom: 2px solid var(--light-color);
            padding: 0 20px;
        }

        .nav-tabs .nav-link {
            border: none;
            padding: 15px 25px;
            color: var(--gray-color);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
            background-color: transparent;
        }

        .tab-content {
            min-height: 300px;
        }

        .overall-rating {
            background-color: var(--light-color);
            padding: 30px;
            border-radius: var(--border-radius);
        }

        .rating-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--dark-color);
        }

        .rating-bars {
            margin-top: 20px;
        }

        .rating-bar {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .rating-bar .bar {
            flex: 1;
            height: 8px;
            background-color: var(--gray-light);
            border-radius: 4px;
            overflow: hidden;
        }

        .rating-bar .fill {
            height: 100%;
            background-color: var(--warning-color);
        }

        .review-item {
            border-bottom: 1px solid var(--gray-light);
            padding: 20px 0;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .review-date {
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        .question-item {
            border-bottom: 1px solid var(--gray-light);
            padding: 20px 0;
        }

        .question-header {
            margin-bottom: 10px;
        }

        .question-date {
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        .related-products {
            padding-top: 30px;
        }

        @media (max-width: 768px) {
            .action-buttons .btn {
                min-width: 100%;
            }

            .product-price {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
@endsection
