@extends('layout.master')
@section('title')
    محصولات
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
                        <a href="categories.html">دسته‌بندی‌ها</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        لوازم الکترونیکی
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Products Page -->
    <section class="products-page py-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-lg-3">
                    <div class="sidebar-filters">
                        <!-- Filter by Category -->
                        <div class="filter-card mb-4">
                            <h5 class="filter-title">دسته‌بندی</h5>
                            <div class="filter-content">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="cat1" checked />
                                    <label class="form-check-label" for="cat1">
                                        موبایل و تبلت
                                        <span class="filter-count">(۳۴۵)</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="cat2" />
                                    <label class="form-check-label" for="cat2">
                                        لپ‌تاپ و کامپیوتر
                                        <span class="filter-count">(۲۱۷)</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="cat3" />
                                    <label class="form-check-label" for="cat3">
                                        هدفون و هندزفری
                                        <span class="filter-count">(۱۸۹)</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="cat4" />
                                    <label class="form-check-label" for="cat4">
                                        تلویزیون
                                        <span class="filter-count">(۱۲۰)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Filter by Price -->
                        <div class="filter-card mb-4">
                            <h5 class="filter-title">محدوده قیمت</h5>
                            <div class="filter-content">
                                <div class="price-range-slider">
                                    <div class="range-values mb-3">
                                        <span>از: <span id="minPrice">۰</span> تومان</span>
                                        <span>تا: <span id="maxPrice">۱۰۰,۰۰۰,۰۰۰</span> تومان</span>
                                    </div>
                                    <input type="range" class="form-range" min="0" max="100000000" step="1000000"
                                        value="0" id="priceMin" />
                                    <input type="range" class="form-range" min="0" max="100000000" step="1000000"
                                        value="100000000" id="priceMax" />
                                </div>
                            </div>
                        </div>

                        <!-- Filter by Brand -->
                        <div class="filter-card mb-4">
                            <h5 class="filter-title">برند</h5>
                            <div class="filter-content">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="brand1" />
                                    <label class="form-check-label" for="brand1">
                                        سامسونگ
                                        <span class="filter-count">(۱۵۶)</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="brand2" />
                                    <label class="form-check-label" for="brand2">
                                        اپل
                                        <span class="filter-count">(۹۸)</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="brand3" />
                                    <label class="form-check-label" for="brand3">
                                        شیائومی
                                        <span class="filter-count">(۱۲۳)</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="brand4" />
                                    <label class="form-check-label" for="brand4">
                                        سونی
                                        <span class="filter-count">(۸۷)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Filter by Rating -->
                        <div class="filter-card mb-4">
                            <h5 class="filter-title">امتیاز</h5>
                            <div class="filter-content">
                                <div class="rating-filter">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="rating5" />
                                        <label class="form-check-label" for="rating5">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="filter-count">(۴۵)</span>
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="rating4" />
                                        <label class="form-check-label" for="rating4">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="filter-count">(۱۲۳)</span>
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="rating3" />
                                        <label class="form-check-label" for="rating3">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="filter-count">(۲۱۰)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100">اعمال فیلترها</button>
                        <button class="btn btn-outline-secondary w-100 mt-2">
                            حذف فیلترها
                        </button>
                    </div>
                </div>

                <!-- Products List -->
                <div class="col-lg-9">
                    <div class="products-header mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2 class="mb-0">لوازم الکترونیکی</h2>
                                <p class="text-muted mb-0">نمایش ۱-۱۲ از ۸۷۱ محصول</p>
                            </div>
                            <div class="col-md-6 text-start">
                                <div class="sort-options">
                                    <label class="me-2">مرتب‌سازی بر اساس:</label>
                                    <select class="form-select" style="width: auto; display: inline-block">
                                        <option selected>پرفروش‌ترین</option>
                                        <option>جدیدترین</option>
                                        <option>ارزان‌ترین</option>
                                        <option>گران‌ترین</option>
                                        <option>بیشترین امتیاز</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="row">
                        <!-- Product 1 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/4a6cf7/ffffff?text=گوشی+موبایل"
                                        alt="گوشی موبایل" />
                                    <div class="product-badges">
                                        <span class="badge bg-danger">۱۵٪ تخفیف</span>
                                    </div>
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
                                        <a href="product.html">گوشی موبایل سامسونگ گلکسی S23</a>
                                    </h5>
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

                        <!-- Product 2 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/10b981/ffffff?text=لپ‌تاپ"
                                        alt="لپ‌تاپ" />
                                    <div class="product-badges">
                                        <span class="badge bg-success">جدید</span>
                                    </div>
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
                                        <a href="product.html">لپ‌تاپ اپل مک‌بوک پرو ۱۴ اینچ</a>
                                    </h5>
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

                        <!-- Product 3 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/8b5cf6/ffffff?text=هدفون"
                                        alt="هدفون" />
                                    <div class="product-badges">
                                        <span class="badge bg-warning">پیشنهاد ویژه</span>
                                    </div>
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
                                        <a href="product.html">هدفون بی‌سیم سونی WH-1000XM4</a>
                                    </h5>
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

                        <!-- Product 4 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/f59e0b/ffffff?text=ساعت+هوشمند"
                                        alt="ساعت هوشمند" />
                                    <div class="product-badges">
                                        <span class="badge bg-info">محصول جدید</span>
                                    </div>
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
                                        <a href="product.html">ساعت هوشمند اپل واچ سری ۸</a>
                                    </h5>
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

                        <!-- Product 5 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/ef4444/ffffff?text=تبلت"
                                        alt="تبلت" />
                                    <div class="product-badges">
                                        <span class="badge bg-danger">۲۰٪ تخفیف</span>
                                    </div>
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
                                        <a href="product.html">تبلت اپل آیپد پرو ۱۲.۹ اینچ</a>
                                    </h5>
                                    <div class="product-price">
                                        <span class="price-main">۴۵,۸۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                        <span class="price-discount">۵۲,۰۰۰,۰۰۰</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="rating-count">(۵۴)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/06b6d4/ffffff?text=اسپیکر"
                                        alt="اسپیکر" />
                                    <div class="product-badges">
                                        <span class="badge bg-primary">پرفروش</span>
                                    </div>
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
                                        <a href="product.html">اسپیکر بلوتوثی JBL Charge 5</a>
                                    </h5>
                                    <div class="product-price">
                                        <span class="price-main">۸,۹۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="rating-count">(۱۸۹)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 7 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/8b5cf6/ffffff?text=مچ+بند+هوشمند"
                                        alt="مچ بند هوشمند" />
                                    <div class="product-badges">
                                        <span class="badge bg-success">جدید</span>
                                    </div>
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
                                        <a href="product.html">مچ‌بند هوشمند شیائومی Mi Band 7</a>
                                    </h5>
                                    <div class="product-price">
                                        <span class="price-main">۳,۵۰۰,۰۰۰ <span class="currency">تومان</span></span>
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

                        <!-- Product 8 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://via.placeholder.com/300x300/10b981/ffffff?text=شارژر+بی‌سیم"
                                        alt="شارژر بی‌سیم" />
                                    <div class="product-badges">
                                        <span class="badge bg-warning">پیشنهاد</span>
                                    </div>
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
                                        <a href="product.html">شارژر بی‌سیم سامسونگ ۱۵ وات</a>
                                    </h5>
                                    <div class="product-price">
                                        <span class="price-main">۲,۸۰۰,۰۰۰ <span class="currency">تومان</span></span>
                                        <span class="price-discount">۳,۲۰۰,۰۰۰</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="rating-count">(۷۸)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">۱</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">۲</a></li>
                            <li class="page-item"><a class="page-link" href="#">۳</a></li>
                            <li class="page-item"><a class="page-link" href="#">۴</a></li>
                            <li class="page-item"><a class="page-link" href="#">۵</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        // مدیریت رنج قیمت
        const priceMin = document.getElementById("priceMin");
        const priceMax = document.getElementById("priceMax");
        const minPrice = document.getElementById("minPrice");
        const maxPrice = document.getElementById("maxPrice");

        function formatPrice(price) {
            return new Intl.NumberFormat("fa-IR").format(price);
        }

        priceMin.addEventListener("input", function() {
            minPrice.textContent = formatPrice(this.value);
            if (parseInt(this.value) > parseInt(priceMax.value)) {
                priceMax.value = this.value;
                maxPrice.textContent = formatPrice(this.value);
            }
        });

        priceMax.addEventListener("input", function() {
            maxPrice.textContent = formatPrice(this.value);
            if (parseInt(this.value) < parseInt(priceMin.value)) {
                priceMin.value = this.value;
                minPrice.textContent = formatPrice(this.value);
            }
        });

        // مقداردهی اولیه
        minPrice.textContent = formatPrice(priceMin.value);
        maxPrice.textContent = formatPrice(priceMax.value);
    </script>
@endsection

@section("css")
<style>
    /* استایل‌های اختصاصی صفحه محصولات */
    .sidebar-filters {
        position: sticky;
        top: 100px;
    }

    .filter-card {
        background-color: var(--white);
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
    }

    .filter-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--light-color);
    }

    .filter-content {
        max-height: 300px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .filter-count {
        color: var(--gray-color);
        float: left;
        font-size: 0.9rem;
    }

    .form-check-label {
        cursor: pointer;
        display: block;
        width: 100%;
    }

    .price-range-slider {
        padding: 10px 0;
    }

    .range-values {
        display: flex;
        justify-content: space-between;
    }

    .form-range {
        width: 100%;
    }

    .products-header {
        background-color: var(--white);
        padding: 20px;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
    }

    .sort-options {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .pagination .page-link {
        color: var(--primary-color);
        border-color: var(--gray-light);
    }

    .pagination .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
</style>
@endsection
