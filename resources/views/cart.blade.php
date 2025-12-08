@extends('layout.master')
@section('title')
    سبد خرید
@endsection
@section('body')
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
                    <li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Cart Page -->
    <section class="cart-page py-5">
        <div class="container">
            <div class="row">
                <!-- Cart Items -->
                <div class="col-lg-8">
                    <div class="cart-header mb-4">
                        <h2>سبد خرید شما</h2>
                        <p class="text-muted">۲ مورد در سبد خرید شما وجود دارد</p>
                    </div>

                    <!-- Cart Table -->
                    <div class="cart-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="40%">محصول</th>
                                        <th class="text-center">قیمت</th>
                                        <th class="text-center">تعداد</th>
                                        <th class="text-center">جمع</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item 1 -->
                                    <tr class="cart-item">
                                        <td>
                                            <div class="product-info">
                                                <div class="product-image">
                                                    <img src="https://via.placeholder.com/80x80/4a6cf7/ffffff?text=موبایل"
                                                        alt="محصول" />
                                                </div>
                                                <div class="product-details">
                                                    <h6 class="product-title">
                                                        گوشی موبایل سامسونگ گلکسی S23
                                                    </h6>
                                                    <div class="product-variant">
                                                        <span class="variant">رنگ: مشکی</span>
                                                        <span class="variant">حافظه: ۱۲۸GB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="price">۳۲,۹۹۰,۰۰۰</span>
                                            <span class="currency">تومان</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="quantity-selector">
                                                <button class="quantity-btn decrease">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <input type="number" class="quantity-input" value="1"
                                                    min="1" />
                                                <button class="quantity-btn increase">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="total-price">۳۲,۹۹۰,۰۰۰</span>
                                            <span class="currency">تومان</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn-remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Item 2 -->
                                    <tr class="cart-item">
                                        <td>
                                            <div class="product-info">
                                                <div class="product-image">
                                                    <img src="https://via.placeholder.com/80x80/10b981/ffffff?text=هدفون"
                                                        alt="محصول" />
                                                </div>
                                                <div class="product-details">
                                                    <h6 class="product-title">
                                                        هدفون بی‌سیم سونی WH-1000XM4
                                                    </h6>
                                                    <div class="product-variant">
                                                        <span class="variant">رنگ: مشکی</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="price">۱۲,۳۰۰,۰۰۰</span>
                                            <span class="currency">تومان</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="quantity-selector">
                                                <button class="quantity-btn decrease">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <input type="number" class="quantity-input" value="1"
                                                    min="1" />
                                                <button class="quantity-btn increase">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="total-price">۱۲,۳۰۰,۰۰۰</span>
                                            <span class="currency">تومان</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn-remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Cart Actions -->
                    <div class="cart-actions mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="products.html" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i> ادامه خرید
                                </a>
                            </div>
                            <div class="col-md-6 text-start">
                                <button class="btn btn-danger" id="clearCart">
                                    <i class="fas fa-trash me-2"></i> پاک کردن سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h4 class="summary-title">خلاصه سفارش</h4>

                        <div class="summary-details">
                            <div class="summary-row">
                                <span>جمع کل کالاها</span>
                                <span>۴۵,۲۹۰,۰۰۰ تومان</span>
                            </div>
                            <div class="summary-row">
                                <span>تخفیف کالاها</span>
                                <span class="text-danger">-۴,۵۰۰,۰۰۰ تومان</span>
                            </div>
                            <div class="summary-row">
                                <span>هزینه ارسال</span>
                                <span>رایگان</span>
                            </div>
                            <div class="summary-row total">
                                <span>مبلغ قابل پرداخت</span>
                                <span class="total-amount">۴۰,۷۹۰,۰۰۰ تومان</span>
                            </div>
                        </div>

                        <!-- Coupon Code -->
                        <div class="coupon-code mt-4">
                            <h6>کد تخفیف</h6>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="کد تخفیف خود را وارد کنید" />
                                <button class="btn btn-primary">اعمال کد</button>
                            </div>
                        </div>

                        <!-- Proceed to Checkout -->
                        <div class="proceed-checkout mt-4">
                            <a href="checkout.html" class="btn btn-primary btn-lg w-100">
                                ادامه فرآیند خرید
                            </a>
                        </div>

                        <!-- Security Info -->
                        <div class="security-info mt-4">
                            <div class="security-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>پرداخت امن با SSL</span>
                            </div>
                            <div class="security-item">
                                <i class="fas fa-lock"></i>
                                <span>اطلاعات شما محفوظ است</span>
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
        // مدیریت سبد خرید
        document.querySelectorAll(".quantity-btn").forEach((btn) => {
            btn.addEventListener("click", function() {
                const input = this.parentElement.querySelector(".quantity-input");
                let value = parseInt(input.value);

                if (this.classList.contains("increase")) {
                    input.value = value + 1;
                } else if (this.classList.contains("decrease") && value > 1) {
                    input.value = value - 1;
                }

                updateCartItemTotal(this.closest(".cart-item"));
            });
        });

        document.querySelectorAll(".quantity-input").forEach((input) => {
            input.addEventListener("change", function() {
                let value = parseInt(this.value);
                if (isNaN(value) || value < 1) {
                    this.value = 1;
                }
                updateCartItemTotal(this.closest(".cart-item"));
            });
        });

        document.querySelectorAll(".btn-remove").forEach((btn) => {
            btn.addEventListener("click", function() {
                const cartItem = this.closest(".cart-item");
                cartItem.style.opacity = "0.5";

                setTimeout(() => {
                    cartItem.remove();
                    updateCartSummary();
                    showToast("محصول از سبد خرید حذف شد", "error");
                }, 300);
            });
        });

        document
            .getElementById("clearCart")
            .addEventListener("click", function() {
                const cartItems = document.querySelectorAll(".cart-item");
                if (cartItems.length > 0) {
                    if (confirm("آیا از پاک کردن سبد خرید مطمئن هستید؟")) {
                        cartItems.forEach((item) => {
                            item.remove();
                        });
                        updateCartSummary();
                        showToast("سبد خرید پاک شد", "error");
                    }
                } else {
                    showToast("سبد خرید شما خالی است", "error");
                }
            });

        function updateCartItemTotal(item) {
            const price = parseFloat(
                item.querySelector(".price").textContent.replace(/,/g, "")
            );
            const quantity = parseInt(item.querySelector(".quantity-input").value);
            const total = price * quantity;

            const totalElement = item.querySelector(".total-price");
            totalElement.textContent = total.toLocaleString("fa-IR");

            updateCartSummary();
        }

        function updateCartSummary() {
            // این تابع در حالت واقعی با سرور ارتباط برقرار می‌کند
            console.log("سبد خرید به‌روزرسانی شد");
        }
    </script>
