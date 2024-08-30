<div>
    <!-- BREADCRUMB -->
    <nav class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb mb-0 fs-xs text-gray-400">
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Shopping Cart
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h3 class="mb-10 text-center">Shopping Cart</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7">

                    <!-- List group -->
                    <ul class="list-group list-group-lg list-group-flush-x mb-6">
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">

                                    <!-- Image -->
                                    <a href="product.html">
                                        <img src="{{ asset('client/assets/img/products/product-6.jpg') }}"
                                            alt="..." class="img-fluid">
                                    </a>

                                </div>
                                <div class="col">

                                    <!-- Title -->
                                    <div class="d-flex mb-2 fw-bold">
                                        <a class="text-body" href="product.html">Cotton floral print</a> <span
                                            class="ms-auto">$40.00</span>
                                    </div>

                                    <!-- Text -->
                                    <p class="mb-7 fs-sm text-muted">
                                        Size: M <br>
                                        Color: Red
                                    </p>

                                    <!--Footer -->
                                    <div class="d-flex align-items-center">

                                        <!-- Select -->
                                        <select class="form-select form-select-xxs w-auto">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                        </select>

                                        <!-- Remove -->
                                        <a class="fs-xs text-gray-400 ms-auto" href="#!">
                                            <i class="fa fa-x"></i> Remove
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">

                                    <!-- Image -->
                                    <a href="product.html">
                                        <img src="{{ asset('client/assets/img/products/product-10.jpg') }}"
                                            alt="..." class="img-fluid">
                                    </a>

                                </div>
                                <div class="col">

                                    <!-- Title -->
                                    <div class="d-flex mb-2 fw-bold">
                                        <a class="text-body" href="product.html">Suede cross body Bag</a> <span
                                            class="ms-auto">$49.00</span>
                                    </div>

                                    <!-- Text -->
                                    <p class="mb-7 fs-sm text-muted">
                                        Color: Brown
                                    </p>

                                    <!--Footer -->
                                    <div class="d-flex align-items-center">

                                        <!-- Select -->
                                        <select class="form-select form-select-xxs w-auto">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                        </select>

                                        <!-- Remove -->
                                        <a class="fs-xs text-gray-400 ms-auto" href="#!">
                                            <i class="fa fa-x"></i> Remove
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- Footer -->
                    <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                        <div class="col-12 col-md-7">

                            <!-- Coupon -->
                            <form class="mb-7 mb-md-0">
                                <label class="form-label fs-sm fw-bold" for="cartCouponCode">
                                    Coupon code:
                                </label>
                                <div class="row row gx-5">
                                    <div class="col">

                                        <!-- Input -->
                                        <input class="form-control form-control-sm" id="cartCouponCode" type="text"
                                            placeholder="Enter coupon code*">

                                    </div>
                                    <div class="col-auto">

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-dark" type="submit">
                                            Apply
                                        </button>

                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-12 col-md-auto">

                            <!-- Button -->
                            <button class="btn btn-sm btn-outline-dark">Update Cart</button>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-5 col-lg-4 offset-lg-1">

                    <!-- Total -->
                    <div class="card mb-7 bg-light">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex">
                                    <span>Subtotal</span> <span class="ms-auto fs-sm">$89.00</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Tax</span> <span class="ms-auto fs-sm">$00.00</span>
                                </li>
                                <li class="list-group-item d-flex fs-lg fw-bold">
                                    <span>Total</span> <span class="ms-auto fs-sm">$89.00</span>
                                </li>
                                <li class="list-group-item fs-sm text-center text-gray-500">
                                    Shipping cost calculated at Checkout *
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Button -->
                    <a class="btn w-100 btn-dark mb-2" href="checkout.html">Proceed to Checkout</a>

                    <!-- Link -->
                    <a class="btn btn-link btn-sm px-0 text-body" href="shop.html">
                        <i class="fa fa-arrow-left me-2"></i> Continue Shopping
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="bg-light py-9">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-lg-0">

                        <!-- Icon -->
                        <i class="fa fa-truck fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-1">
                                Free shipping
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                From all orders over $100
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-lg-0">

                        <!-- Icon -->
                        <i class="fa fa-repeat fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                Free returns
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                Return money within 30 days
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-md-0">

                        <!-- Icon -->
                        <i class="fa fa-lock fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                Secure shopping
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                You're in safe hands
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex">

                        <!-- Icon -->
                        <i class="fa fa-tag fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                Over 10,000 Styles
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                We have everything you need
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
