@extends('layouts.client_layout')

@section('title', 'Shop')

@section('content')
    <!-- CONTENT -->
    <section class="py-11">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-12 col-lg-12">


                    <!-- Header -->
                    <div class="row align-items-center justify-content-between mb-7">
                     <div class="col-12 col-md-auto">
                        <div class="input-group input-group-merge">
                            <input class="form-control" type="search" placeholder="Search">
                            <div class="input-group-append">
                              <button class="btn btn-outline-border" type="submit">
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                     </div>
                        <div class="col-12 col-md-auto">

                            <!-- Select -->
                            <select class="form-select form-select-xs">
                                <option selected>Most popular</option>
                            </select>

                        </div>
                    </div>

                    

                    <!-- Products -->
                    <div class="row">
                        <div class="col-4 col-md-3">

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
                                        <img class="card-img-top card-img-back" src="{{ asset('client/assets/img/products/product-120.jpg') }}"
                                            alt="...">
                                        <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-5.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
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
                        <div class="col-4 col-md-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a class="card-img-hover" href="product.html">
                                        <img class="card-img-top card-img-back" src="{{ asset('client/assets/img/products/product-121.jpg') }}"
                                            alt="...">
                                        <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-6.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
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
                        <div class="col-4 col-md-3">

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
                                        <img class="card-img-top card-img-back" src="{{ asset('client/assets/img/products/product-122.jpg') }}"
                                            alt="...">
                                        <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-7.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
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
                        <div class="col-4 col-md-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a href="#!">
                                        <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-8.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
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
                        <div class="col-4 col-md-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a href="#!">
                                        <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-9.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
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
                                            Floral print midi Dress
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold text-muted">
                                        $50.00
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-4 col-md-3">

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
                                        <img class="card-img-top card-img-back" src="client/assets/img/products/product-123.jpg"
                                            alt="...">
                                        <img class="card-img-top card-img-front" src="client/assets/img/products/product-10.jpg"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                                <!-- Body -->
                                <div class="card-body px-0">

                                    <!-- Category -->
                                    <div class="fs-xs">
                                        <a class="text-muted" href="shop.html">Bags</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="fw-bold">
                                        <a class="text-body" href="product.html">
                                            Suede cross body Bag
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold">
                                        <span class="fs-xs text-gray-350 text-decoration-line-through">$79.00</span>
                                        <span class="text-primary">$49.00</span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-4 col-md-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a class="card-img-hover" href="product.html">
                                        <img class="card-img-top card-img-back" src="{{ asset('client/assets/img/products/product-124.jpg') }}"
                                            alt="...">
                                        <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-11.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                                <!-- Body -->
                                <div class="card-body px-0">

                                    <!-- Category -->
                                    <div class="fs-xs">
                                        <a class="text-muted" href="shop.html">Skirts</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="fw-bold">
                                        <a class="text-body" href="product.html">
                                            Printed A-line Skirt
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold text-muted">
                                        $79.00
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-4 col-md-3">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Badge -->
                                <div class="badge bg-white text-body card-badge card-badge text-uppercase">
                                    New
                                </div>

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a href="#!">
                                        <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-12.jpg') }}"
                                            alt="...">
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalProduct">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
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
                                            Heel strappy Sandals
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="fw-bold text-muted">
                                        $90.00
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center justify-content-md-end">
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
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
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
@endsection