@endsection

@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه سبد خرید */
        .cart-header {
            background-color: var(--white);
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .cart-table {
            background-color: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .cart-table table {
            margin-bottom: 0;
        }

        .cart-table thead th {
            background-color: var(--light-color);
            border-bottom: 2px solid var(--gray-light);
            font-weight: 600;
            padding: 15px;
        }

        .cart-item {
            transition: var(--transition);
        }

        .cart-item:hover {
            background-color: var(--light-color);
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-image {
            width: 80px;
            height: 80px;
            border-radius: var(--border-radius-sm);
            overflow: hidden;
            flex-shrink: 0;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-details {
            flex: 1;
        }

        .product-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .product-variant {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .product-variant .variant {
            background-color: var(--light-color);
            padding: 3px 10px;
            border-radius: var(--border-radius-sm);
            font-size: 0.85rem;
            color: var(--gray-color);
        }

        .price,
        .total-price {
            font-weight: 600;
            color: var(--primary-color);
        }

        .currency {
            font-size: 0.9rem;
            color: var(--gray-color);
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 120px;
            margin: 0 auto;
        }

        .quantity-btn {
            width: 35px;
            height: 35px;
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
            width: 50px;
            height: 35px;
            text-align: center;
            border: 1px solid var(--gray-light);
            border-left: none;
            border-right: none;
            font-family: var(--font-primary);
        }

        .btn-remove {
            width: 35px;
            height: 35px;
            background-color: var(--light-color);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--danger-color);
            transition: var(--transition);
        }

        .btn-remove:hover {
            background-color: var(--danger-color);
            color: white;
        }

        .cart-actions {
            background-color: var(--white);
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .cart-summary {
            background-color: var(--white);
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light-color);
        }

        .summary-details {
            margin-bottom: 20px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--gray-light);
        }

        .summary-row.total {
            border-bottom: none;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid var(--light-color);
        }

        .total-amount {
            font-size: 1.3rem;
            color: var(--primary-color);
        }

        .coupon-code {
            padding-top: 20px;
            border-top: 1px solid var(--gray-light);
        }

        .coupon-code h6 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .proceed-checkout {
            padding-top: 20px;
            border-top: 1px solid var(--gray-light);
        }

        .security-info {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--gray-light);
        }

        .security-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        .security-item i {
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .product-info {
                flex-direction: column;
                text-align: center;
            }

            .product-variant {
                justify-content: center;
            }

            .cart-table table thead {
                display: none;
            }

            .cart-table table tbody tr {
                display: block;
                margin-bottom: 20px;
                border: 1px solid var(--gray-light);
                border-radius: var(--border-radius);
                padding: 15px;
            }

            .cart-table table tbody td {
                display: block;
                text-align: center;
                padding: 10px 0;
                border: none;
            }

            .cart-table table tbody td::before {
                content: attr(data-label);
                font-weight: 600;
                display: block;
                margin-bottom: 5px;
                color: var(--gray-color);
            }
        }
    </style>
@endsection
