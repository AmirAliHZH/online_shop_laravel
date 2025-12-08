@extends('layout.master')
@section('title')
    فاکتور
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
                    <li class="breadcrumb-item"><a href="cart.html">سبد خرید</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        تکمیل خرید
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Checkout Page -->
    <section class="checkout-page py-5">
        <div class="container">
            <div class="row">
                <!-- Checkout Steps -->
                <div class="col-12 mb-5">
                    <div class="checkout-steps">
                        <div class="step active">
                            <div class="step-number">۱</div>
                            <div class="step-label">اطلاعات شخصی</div>
                        </div>
                        <div class="step">
                            <div class="step-number">۲</div>
                            <div class="step-label">نحوه ارسال</div>
                        </div>
                        <div class="step">
                            <div class="step-number">۳</div>
                            <div class="step-label">روش پرداخت</div>
                        </div>
                        <div class="step">
                            <div class="step-number">۴</div>
                            <div class="step-label">تکمیل سفارش</div>
                        </div>
                    </div>
                </div>

                <!-- Checkout Form -->
                <div class="col-lg-8">
                    <div class="checkout-form">
                        <!-- Personal Information -->
                        <div class="form-section active" id="personalInfo">
                            <h4 class="section-title">اطلاعات شخصی</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">نام</label>
                                    <input type="text" class="form-control" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">نام خانوادگی</label>
                                    <input type="text" class="form-control" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">شماره موبایل</label>
                                    <input type="tel" class="form-control" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">ایمیل</label>
                                    <input type="email" class="form-control" required />
                                </div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="createAccount" />
                                <label class="form-check-label" for="createAccount">
                                    می‌خواهم یک حساب کاربری ایجاد کنم
                                </label>
                            </div>

                            <button class="btn btn-primary next-step" data-next="shippingInfo">
                                ادامه
                            </button>
                        </div>

                        <!-- Shipping Information -->
                        <div class="form-section" id="shippingInfo">
                            <h4 class="section-title">اطلاعات ارسال</h4>

                            <div class="shipping-methods mb-4">
                                <div class="form-check shipping-method">
                                    <input class="form-check-input" type="radio" name="shippingMethod" id="shipping1"
                                        checked />
                                    <label class="form-check-label" for="shipping1">
                                        <div class="method-info">
                                            <h6>پیک موتوری (تهران)</h6>
                                            <p>تحویل ۲۴ ساعته - هزینه: ۵۰,۰۰۰ تومان</p>
                                        </div>
                                        <div class="method-price">۵۰,۰۰۰ تومان</div>
                                    </label>
                                </div>

                                <div class="form-check shipping-method">
                                    <input class="form-check-input" type="radio" name="shippingMethod" id="shipping2" />
                                    <label class="form-check-label" for="shipping2">
                                        <div class="method-info">
                                            <h6>پست پیشتاز</h6>
                                            <p>تحویل ۳-۵ روز کاری - هزینه: ۳۵,۰۰۰ تومان</p>
                                        </div>
                                        <div class="method-price">۳۵,۰۰۰ تومان</div>
                                    </label>
                                </div>

                                <div class="form-check shipping-method">
                                    <input class="form-check-input" type="radio" name="shippingMethod" id="shipping3" />
                                    <label class="form-check-label" for="shipping3">
                                        <div class="method-info">
                                            <h6>پست سفارشی</h6>
                                            <p>تحویل ۷-۱۰ روز کاری - هزینه: ۲۰,۰۰۰ تومان</p>
                                        </div>
                                        <div class="method-price">۲۰,۰۰۰ تومان</div>
                                    </label>
                                </div>
                            </div>

                            <div class="address-form">
                                <h6>آدرس تحویل</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">استان</label>
                                        <select class="form-select" required>
                                            <option selected>تهران</option>
                                            <option>البرز</option>
                                            <option>اصفهان</option>
                                            <option>مشهد</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">شهر</label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">آدرس کامل</label>
                                        <textarea class="form-control" rows="3" required></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">کد پستی</label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                </div>
                            </div>

                            <div class="step-buttons">
                                <button class="btn btn-outline-secondary prev-step" data-prev="personalInfo">
                                    بازگشت
                                </button>
                                <button class="btn btn-primary next-step" data-next="paymentInfo">
                                    ادامه
                                </button>
                            </div>
                        </div>

                        <!-- Payment Information -->
                        <div class="form-section" id="paymentInfo">
                            <h4 class="section-title">روش پرداخت</h4>

                            <div class="payment-methods">
                                <div class="form-check payment-method">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="payment1"
                                        checked />
                                    <label class="form-check-label" for="payment1">
                                        <div class="method-info">
                                            <i class="fab fa-cc-visa"></i>
                                            <div>
                                                <h6>درگاه پرداخت اینترنتی</h6>
                                                <p>پرداخت آنلاین با کارت‌های عضو شتاب</p>
                                            </div>
                                        </div>
                                        <div class="method-icon">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </label>
                                </div>

                                <div class="form-check payment-method">
                                    <input class="form-check-input" type="radio" name="paymentMethod"
                                        id="payment2" />
                                    <label class="form-check-label" for="payment2">
                                        <div class="method-info">
                                            <i class="fas fa-money-bill-wave"></i>
                                            <div>
                                                <h6>پرداخت در محل</h6>
                                                <p>پرداخت نقدی در زمان تحویل کالا</p>
                                            </div>
                                        </div>
                                        <div class="method-icon">
                                            <i class="fas fa-truck"></i>
                                        </div>
                                    </label>
                                </div>

                                <div class="form-check payment-method">
                                    <input class="form-check-input" type="radio" name="paymentMethod"
                                        id="payment3" />
                                    <label class="form-check-label" for="payment3">
                                        <div class="method-info">
                                            <i class="fas fa-university"></i>
                                            <div>
                                                <h6>کارت به کارت</h6>
                                                <p>پرداخت از طریق کارت به کارت بانکی</p>
                                            </div>
                                        </div>
                                        <div class="method-icon">
                                            <i class="fas fa-exchange-alt"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="payment-note mt-4">
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>توجه:</strong> پس از کلیک بر روی دکمه "پرداخت
                                    نهایی"، به درگاه بانکی هدایت خواهید شد.
                                </div>
                            </div>

                            <div class="step-buttons">
                                <button class="btn btn-outline-secondary prev-step" data-prev="shippingInfo">
                                    بازگشت
                                </button>
                                <button class="btn btn-primary next-step" data-next="confirmation">
                                    پرداخت نهایی
                                </button>
                            </div>
                        </div>

                        <!-- Order Confirmation -->
                        <div class="form-section" id="confirmation">
                            <div class="confirmation-content text-center py-5">
                                <div class="confirmation-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h3 class="mt-4">سفارش شما با موفقیت ثبت شد!</h3>
                                <p class="text-muted mb-4">
                                    شماره پیگیری سفارش: <strong>ORD-۱۲۳۴۵۶</strong>
                                </p>
                                <p>
                                    جزئیات سفارش به ایمیل شما ارسال خواهد شد. می‌توانید وضعیت
                                    سفارش خود را از طریق پنل کاربری پیگیری کنید.
                                </p>

                                <div class="confirmation-actions mt-5">
                                    <a href="index.html" class="btn btn-primary">
                                        <i class="fas fa-home me-2"></i> بازگشت به خانه
                                    </a>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="fas fa-file-invoice me-2"></i> مشاهده فاکتور
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="order-summary">
                        <h4 class="summary-title">خلاصه سفارش</h4>

                        <div class="order-items">
                            <div class="order-item">
                                <div class="item-info">
                                    <h6>گوشی موبایل سامسونگ گلکسی S23</h6>
                                    <span>۱ × ۳۲,۹۹۰,۰۰۰ تومان</span>
                                </div>
                                <div class="item-price">۳۲,۹۹۰,۰۰۰ تومان</div>
                            </div>

                            <div class="order-item">
                                <div class="item-info">
                                    <h6>هدفون بی‌سیم سونی WH-1000XM4</h6>
                                    <span>۱ × ۱۲,۳۰۰,۰۰۰ تومان</span>
                                </div>
                                <div class="item-price">۱۲,۳۰۰,۰۰۰ تومان</div>
                            </div>
                        </div>

                        <div class="order-totals">
                            <div class="total-row">
                                <span>جمع کل</span>
                                <span>۴۵,۲۹۰,۰۰۰ تومان</span>
                            </div>
                            <div class="total-row">
                                <span>تخفیف</span>
                                <span class="text-danger">-۴,۵۰۰,۰۰۰ تومان</span>
                            </div>
                            <div class="total-row">
                                <span>هزینه ارسال</span>
                                <span>۵۰,۰۰۰ تومان</span>
                            </div>
                            <div class="total-row grand-total">
                                <span>مبلغ نهایی</span>
                                <span>۴۰,۸۴۰,۰۰۰ تومان</span>
                            </div>
                        </div>

                        <!-- Order Notes -->
                        <div class="order-notes mt-4">
                            <h6>یادداشت سفارش (اختیاری)</h6>
                            <textarea class="form-control" rows="3" placeholder="یادداشت‌های خود را اینجا بنویسید..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        // مدیریت مراحل خرید
        const steps = document.querySelectorAll(".step");
        const formSections = document.querySelectorAll(".form-section");

        document.querySelectorAll(".next-step").forEach((btn) => {
            btn.addEventListener("click", function() {
                const currentSection = this.closest(".form-section");
                const nextSectionId = this.getAttribute("data-next");

                if (validateSection(currentSection.id)) {
                    currentSection.classList.remove("active");
                    document.getElementById(nextSectionId).classList.add("active");
                    updateStepProgress(nextSectionId);
                }
            });
        });

        document.querySelectorAll(".prev-step").forEach((btn) => {
            btn.addEventListener("click", function() {
                const currentSection = this.closest(".form-section");
                const prevSectionId = this.getAttribute("data-prev");

                currentSection.classList.remove("active");
                document.getElementById(prevSectionId).classList.add("active");
                updateStepProgress(prevSectionId);
            });
        });

        function updateStepProgress(activeSectionId) {
            steps.forEach((step) => step.classList.remove("active"));

            if (activeSectionId === "personalInfo") {
                steps[0].classList.add("active");
            } else if (activeSectionId === "shippingInfo") {
                steps[0].classList.add("active");
                steps[1].classList.add("active");
            } else if (activeSectionId === "paymentInfo") {
                steps[0].classList.add("active");
                steps[1].classList.add("active");
                steps[2].classList.add("active");
            } else if (activeSectionId === "confirmation") {
                steps.forEach((step) => step.classList.add("active"));
            }
        }

        function validateSection(sectionId) {
            const section = document.getElementById(sectionId);
            const requiredInputs = section.querySelectorAll("[required]");
            let isValid = true;

            requiredInputs.forEach((input) => {
                if (!input.value.trim()) {
                    input.classList.add("is-invalid");
                    isValid = false;
                } else {
                    input.classList.remove("is-invalid");
                }
            });

            if (!isValid) {
                showToast("لطفاً تمام فیلدهای الزامی را پر کنید", "error");
            }

            return isValid;
        }

        // مدیریت تغییر روش ارسال
        document
            .querySelectorAll('input[name="shippingMethod"]')
            .forEach((radio) => {
                radio.addEventListener("change", function() {
                    updateOrderTotal();
                });
            });

        function updateOrderTotal() {
            // این تابع در حالت واقعی با سرور ارتباط برقرار می‌کند
            console.log("جمع سفارش به‌روزرسانی شد");
        }
    </script>
