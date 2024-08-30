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
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="shop.html">Women's Shoes</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Leather Sneakers
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </nav>

    <!-- PRODUCT -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Card -->
                            <div class="card">

                                <!-- Badge -->
                                <div class="badge bg-primary card-badge text-uppercase">
                                    Sale
                                </div>

                                <!-- Slider -->
                                <div class="mb-4" data-flickity='{"draggable": false, "fade": true}'
                                    id="productSlider">

                                    <!-- Item -->
                                    <a href="#"
                                        data-bigpicture='{ "imgSrc": "{{ asset('client/assets/img/products/product-7.jpg') }}"}'>
                                        <img src="{{ asset('client/assets/img/products/product-7.jpg') }}"
                                            alt="..." class="card-img-top">
                                    </a>

                                    <!-- Item -->
                                    <a href="#"
                                        data-bigpicture='{ "imgSrc": "{{ asset('client/assets/img/products/product-122.jpg') }}"}'>
                                        <img src="{{ asset('client/assets/img/products/product-122.jpg') }}"
                                            alt="..." class="card-img-top">
                                    </a>

                                    <!-- Item -->
                                    <a href="#"
                                        data-bigpicture='{ "imgSrc": "{{ asset('client/assets/img/products/product-146.jpg') }}"}'>
                                        <img src="{{ asset('client/assets/img/products/product-146.jpg') }}"
                                            alt="..." class="card-img-top">
                                    </a>

                                </div>

                            </div>

                            <!-- Slider -->
                            <div class="flickity-nav mx-n2 mb-10 mb-md-0"
                                data-flickity='{"asNavFor": "#productSlider", "contain": true, "wrapAround": false}'>

                                <!-- Item -->
                                <div class="col-12 px-2" style="max-width: 113px;">

                                    <!-- Image -->
                                    <div class="ratio ratio-1x1 bg-cover"
                                        style="background-image: url({{ asset('client/assets/img/products/product-7.jpg') }});">
                                    </div>

                                </div>

                                <!-- Item -->
                                <div class="col-12 px-2" style="max-width: 113px;">

                                    <!-- Image -->
                                    <div class="ratio ratio-1x1 bg-cover"
                                        style="background-image: url({{ asset('client/assets/img/products/product-122.jpg') }});">
                                    </div>

                                </div>

                                <!-- Item -->
                                <div class="col-12 px-2" style="max-width: 113px;">

                                    <!-- Image -->
                                    <div class="ratio ratio-1x1 bg-cover"
                                        style="background-image: url({{ asset('client/assets/img/products/product-146.jpg') }});">
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-md-6 ps-lg-10">

                            <!-- Header -->
                            <div class="row mb-1">
                                <div class="col">

                                    <!-- Preheading -->
                                    <a class="text-muted" href="shop.html">Sneakers</a>

                                </div>
                                <div class="col-auto">

                                    <!-- Rating -->
                                    <div class="rating fs-xs text-dark" data-value="4">
                                        <div class="rating-item">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <a class="fs-sm text-reset ms-2" href="#reviews">
                                        Reviews (6)
                                    </a>

                                </div>
                            </div>

                            <!-- Heading -->
                            <h3 class="mb-2">Leather Sneakers</h3>

                            <!-- Price -->
                            <div class="mb-7">
                                <span class="fs-lg fw-bold text-gray-350 text-decoration-line-through">$115.00</span>
                                <span class="ms-1 fs-5 fw-bolder text-primary">$85.00</span>
                                <span class="fs-sm ms-1">(In Stock)</span>
                            </div>

                            <!-- Form -->
                            <form>
                                <div class="form-group">

                                    <!-- Label -->
                                    <p class="mb-5">
                                        Color: <strong id="colorCaption">White</strong>
                                    </p>

                                    <!-- Radio -->
                                    <div class="mb-8 ms-n1">
                                        <div class="form-check form-check-inline form-check-img">
                                            <input type="radio" class="form-check-input" id="imgRadioOne"
                                                name="imgRadio" data-toggle="form-caption" data-target="#colorCaption"
                                                value="White"
                                                style="background-image: url({{ asset('client/assets/img/products/product-7.jpg') }});"
                                                checked>
                                        </div>
                                        <div class="form-check form-check-inline form-check-img">
                                            <input type="radio" class="form-check-input" id="imgRadioTwo"
                                                name="imgRadio" data-toggle="form-caption" data-target="#colorCaption"
                                                value="Black"
                                                style="background-image: url({{ asset('client/assets/img/products/product-49.jpg') }});">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <!-- Label -->
                                    <p class="mb-5">
                                        Size: <strong><span id="sizeCaption">7.5</span> US</strong>
                                    </p>

                                    <!-- Radio -->
                                    <div class="mb-2">
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioOne" value="6" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioOne">6</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioTwo" value="6.5" data-toggle="form-caption"
                                                data-target="#sizeCaption" disabled>
                                            <label class="form-check-label" for="sizeRadioTwo">6.5</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioThree" value="7" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioThree">7</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioFour" value="7.5" data-toggle="form-caption"
                                                data-target="#sizeCaption" checked>
                                            <label class="form-check-label" for="sizeRadioFour">7.5</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioFive" value="8" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioFive">8</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioSix" value="8.5" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioSix">8.5</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioSeven" value="9" data-toggle="form-caption"
                                                data-target="#sizeCaption" disabled>
                                            <label class="form-check-label" for="sizeRadioSeven">9</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioEight" value="9.5" data-toggle="form-caption"
                                                data-target="#sizeCaption" disabled>
                                            <label class="form-check-label" for="sizeRadioEight">9.5</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioNine" value="10" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioNine">10</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioTen" value="10.5" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioTen">10.5</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioEleven" value="11" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioEleven">11</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioTwelve" value="12" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioTwelve">12</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioThirteen" value="13" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioThirteen">13</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input type="radio" class="form-check-input" name="sizeRadio"
                                                id="sizeRadioFourteen" value="14" data-toggle="form-caption"
                                                data-target="#sizeCaption">
                                            <label class="form-check-label" for="sizeRadioFourteen">14</label>
                                        </div>
                                    </div>

                                    <!-- Size chart -->
                                    <p class="mb-8">
                                        <img src="assets/img/icons/icon-ruler.svg" alt="..." class="img-fluid">
                                        <a class="text-reset text-decoration-underline ms-3" data-bs-toggle="modal"
                                            href="#modalSizeChart">Size chart</a>
                                    </p>

                                    <div class="row gx-5 mb-7">
                                        <div class="col-12 col-lg-auto">

                                            <!-- Quantity -->
                                            <select class="form-select mb-2">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>

                                        </div>
                                        <div class="col-12 col-lg">

                                            <!-- Submit -->
                                            <button type="submit" class="btn w-100 btn-dark mb-2">
                                                Add to Cart <i class="fa fa-shopping-cart ms-2"></i>
                                            </button>

                                        </div>
                                        <div class="col-12 col-lg-auto">

                                            <!-- Wishlist -->
                                            <button class="btn btn-outline-dark w-100 mb-2" data-toggle="button">
                                                Wishlist <i class="fa fa-heart ms-2"></i>
                                            </button>

                                        </div>
                                    </div>

                                    <!-- Text -->
                                    <p>
                                        <span class="text-gray-500">Is your size/color sold out?</span>
                                        <a class="text-reset text-decoration-underline" data-bs-toggle="modal"
                                            href="#modalWaitList">Join the Wait List!</a>
                                    </p>

                                    <!-- Share -->
                                    <p class="mb-0">
                                        <span class="me-4">Share:</span>
                                        <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350"
                                            href="#!">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350"
                                            href="#!">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350"
                                            href="#!">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </p>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DESCRIPTION -->
    <section class="pt-11">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Nav -->
                    <div
                        class="nav nav-tabs nav-overflow justify-content-start justify-content-md-center border-bottom">
                        <a class="nav-link active" data-bs-toggle="tab" href="#descriptionTab">
                            Description
                        </a>
                        <a class="nav-link" data-bs-toggle="tab" href="#sizeTab">
                            Size & Fit
                        </a>
                        <a class="nav-link" data-bs-toggle="tab" href="#shippingTab">
                            Shipping & Return
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="descriptionTab">
                            <div class="row justify-content-center py-9">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="row">
                                        <div class="col-12">

                                            <!-- Text -->
                                            <p class="text-gray-500">
                                                Won't herb first male seas, beast. Let upon, female upon third fifth
                                                every.
                                                Man subdue rule after years herb after
                                                form. And image may, morning. Behold in tree day sea that together
                                                cattle
                                                whose. Fifth gathering brought
                                                bearing. Abundantly creeping whose. Beginning form have void two. A
                                                whose.
                                            </p>

                                        </div>
                                        <div class="col-12 col-md-6">

                                            <!-- List -->
                                            <ul class="list list-unstyled mb-md-0 text-gray-500">
                                                <li>
                                                    <strong class="text-body">SKU</strong>: #61590437
                                                </li>
                                                <li>
                                                    <strong class="text-body">Occasion</strong>: Lifestyle, Sport
                                                </li>
                                                <li>
                                                    <strong class="text-body">Country</strong>: Italy
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-12 col-md-6">

                                            <!-- List -->
                                            <ul class="list list-unstyled mb-0">
                                                <li>
                                                    <strong>Outer</strong>: Leather 100%, Polyamide 100%
                                                </li>
                                                <li>
                                                    <strong>Lining</strong>: Polyester 100%
                                                </li>
                                                <li>
                                                    <strong>CounSoletry</strong>: Rubber 100%
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sizeTab">
                            <div class="row justify-content-center py-9">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="row">
                                        <div class="col-12 col-md-6">

                                            <!-- Text -->
                                            <p class="mb-4">
                                                <strong>Fitting information:</strong>
                                            </p>

                                            <!-- List -->
                                            <ul class="mb-md-0 text-gray-500">
                                                <li>
                                                    Upon seas hath every years have whose
                                                    subdue creeping they're it were.
                                                </li>
                                                <li>
                                                    Make great day bearing.
                                                </li>
                                                <li>
                                                    For the moveth is days don't said days.
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-12 col-md-6">

                                            <!-- Text -->
                                            <p class="mb-4">
                                                <strong>Model measurements:</strong>
                                            </p>

                                            <!-- List -->
                                            <ul class="list-unstyled text-gray-500">
                                                <li>Height: 1.80 m</li>
                                                <li>Bust/Chest: 89 cm</li>
                                                <li>Hips: 91 cm</li>
                                                <li>Waist: 65 cm</li>
                                                <li>Model size: M</li>
                                            </ul>

                                            <!-- Size -->
                                            <p class="mb-0">
                                                <img src="assets/img/icons/icon-ruler.svg" alt="..."
                                                    class="img-fluid">
                                                <a class="text-reset text-decoration-underline ms-3"
                                                    data-bs-toggle="modal" href="#modalSizeChart">Size chart</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="shippingTab">
                            <div class="row justify-content-center py-9">
                                <div class="col-12 col-lg-10 col-xl-8">

                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Shipping Options</th>
                                                    <th>Delivery Time</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Standard Shipping</td>
                                                    <td>Delivery in 5 - 7 working days</td>
                                                    <td>$8.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Express Shipping</td>
                                                    <td>Delivery in 3 - 5 working days</td>
                                                    <td>$12.00</td>
                                                </tr>
                                                <tr>
                                                    <td>1 - 2 day Shipping</td>
                                                    <td>Delivery in 1 - 2 working days</td>
                                                    <td>$12.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Free Shipping</td>
                                                    <td>
                                                        Living won't the He one every subdue meat replenish
                                                        face was you morning firmament darkness.
                                                    </td>
                                                    <td>$0.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Caption -->
                                    <p class="mb-0 text-gray-500">
                                        May, life blessed night so creature likeness their, for. <a
                                            class="text-body text-decoration-underline" href="#!">Find out
                                            more</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section class="pt-11">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h4 class="mb-10 text-center">You might also like</h4>

                    <!-- Items -->
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Badge -->
                                <div class="badge bg-white text-body card-badge card-badge-start text-uppercase">
                                    New
                                </div>

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a class="card-img-hover" href="product.html">
                                        <img class="card-img-top card-img-back"
                                            src="{{ asset('client/assets/img/products/product-120.jpg') }}"
                                            alt="...">
                                        <img class="card-img-top card-img-front"
                                            src="{{ asset('client/assets/img/products/product-5.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-bs-toggle="modal" data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                                <!-- Body -->
                                <div class="card-body px-0">

                                    <!-- Category -->
                                    <div class="fs-xs">
                                        <a class="text-muted" href="shop.html">Shoes</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="fw-bold">
                                        <a class="text-body" href="product.html">
                                            Leather mid-heel Sandals
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold text-muted">
                                        $129.00
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a class="card-img-hover" href="product.html">
                                        <img class="card-img-top card-img-back"
                                            src="{{ asset('client/assets/img/products/product-121.jpg') }}"
                                            alt="...">
                                        <img class="card-img-top card-img-front"
                                            src="{{ asset('client/assets/img/products/product-6.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-bs-toggle="modal" data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                                <!-- Body -->
                                <div class="card-body px-0">

                                    <!-- Category -->
                                    <div class="fs-xs">
                                        <a class="text-muted" href="shop.html">Dresses</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="fw-bold">
                                        <a class="text-body" href="product.html">
                                            Cotton floral print Dress
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold text-muted">
                                        $40.00
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Badge -->
                                <div class="badge bg-dark card-badge card-badge-start text-uppercase">
                                    Sale
                                </div>

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a class="card-img-hover" href="product.html">
                                        <img class="card-img-top card-img-back"
                                            src="{{ asset('client/assets/img/products/product-122.jpg') }}"
                                            alt="...">
                                        <img class="card-img-top card-img-front"
                                            src="{{ asset('client/assets/img/products/product-7.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-bs-toggle="modal" data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                                <!-- Body -->
                                <div class="card-body px-0">

                                    <!-- Category -->
                                    <div class="fs-xs">
                                        <a class="text-muted" href="shop.html">Shoes</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="fw-bold">
                                        <a class="text-body" href="product.html">
                                            Leather Sneakers
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold">
                                        <span class="fs-xs text-gray-350 text-decoration-line-through">$85.00</span>
                                        <span class="text-primary">$85.00</span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-md-none d-lg-block">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a href="#!">
                                        <img class="card-img-top card-img-front"
                                            src="{{ asset('client/assets/img/products/product-8.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-bs-toggle="modal" data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                data-toggle="button">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                                <!-- Body -->
                                <div class="card-body px-0">

                                    <!-- Category -->
                                    <div class="fs-xs">
                                        <a class="text-muted" href="shop.html">Tops</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="fw-bold">
                                        <a class="text-body" href="product.html">
                                            Cropped cotton Top
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold text-muted">
                                        $29.00
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="pt-9 pb-11" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h4 class="mb-10 text-center">Customer Reviews</h4>

                    <!-- Header -->
                    <div class="row align-items-center">
                        <div class="col-12 col-md-auto">

                            <!-- Dropdown -->
                            <div class="dropdown mb-4 mb-md-0">

                                <!-- Toggle -->
                                <a class="dropdown-toggle text-reset" data-bs-toggle="dropdown" href="#">
                                    <strong>Sort by: Newest</strong>
                                </a>

                                <!-- Menu -->
                                <div class="dropdown-menu mt-3">
                                    <a class="dropdown-item" href="#!">Newest</a>
                                    <a class="dropdown-item" href="#!">Oldest</a>
                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-md text-md-center">

                            <!-- Rating -->
                            <div class="rating text-dark h6 mb-4 mb-md-0" data-value="4">
                                <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>

                            <!-- Count -->
                            <strong class="fs-sm ms-2">Reviews (3)</strong>

                        </div>
                        <div class="col-12 col-md-auto">

                            <!-- Button -->
                            <a class="btn btn-sm btn-dark" data-bs-toggle="collapse" href="#reviewForm">
                                Write Review
                            </a>

                        </div>
                    </div>

                    <!-- New Review -->
                    <div class="collapse" id="reviewForm">

                        <!-- Divider -->
                        <hr class="my-8">

                        <!-- Form -->
                        <form>
                            <div class="row">
                                <div class="col-12 mb-6 text-center">

                                    <!-- Text -->
                                    <p class="mb-1 fs-xs">
                                        Score:
                                    </p>

                                    <!-- Rating form -->
                                    <div class="rating-form">

                                        <!-- Input -->
                                        <input class="rating-input" type="range" min="1" max="5"
                                            value="5">

                                        <!-- Rating -->
                                        <div class="rating h5 text-dark" data-value="5">
                                            <div class="rating-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rating-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rating-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rating-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rating-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-12 col-md-6">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="reviewName">Your Name:</label>
                                        <input class="form-control form-control-sm" id="reviewName" type="text"
                                            placeholder="Your Name *" required>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="reviewEmail">Your Email:</label>
                                        <input class="form-control form-control-sm" id="reviewEmail" type="email"
                                            placeholder="Your Email *" required>
                                    </div>

                                </div>
                                <div class="col-12">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="reviewTitle">Review Title:</label>
                                        <input class="form-control form-control-sm" id="reviewTitle" type="text"
                                            placeholder="Review Title *" required>
                                    </div>

                                </div>
                                <div class="col-12">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="reviewText">Review:</label>
                                        <textarea class="form-control form-control-sm" id="reviewText" rows="5" placeholder="Review *" required></textarea>
                                    </div>

                                </div>
                                <div class="col-12 text-center">

                                    <!-- Button -->
                                    <button class="btn btn-outline-dark" type="submit">
                                        Post Review
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>

                    <!-- Reviews -->
                    <div class="mt-8">

                        <!-- Review -->
                        <div class="review">
                            <div class="review-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xxl mb-6 mb-md-0">
                                            <span class="avatar-title rounded-circle">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md">

                                        <!-- Header -->
                                        <div class="row mb-6">
                                            <div class="col-12">

                                                <!-- Rating -->
                                                <div class="rating fs-sm text-dark" data-value="5">
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12">

                                                <!-- Time -->
                                                <span class="fs-xs text-muted">
                                                    Logan Edwards, <time datetime="2019-07-25">25 Jul 2019</time>
                                                </span>

                                            </div>
                                        </div>

                                        <!-- Title -->
                                        <p class="mb-2 fs-lg fw-bold">
                                            So cute!
                                        </p>

                                        <!-- Text -->
                                        <p class="text-gray-500">
                                            Justo ut diam erat hendrerit. Morbi porttitor, per eu. Sodales curabitur
                                            diam
                                            sociis. Taciti lobortis nascetur. Ante laoreet odio hendrerit.
                                            Dictumst curabitur nascetur lectus potenti dis sollicitudin habitant quis
                                            vestibulum.
                                        </p>

                                        <!-- Footer -->
                                        <div class="row align-items-center">
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 fs-sm">Was this review helpful?</p>

                                            </div>
                                            <div class="col-auto me-auto">

                                                <!-- Rate -->
                                                <div class="rate">
                                                    <a class="rate-item" data-toggle="vote" data-count="3"
                                                        href="#" role="button">
                                                        <i class="fa fa-thumbs-up"></i>
                                                    </a>
                                                    <a class="rate-item" data-toggle="vote" data-count="0"
                                                        href="#" role="button">
                                                        <i class="fa fa-thumbs-down"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 fs-sm">Comments (0)</p>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Button -->
                                                <a class="btn btn-xs btn-outline-border" href="#!">
                                                    Comment
                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review -->
                        <div class="review">

                            <!-- Body -->
                            <div class="review-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xxl mb-6 mb-md-0">
                                            <span class="avatar-title rounded-circle">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md">

                                        <!-- Header -->
                                        <div class="row mb-6">
                                            <div class="col-12">

                                                <!-- Rating -->
                                                <div class="rating fs-sm text-dark" data-value="3">
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="rating-item">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12">

                                                <!-- Time -->
                                                <span class="fs-xs text-muted">
                                                    Sophie Casey, <time datetime="2019-07-07">07 Jul 2019</time>
                                                </span>

                                            </div>
                                        </div>

                                        <!-- Title -->
                                        <p class="mb-2 fs-lg fw-bold">
                                            Cute, but too small
                                        </p>

                                        <!-- Text -->
                                        <p class="text-gray-500">
                                            Shall good midst can't. Have fill own his multiply the divided. Thing great.
                                            Of
                                            heaven whose signs.
                                        </p>

                                        <!-- Footer -->
                                        <div class="row align-items-center">
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 fs-sm">Was this review helpful?</p>

                                            </div>
                                            <div class="col-auto me-auto">

                                                <!-- Rate -->
                                                <div class="rate">
                                                    <a class="rate-item" data-toggle="vote" data-count="2"
                                                        href="#" role="button">
                                                        <i class="fa fa-thumbs-up"></i>
                                                    </a>
                                                    <a class="rate-item" data-toggle="vote" data-count="1"
                                                        href="#" role="button">
                                                        <i class="fa fa-thumbs-down"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 fs-sm">Comments (1)</p>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Button -->
                                                <a class="btn btn-xs btn-outline-border" href="#!">
                                                    Comment
                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Child review -->
                            <div class="review review-child">
                                <div class="review-body">

                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-12 col-md-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-xxl mb-6 mb-md-0">
                                                <span class="avatar-title rounded-circle">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md">

                                            <!-- Header -->
                                            <div class="row mb-6">
                                                <div class="col-12">

                                                    <!-- Rating -->
                                                    <div class="rating fs-sm text-dark" data-value="4">
                                                        <div class="rating-item">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="rating-item">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="rating-item">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="rating-item">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="rating-item">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12">

                                                    <!-- Time -->
                                                    <span class="fs-xs text-muted">
                                                        William Stokes, <time datetime="2019-07-14">14 Jul 2019</time>
                                                    </span>

                                                </div>
                                            </div>

                                            <!-- Title -->
                                            <p class="mb-2 fs-lg fw-bold">
                                                Very good
                                            </p>

                                            <!-- Text -->
                                            <p class="text-gray-500">
                                                Made face lights yielding forth created for image behold blessed seas.
                                            </p>

                                            <!-- Footer -->
                                            <div class="row align-items-center">
                                                <div class="col-auto d-none d-lg-block">

                                                    <!-- Text -->
                                                    <p class="mb-0 fs-sm">Was this review helpful?</p>

                                                </div>
                                                <div class="col-auto me-auto">

                                                    <!-- Rate -->
                                                    <div class="rate">
                                                        <a class="rate-item" data-toggle="vote" data-count="7"
                                                            href="#" role="button">
                                                            <i class="fa fa-thumbs-up"></i>
                                                        </a>
                                                        <a class="rate-item" data-toggle="vote" data-count="0"
                                                            href="#" role="button">
                                                            <i class="fa fa-thumbs-down"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto d-none d-lg-block">

                                                    <!-- Text -->
                                                    <p class="mb-0 fs-sm">Comments (0)</p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Button -->
                                                    <a class="btn btn-xs btn-outline-border" href="#!">
                                                        Comment
                                                    </a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mt-9">
                        <ul class="pagination pagination-sm text-gray-400">
                            <li class="page-item">
                                <a class="page-link page-link-arrow" href="#">
                                    <i class="fa fa-caret-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link page-link-arrow" href="#">
                                    <i class="fa fa-caret-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

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
