@extends('admin.layout.master')
@section('title')
    مدیریت محصولات
@endsection
@section('css')
    <style>
        /* استایل‌های مخصوص پنل مدیریت */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
            background-color: var(--light-color);
        }

        .sidebar {
            width: 250px;
            background-color: var(--white);
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: fixed;
            right: 0;
            top: 0;
            height: 100vh;
            z-index: 100;
            overflow-y: auto;
        }

        .main-content {
            flex: 1;
            margin-right: 250px;
            transition: var(--transition);
        }

        .sidebar.collapsed {
            transform: translateX(100%);
        }

        .sidebar.collapsed+.main-content {
            margin-right: 0;
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid var(--gray-light);
            background-color: var(--primary-color);
            color: white;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .sidebar-menu ul {
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--dark-color);
            transition: var(--transition);
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: var(--light-color);
            color: var(--primary-color);
            border-right: 3px solid var(--primary-color);
        }

        .sidebar-menu i {
            width: 25px;
            margin-left: 10px;
            font-size: 1.1rem;
        }

        .admin-header {
            background-color: var(--white);
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toggle-sidebar {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark-color);
            cursor: pointer;
        }

        /* استایل‌های مخصوص صفحه محصولات */
        .products-container {
            padding: 30px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-color);
            margin: 0;
        }

        .btn-add-product {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: var(--border-radius-sm);
            font-weight: 500;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-add-product:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.3);
        }

        .products-table-container {
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            padding: 20px;
        }

        .table th {
            background-color: var(--light-color);
            font-weight: 600;
            padding: 15px;
            border-bottom: 2px solid var(--gray-light);
        }

        .table td {
            padding: 15px;
            vertical-align: middle;
            border-bottom: 1px solid var(--gray-light);
        }

        .product-image-small {
            width: 50px;
            height: 50px;
            border-radius: var(--border-radius-sm);
            object-fit: cover;
        }

        .badge-status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .badge-active {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--secondary-color);
        }

        .badge-inactive {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        .badge-low-stock {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-action {
            width: 35px;
            height: 35px;
            border-radius: var(--border-radius-sm);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn-edit {
            background-color: rgba(74, 108, 247, 0.1);
            color: var(--primary-color);
        }

        .btn-edit:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-delete {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        .btn-delete:hover {
            background-color: var(--danger-color);
            color: white;
        }

        .btn-view {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--secondary-color);
        }

        .btn-view:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .dataTables_wrapper {
            margin-top: 20px;
        }

        .dataTables_filter input {
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius-sm);
            padding: 8px 15px;
            margin-right: 10px;
        }

        .dataTables_length select {
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius-sm);
            padding: 8px 15px;
            margin: 0 10px;
        }

        .dataTables_paginate .paginate_button {
            padding: 8px 15px;
            margin: 0 2px;
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius-sm);
            color: var(--dark-color);
            transition: var(--transition);
        }

        .dataTables_paginate .paginate_button:hover {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .dataTables_paginate .paginate_button.current {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        /* استایل‌های مخصوص مدال */
        .modal-content {
            border-radius: var(--border-radius);
            border: none;
            box-shadow: var(--shadow-hover);
        }

        .modal-header {
            background-color: var(--light-color);
            border-bottom: 1px solid var(--gray-light);
        }

        .modal-title {
            font-weight: 600;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
        }

        .form-control,
        .form-select {
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius-sm);
            padding: 10px 15px;
            transition: var(--transition);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(74, 108, 247, 0.25);
        }

        .input-group-text {
            background-color: var(--light-color);
            border: 1px solid var(--gray-light);
            color: var(--gray-color);
        }

        .file-upload {
            position: relative;
            overflow: hidden;
        }

        .file-upload input[type="file"] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            border: 2px dashed var(--gray-light);
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .file-upload-label:hover {
            border-color: var(--primary-color);
            background-color: rgba(74, 108, 247, 0.05);
        }

        .file-upload-icon {
            font-size: 2rem;
            color: var(--gray-color);
            margin-bottom: 10px;
        }

        .image-preview {
            width: 100px;
            height: 100px;
            border-radius: var(--border-radius-sm);
            object-fit: cover;
            margin-top: 10px;
            display: none;
        }

        .image-preview.show {
            display: block;
        }

        .tab-content {
            padding: 20px 0;
        }

        .nav-tabs {
            border-bottom: 2px solid var(--light-color);
        }

        .nav-tabs .nav-link {
            border: none;
            padding: 10px 25px;
            color: var(--gray-color);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
            background-color: transparent;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            right: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
        }

        input:checked+.slider {
            background-color: var(--primary-color);
        }

        input:checked+.slider:before {
            transform: translateX(-26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-right: 0;
            }

            .products-container {
                padding: 20px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .btn-add-product {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
@endsection
@section('body')
    <main class="products-container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">مدیریت محصولات</h1>
            <button class="btn btn-add-product" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="fas fa-plus-circle"></i>
                افزودن محصول جدید
            </button>
        </div>

        <!-- Products Table -->
        <div class="products-table-container">
            <div class="table-responsive">
                <table class="table table-hover" id="productsTable">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th>تصویر</th>
                            <th>نام محصول</th>
                            <th>دسته‌بندی</th>
                            <th>قیمت</th>
                            <th>موجودی</th>
                            <th>تخفیف</th>
                            <th>وضعیت</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Product 1 -->
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="../assets/img/products/samsung-s23.jpg" alt="محصول"
                                    class="product-image-small" />
                            </td>
                            <td>
                                <strong>گوشی موبایل سامسونگ گلکسی S23</strong>
                                <br />
                                <small class="text-muted">SKU: PRD-001</small>
                            </td>
                            <td>الکترونیک / موبایل</td>
                            <td>
                                <span class="text-primary">۳۲,۹۹۰,۰۰۰</span>
                                <br />
                                <small class="text-muted text-decoration-line-through">۳۶,۵۰۰,۰۰۰</small>
                            </td>
                            <td>
                                <span class="fw-bold">۱۵</span>
                                <br />
                                <small class="text-muted">عدد</small>
                            </td>
                            <td>
                                <span class="badge bg-danger">۱۵٪</span>
                            </td>
                            <td>
                                <span class="badge badge-status badge-active">فعال</span>
                            </td>
                            <td>۱۴۰۲/۰۵/۱۰</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-edit" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal" data-id="1">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action btn-view" data-bs-toggle="modal"
                                        data-bs-target="#viewProductModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(1)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Product 2 -->
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="../assets/img/products/apple-macbook.jpg" alt="محصول"
                                    class="product-image-small" />
                            </td>
                            <td>
                                <strong>لپ‌تاپ اپل مک‌بوک پرو ۱۴ اینچ</strong>
                                <br />
                                <small class="text-muted">SKU: PRD-002</small>
                            </td>
                            <td>الکترونیک / لپ‌تاپ</td>
                            <td>
                                <span class="text-primary">۷۸,۵۰۰,۰۰۰</span>
                            </td>
                            <td>
                                <span class="fw-bold">۸</span>
                                <br />
                                <small class="text-muted">عدد</small>
                            </td>
                            <td>
                                <span class="badge bg-secondary">بدون تخفیف</span>
                            </td>
                            <td>
                                <span class="badge badge-status badge-active">فعال</span>
                            </td>
                            <td>۱۴۰۲/۰۵/۰۸</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-edit" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal" data-id="2">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action btn-view" data-bs-toggle="modal"
                                        data-bs-target="#viewProductModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(2)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Product 3 -->
                        <tr>
                            <td>3</td>
                            <td>
                                <img src="../assets/img/products/sony-headphones.jpg" alt="محصول"
                                    class="product-image-small" />
                            </td>
                            <td>
                                <strong>هدفون بی‌سیم سونی WH-1000XM4</strong>
                                <br />
                                <small class="text-muted">SKU: PRD-003</small>
                            </td>
                            <td>الکترونیک / هدفون</td>
                            <td>
                                <span class="text-primary">۱۲,۳۰۰,۰۰۰</span>
                                <br />
                                <small class="text-muted text-decoration-line-through">۱۴,۹۰۰,۰۰۰</small>
                            </td>
                            <td>
                                <span class="fw-bold">۳</span>
                                <br />
                                <small class="text-muted">عدد</small>
                            </td>
                            <td>
                                <span class="badge bg-danger">۲۰٪</span>
                            </td>
                            <td>
                                <span class="badge badge-status badge-low-stock">کم‌موجودی</span>
                            </td>
                            <td>۱۴۰۲/۰۵/۰۵</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-edit" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal" data-id="3">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action btn-view" data-bs-toggle="modal"
                                        data-bs-target="#viewProductModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(3)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Product 4 -->
                        <tr>
                            <td>4</td>
                            <td>
                                <img src="../assets/img/products/apple-watch.jpg" alt="محصول"
                                    class="product-image-small" />
                            </td>
                            <td>
                                <strong>ساعت هوشمند اپل واچ سری ۸</strong>
                                <br />
                                <small class="text-muted">SKU: PRD-004</small>
                            </td>
                            <td>الکترونیک / گجت</td>
                            <td>
                                <span class="text-primary">۲۴,۷۰۰,۰۰۰</span>
                            </td>
                            <td>
                                <span class="fw-bold">۲۵</span>
                                <br />
                                <small class="text-muted">عدد</small>
                            </td>
                            <td>
                                <span class="badge bg-warning">۱۰٪</span>
                            </td>
                            <td>
                                <span class="badge badge-status badge-active">فعال</span>
                            </td>
                            <td>۱۴۰۲/۰۵/۰۲</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-edit" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal" data-id="4">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action btn-view" data-bs-toggle="modal"
                                        data-bs-target="#viewProductModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(4)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Product 5 -->
                        <tr>
                            <td>5</td>
                            <td>
                                <img src="../assets/img/products/ipad-pro.jpg" alt="محصول"
                                    class="product-image-small" />
                            </td>
                            <td>
                                <strong>تبلت اپل آیپد پرو ۱۲.۹ اینچ</strong>
                                <br />
                                <small class="text-muted">SKU: PRD-005</small>
                            </td>
                            <td>الکترونیک / تبلت</td>
                            <td>
                                <span class="text-primary">۴۵,۸۰۰,۰۰۰</span>
                                <br />
                                <small class="text-muted text-decoration-line-through">۵۲,۰۰۰,۰۰۰</small>
                            </td>
                            <td>
                                <span class="fw-bold">۰</span>
                                <br />
                                <small class="text-muted">عدد</small>
                            </td>
                            <td>
                                <span class="badge bg-danger">۱۵٪</span>
                            </td>
                            <td>
                                <span class="badge badge-status badge-inactive">ناموجود</span>
                            </td>
                            <td>۱۴۰۲/۰۴/۲۸</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-edit" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal" data-id="5">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action btn-view" data-bs-toggle="modal"
                                        data-bs-target="#viewProductModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(5)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
@section('modal')
    <!-- Modal Add Product -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">افزودن محصول جدید</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addProductForm">
                        <!-- Tab Navigation -->
                        <ul class="nav nav-tabs" id="productTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                    data-bs-target="#basic" type="button">
                                    اطلاعات اصلی
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="price-tab" data-bs-toggle="tab" data-bs-target="#price"
                                    type="button">
                                    قیمت و موجودی
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media"
                                    type="button">
                                    تصاویر
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo"
                                    type="button">
                                    SEO
                                </button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="productTabContent">
                            <!-- Basic Info Tab -->
                            <div class="tab-pane fade show active" id="basic" role="tabpanel">
                                <div class="row mt-4">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">نام محصول <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" required />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">SKU <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="sku" required />
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">دسته‌بندی اصلی
                                            <span class="text-danger">*</span></label>
                                        <select class="form-select" name="main_category" required>
                                            <option value="">انتخاب کنید</option>
                                            <option value="electronics">الکترونیک</option>
                                            <option value="fashion">مد و پوشاک</option>
                                            <option value="home">خانه و آشپزخانه</option>
                                            <option value="beauty">سلامت و زیبایی</option>
                                            <option value="sports">ورزش و سفر</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">دسته‌بندی فرعی</label>
                                        <select class="form-select" name="sub_category">
                                            <option value="">انتخاب کنید</option>
                                            <option value="mobile">موبایل و تبلت</option>
                                            <option value="laptop">لپ‌تاپ و کامپیوتر</option>
                                            <option value="tv">تلویزیون</option>
                                            <option value="headphone">هدفون و هندزفری</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">برند</label>
                                        <select class="form-select" name="brand">
                                            <option value="">انتخاب کنید</option>
                                            <option value="samsung">سامسونگ</option>
                                            <option value="apple">اپل</option>
                                            <option value="sony">سونی</option>
                                            <option value="xiaomi">شیائومی</option>
                                            <option value="lg">ال‌جی</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">توضیحات کوتاه</label>
                                        <textarea class="form-control" rows="3" name="short_description"></textarea>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">توضیحات کامل</label>
                                        <textarea class="form-control" rows="5" name="description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Price & Stock Tab -->
                            <div class="tab-pane fade" id="price" role="tabpanel">
                                <div class="row mt-4">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">قیمت اصلی <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="price" required
                                                min="0" />
                                            <span class="input-group-text">تومان</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">درصد تخفیف</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="discount_percent"
                                                min="0" max="100" value="0" />
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">قیمت پس از تخفیف</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="final_price" readonly />
                                            <span class="input-group-text">تومان</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">موجودی <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="stock" required
                                            min="0" value="0" />
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">حداقل موجودی هشدار</label>
                                        <input type="number" class="form-control" name="min_stock" min="0"
                                            value="5" />
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">واحد</label>
                                        <select class="form-select" name="unit">
                                            <option value="piece">عدد</option>
                                            <option value="kg">کیلوگرم</option>
                                            <option value="meter">متر</option>
                                            <option value="liter">لیتر</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="has_variants"
                                                id="hasVariants" />
                                            <label class="form-check-label" for="hasVariants">
                                                این محصول دارای تنوع (رنگ/سایز) است
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Media Tab -->
                            <div class="tab-pane fade" id="media" role="tabpanel">
                                <div class="row mt-4">
                                    <div class="col-12 mb-3">
                                        <label class="form-label">تصویر اصلی محصول</label>
                                        <div class="file-upload">
                                            <input type="file" class="form-control" id="mainImage" accept="image/*"
                                                onchange="previewImage(this, 'mainImagePreview')" />
                                            <label for="mainImage" class="file-upload-label">
                                                <div>
                                                    <div class="file-upload-icon">
                                                        <i class="fas fa-cloud-upload-alt"></i>
                                                    </div>
                                                    <p class="mb-1">برای آپلود تصویر کلیک کنید</p>
                                                    <small class="text-muted">حداکثر سایز: ۲ مگابایت</small>
                                                </div>
                                            </label>
                                            <img id="mainImagePreview" class="image-preview" alt="پیش‌نمایش تصویر" />
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">گالری تصاویر</label>
                                        <div class="file-upload">
                                            <input type="file" class="form-control" id="galleryImages"
                                                accept="image/*" multiple />
                                            <label for="galleryImages" class="file-upload-label">
                                                <div>
                                                    <div class="file-upload-icon">
                                                        <i class="fas fa-images"></i>
                                                    </div>
                                                    <p class="mb-1">برای آپلود چند تصویر کلیک کنید</p>
                                                    <small class="text-muted">می‌توانید چند فایل را انتخاب کنید</small>
                                                </div>
                                            </label>
                                        </div>
                                        <div id="galleryPreview" class="mt-3 d-flex gap-2 flex-wrap"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- SEO Tab -->
                            <div class="tab-pane fade" id="seo" role="tabpanel">
                                <div class="row mt-4">
                                    <div class="col-12 mb-3">
                                        <label class="form-label">عنوان متا (Meta Title)</label>
                                        <input type="text" class="form-control" name="meta_title" />
                                        <small class="text-muted">عنوان صفحه در نتایج جستجو (۵۰-۶۰ کاراکتر)</small>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">توضیحات متا (Meta Description)</label>
                                        <textarea class="form-control" rows="3" name="meta_description"></textarea>
                                        <small class="text-muted">توضیحات صفحه در نتایج جستجو (۱۵۰-۱۶۰ کاراکتر)</small>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">کلمات کلیدی</label>
                                        <input type="text" class="form-control" name="keywords" />
                                        <small class="text-muted">کلمات کلیدی را با کاما جدا کنید</small>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">URL سفارشی (Slug)</label>
                                        <input type="text" class="form-control" name="slug" />
                                        <small class="text-muted">آدرس اینترنتی محصول (فقط حروف انگلیسی و خط تیره)</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="mt-4 pt-3 border-top">
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" name="status" id="productStatus"
                                    checked />
                                <label class="form-check-label" for="productStatus">
                                    وضعیت فعال
                                </label>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    انصراف
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i> ذخیره محصول
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Product -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ویرایش محصول</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- محتوای ویرایش مشابه افزودن، اما با داده‌های پر شده -->
                    <p>فرم ویرایش محصول در اینجا نمایش داده می‌شود...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal View Product -->
    <div class="modal fade" id="viewProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">مشاهده محصول</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- محتوای مشاهده محصول -->
                    <p>اطلاعات کامل محصول در اینجا نمایش داده می‌شود...</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        // مدیریت Sidebar
        document.addEventListener("DOMContentLoaded", function() {
            const toggleSidebar = document.getElementById("toggleSidebar");
            const sidebar = document.getElementById("sidebar");

            toggleSidebar.addEventListener("click", function() {
                sidebar.classList.toggle("show");
            });

            // بستن Sidebar با کلیک خارج از آن
            document.addEventListener("click", function(event) {
                if (
                    !sidebar.contains(event.target) &&
                    !toggleSidebar.contains(event.target)
                ) {
                    sidebar.classList.remove("show");
                }
            });

            // مقداردهی DataTable
            $("#productsTable").DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fa.json",
                },
                pageLength: 10,
                responsive: true,
                order: [
                    [0, "desc"]
                ],
            });

            // محاسبه قیمت نهایی بر اساس تخفیف
            const priceInput = document.querySelector('input[name="price"]');
            const discountInput = document.querySelector(
                'input[name="discount_percent"]'
            );
            const finalPriceInput = document.querySelector(
                'input[name="final_price"]'
            );

            function calculateFinalPrice() {
                const price = parseFloat(priceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;

                if (discount > 0) {
                    const discountAmount = price * (discount / 100);
                    finalPriceInput.value = Math.round(price - discountAmount);
                } else {
                    finalPriceInput.value = price;
                }
            }

            if (priceInput && discountInput && finalPriceInput) {
                priceInput.addEventListener("input", calculateFinalPrice);
                discountInput.addEventListener("input", calculateFinalPrice);

                // مقداردهی اولیه
                calculateFinalPrice();
            }

            // مدیریت فرم افزودن محصول
            const addProductForm = document.getElementById("addProductForm");
            if (addProductForm) {
                addProductForm.addEventListener("submit", function(e) {
                    e.preventDefault();

                    // در حالت واقعی، اطلاعات به سرور ارسال می‌شود
                    showToast("محصول با موفقیت اضافه شد", "success");

                    // بستن مدال
                    const modal = bootstrap.Modal.getInstance(
                        document.getElementById("addProductModal")
                    );
                    modal.hide();

                    // ریست فرم
                    this.reset();
                    calculateFinalPrice();
                });
            }

            // مدیریت ویرایش محصول
            document.querySelectorAll(".btn-edit").forEach((btn) => {
                btn.addEventListener("click", function() {
                    const productId = this.getAttribute("data-id");
                    console.log("ویرایش محصول با ID:", productId);
                    // در حالت واقعی، اطلاعات محصول از سرور دریافت و در فرم پر می‌شود
                });
            });

            // مدیریت Tab‌های مدال
            const triggerTabList = document.querySelectorAll("#productTab button");
            triggerTabList.forEach((triggerEl) => {
                const tabTrigger = new bootstrap.Tab(triggerEl);

                triggerEl.addEventListener("click", (event) => {
                    event.preventDefault();
                    tabTrigger.show();
                });
            });
        });

        // پیش‌نمایش تصویر
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.add("show");
                };

                reader.readAsDataURL(file);
            } else {
                preview.src = "";
                preview.classList.remove("show");
            }
        }

        // حذف محصول
        function deleteProduct(id) {
            if (confirm("آیا از حذف این محصول مطمئن هستید؟")) {
                // در حالت واقعی، درخواست حذف به سرور ارسال می‌شود
                showToast("محصول با موفقیت حذف شد", "success");
                console.log("حذف محصول با ID:", id);
            }
        }

        // تابع نمایش Toast
        function showToast(message, type = "success") {
            // ایجاد عنصر toast
            const toast = document.createElement("div");
            toast.className = `toast-notification ${type}`;
            toast.innerHTML = `
                <div class="toast-content">
                    <i class="fas ${
                      type === "success"
                        ? "fa-check-circle"
                        : "fa-exclamation-circle"
                    }"></i>
                    <span>${message}</span>
                </div>
            `;

            // اضافه کردن به صفحه
            document.body.appendChild(toast);

            // نمایش با انیمیشن
            setTimeout(() => {
                toast.classList.add("show");
            }, 10);

            // حذف بعد از 3 ثانیه
            setTimeout(() => {
                toast.classList.remove("show");
                setTimeout(() => {
                    if (toast.parentNode) {
                        toast.parentNode.removeChild(toast);
                    }
                }, 300);
            }, 3000);
        }

        // اضافه کردن استایل toast
        const toastStyle = document.createElement("style");
        toastStyle.textContent = `
            .toast-notification {
                position: fixed;
                top: 20px;
                left: 20px;
                background-color: var(--white);
                color: var(--dark-color);
                padding: 15px 25px;
                border-radius: var(--border-radius-sm);
                box-shadow: var(--shadow-hover);
                z-index: 9999;
                transform: translateX(-100px);
                opacity: 0;
                transition: transform 0.3s ease, opacity 0.3s ease;
                max-width: 350px;
            }

            .toast-notification.show {
                transform: translateX(0);
                opacity: 1;
            }

            .toast-content {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .toast-content i {
                font-size: 1.3rem;
            }

            .toast-notification.success .toast-content i {
                color: var(--secondary-color);
            }

            .toast-notification.error .toast-content i {
                color: var(--danger-color);
            }
        `;
        document.head.appendChild(toastStyle);
    </script>
@endsection