@endsection

@section('css')
    <style>
        /* استایل‌های اختصاصی صفحه پرداخت */
        .checkout-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
        }

        .checkout-steps::before {
            content: "";
            position: absolute;
            top: 25px;
            right: 0;
            left: 0;
            height: 3px;
            background-color: var(--gray-light);
            z-index: 1;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background-color: var(--white);
            border: 3px solid var(--gray-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 10px;
            transition: var(--transition);
        }

        .step.active .step-number {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .step-label {
            font-weight: 500;
            color: var(--gray-color);
        }

        .step.active .step-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .checkout-form {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light-color);
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
        }

        .shipping-methods,
        .payment-methods {
            margin-bottom: 25px;
        }

        .shipping-method,
        .payment-method {
            border: 2px solid var(--gray-light);
            border-radius: var(--border-radius-sm);
            padding: 15px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: var(--transition);
        }

        .shipping-method:hover,
        .payment-method:hover {
            border-color: var(--primary-color);
        }

        .form-check-input:checked+.form-check-label {
            border-color: var(--primary-color);
            background-color: rgba(74, 108, 247, 0.05);
        }

        .shipping-method .form-check-label,
        .payment-method .form-check-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin: 0;
            cursor: pointer;
        }

        .method-info {
            flex: 1;
        }

        .method-info h6 {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .method-info p {
            font-size: 0.9rem;
            color: var(--gray-color);
            margin-bottom: 0;
        }

        .method-price {
            font-weight: 600;
            color: var(--primary-color);
        }

        .payment-method .method-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .payment-method .method-info i {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .method-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .address-form {
            background-color: var(--light-color);
            padding: 20px;
            border-radius: var(--border-radius-sm);
            margin-top: 25px;
        }

        .address-form h6 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .step-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid var(--gray-light);
        }

        .payment-note .alert {
            background-color: rgba(59, 130, 246, 0.1);
            border-color: rgba(59, 130, 246, 0.2);
            color: var(--dark-color);
        }

        .confirmation-content {
            padding: 40px 20px;
        }

        .confirmation-icon {
            width: 80px;
            height: 80px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 2.5rem;
            color: white;
        }

        .confirmation-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .order-summary {
            background-color: var(--white);
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            position: sticky;
            top: 100px;
        }

        .order-items {
            margin-bottom: 25px;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray-light);
        }

        .item-info h6 {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .item-info span {
            font-size: 0.85rem;
            color: var(--gray-color);
        }

        .item-price {
            font-weight: 600;
            color: var(--primary-color);
        }

        .order-totals {
            border-top: 2px solid var(--light-color);
            padding-top: 20px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .grand-total {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid var(--light-color);
        }

        .order-notes h6 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .checkout-steps {
                flex-direction: column;
                gap: 20px;
            }

            .checkout-steps::before {
                display: none;
            }

            .step {
                flex-direction: row;
                gap: 15px;
            }

            .step-number {
                width: 40px;
                height: 40px;
                margin-bottom: 0;
            }

            .confirmation-actions {
                flex-direction: column;
            }

            .confirmation-actions .btn {
                width: 100%;
            }
        }
    </style>
@endsection
