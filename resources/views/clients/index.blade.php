@extends('layouts.client_layout')

@section('title', 'Accueil')

@section('content')

    <!-- SLIDER -->
    <section>
        <div class="flickity-page-dots-inner mb-9"
            data-flickity='{"prevNextButtons": false, "fade": false, "autoPlay": 3000, "lazyLoad": true, "pageDots": true}'>

            <!-- Item -->
            <div class="w-100 bg-cover" style="background-image: url({{ asset('client/assets/img/covers/cover-5.jpg') }});">
                <div class="container d-flex flex-column">
                    <div class="row align-items-center py-12" style="min-height: 550px;">
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-md-1">

                            <!-- Heading -->
                            <h1>Soldes d'été</h1>

                            <!-- Heading -->
                            <h2 class="display-1 text-primary">-70%</h2>

                            <!-- Heading -->
                            <h5 class="mt-n4 mb-8">avec le code promo CN67EW*</h5>

                            <!-- Button -->
                            <a class="btn btn-dark" href="shop.html">
                                Acheter maintenant <i class="fa fa-arrow-right ms-2"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="w-100 bg-cover"
                style="background-image: url({{ asset('client/assets/img/covers/cover-23.jpg') }});">
                <div class="container d-flex flex-column">
                    <div class="row align-items-center justify-content-end py-12" style="min-height: 550px;">
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-md-n1">

                            <!-- Heading -->
                            <h1 class="mb-5">Collection d'été</h1>

                            <!-- Text -->
                            <p class="mb-8 fs-lg text-gray-500">
                                Ainsi appelé donner, une baleine arbre mers lieu sec propre
                                jour, arbre ailé créé esprit.
                            </p>

                            <!-- Button -->
                            <a class="btn btn-dark" href="shop.html">
                                Acheter maintenant <i class="fa fa-arrow-right ms-2"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="w-100 bg-cover"
                style="background-image: url({{ asset('client/assets/img/covers/cover-16.jpg') }});">
                <div class="bg-dark-20">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center justify-content-end" style="min-height: 550px;">
                            <div class="col-12 text-center text-white">

                                <!-- Preheading -->
                                <h4 class="mb-0">Style d'été</h4>

                                <!-- Heading -->
                                <h1 class="display-1">
                                    50% OFF
                                </h1>

                                <!-- Links -->
                                <p class="mb-0">
                                    <a href="shop.html" class="link-underline text-reset mx-4 my-4">Magasin pour femme</a>
                                    <a href="shop.html" class="link-underline text-reset mx-4 my-4">Magasin pour homme</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

      <!-- CATEGORIES -->
      <section class="py-12">
        <div class="container">
          <div class="row">
            <div class="col-12">
  
              <!-- Heading -->
              <h2 class="mb-4 text-center">Acheter par catégorie</h2>
  
              <!-- Nav -->
              <div class="nav justify-content-center mb-10">
                <a class="nav-link active" href="#topSellersTab" data-bs-toggle="tab">Femme</a>
                <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Homme</a>
                <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Enfant</a>
              </div>
  
              <!-- Content -->
              <div class="tab-content">
  
                <!-- Pane -->
                <div class="tab-pane fade show active" id="topSellersTab">
  
                  <!-- Slider -->
                  <div class="flickity-buttons-lg flickity-buttons-offset px-lg-12" data-flickity='{"prevNextButtons": true}'>
  
                    <!-- Item -->
                    <div class="col px-4" style="max-width: 200px;">
                      <div class="card">
  
                        <!-- Image -->
                        <img class="card-img-top" src="{{asset('client/assets/img/products/product-25.jpg')}}" alt="...">
  
                        <!-- Body -->
                        <div class="card-body py-4 px-0 text-center">
  
                          <!-- Heading -->
                          <a class="stretched-link text-body" href="shop.html">
                            <h6>Dresses <small>(58)</small></h6>
                          </a>
  
                        </div>
  
                      </div>
                    </div>
  
                    <!-- Item -->
                    <div class="col px-4" style="max-width: 200px;">
                      <div class="card">
  
                        <!-- Image -->
                        <img class="card-img-top" src="{{asset('client/assets/img/products/product-26.jpg')}}" alt="...">
  
                        <!-- Body -->
                        <div class="card-body py-4 px-0 text-center">
  
                          <!-- Heading -->
                          <a class="stretched-link text-body" href="shop.html">
                            <h6>Tops <small>(35)</small></h6>
                          </a>
  
                        </div>
  
                      </div>
                    </div>
  
                    <!-- Item -->
                    <div class="col px-4" style="max-width: 200px;">
                      <div class="card">
  
                        <!-- Image -->
                        <img class="card-img-top" src="{{asset('client/assets/img/products/product-27.jpg')}}" alt="...">
  
                        <!-- Body -->
                        <div class="card-body py-4 px-0 text-center">
  
                          <!-- Heading -->
                          <a class="stretched-link text-body" href="shop.html">
                            <h6>T-shirts <small>(27)</small></h6>
                          </a>
  
                        </div>
  
                      </div>
                    </div>
  
                    <!-- Item -->
                    <div class="col px-4" style="max-width: 200px;">
                      <div class="card">
  
                        <!-- Image -->
                        <img class="card-img-top" src="{{asset('client/assets/img/products/product-128.jpg')}}" alt="...">
  
                        <!-- Body -->
                        <div class="card-body py-4 px-0 text-center">
  
                          <!-- Heading -->
                          <a class="stretched-link text-body" href="shop.html">
                            <h6>Shoes <small>(64)</small></h6>
                          </a>
  
                        </div>
  
                      </div>
                    </div>
  
                    <!-- Item -->
                    <div class="col px-4" style="max-width: 200px;">
                      <div class="card">
  
                        <!-- Image -->
                        <img class="card-img-top" src="{{asset('client/assets/img/products/product-129.jpg')}}" alt="...">
  
                        <!-- Body -->
                        <div class="card-body py-4 px-0 text-center">
  
                          <!-- Heading -->
                          <a class="stretched-link text-body" href="shop.html">
                            <h6>Jeans <small>(12)</small></h6>
                          </a>
  
                        </div>
  
                      </div>
                    </div>
  
                    <!-- Item -->
                    <div class="col px-4" style="max-width: 200px;">
                      <div class="card">
  
                        <!-- Image -->
                        <img class="card-img-top" src="{{asset('client/assets/img/products/product-125.jpg')}}" alt="...">
  
                        <!-- Body -->
                        <div class="card-body py-4 px-0 text-center">
  
                          <!-- Heading -->
                          <a class="stretched-link text-body" href="shop.html">
                            <h6>Sweatshirts <small>(11)</small></h6>
                          </a>
  
                        </div>
  
                      </div>
                    </div>
  
                    <!-- Item -->
                    <div class="col px-4" style="max-width: 200px;">
                      <div class="card">
  
                        <!-- Image -->
                        <img class="card-img-top" src="{{asset('client/assets/img/products/product-126.jpg')}}" alt="...">
  
                        <!-- Body -->
                        <div class="card-body py-4 px-0 text-center">
  
                          <!-- Heading -->
                          <a class="stretched-link text-body" href="shop.html">
                            <h6>Jackets <small>(9)</small></h6>
                          </a>
  
                        </div>
  
                      </div>
                    </div>
  
                  </div>
  
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </section>

          <!-- ARRIVALS -->
    <section class="py-12">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <!-- Heading -->
            <h2 class="mb-10 text-center">Nouvelles arrivées</h2>

          </div>
        </div>
      </div>
      <div class="flickity-page-dots-progress" data-flickity='{"pageDots": true}'>

        <!-- Item -->
        <div class="col px-4" style="max-width: 300px;">
          <div class="card">

            <!-- Image -->
            <div class="card-img">

              <!-- Action -->
              <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button">
                <i class="fa-regular fa-heart"></i>
              </button>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 mb-1"></i> Quick View
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('client/assets/img/products/product-6.jpg')}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="product.html">Cotton floral print Dress</a> <br>
              <span class="text-muted">$40.00</span>
            </div>

          </div>
        </div>

        <!-- Item -->
        <div class="col px-4" style="max-width: 300px;">
          <div class="card">

            <!-- Image -->
            <div class="card-img">

              <!-- Action -->
              <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button">
                <i class="fa-regular fa-heart"></i>
              </button>

              <!-- Badge -->
              <span class="badge bg-dark card-badge card-badge-start text-uppercase">
                Sale
              </span>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 mb-1"></i> Quick View
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('client/assets/img/products/product-10.jpg')}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="product.html">Suede cross body Bag</a> <br>
              <span class="fs-xs text-gray-350 text-decoration-line-through">$85.00</span>
              <span class="text-primary">$49.00</span>
            </div>

          </div>
        </div>

        <!-- Item -->
        <div class="col px-4" style="max-width: 300px;">
          <div class="card">

            <!-- Image -->
            <div class="card-img">

              <!-- Action -->
              <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button">
                <i class="fa-regular fa-heart"></i>
              </button>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 mb-1"></i> Quick View
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('client/assets/img/products/product-32.jpg')}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="product.html">Cotton leaf print Shirt</a> <br>
              <span class="text-muted">$65.00</span>
            </div>

          </div>
        </div>

        <!-- Item -->
        <div class="col px-4" style="max-width: 300px;">
          <div class="card">

            <!-- Image -->
            <div class="card-img">

              <!-- Action -->
              <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button">
                <i class="fa-regular fa-heart"></i>
              </button>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 mb-1"></i> Quick View
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('client/assets/img/products/product-7.jpg')}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="product.html">Leather Sneakers</a> <br>
              <a class="text-primary" href="#">Select Options</a>
            </div>

          </div>
        </div>

        <!-- Item -->
        <div class="col px-4" style="max-width: 300px;">
          <div class="card">

            <!-- Image -->
            <div class="card-img">

              <!-- Action -->
              <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button">
                <i class="fa-regular fa-heart"></i>
              </button>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 mb-1"></i> Quick View
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('client/assets/img/products/product-11.jpg')}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="product.html">Another fine dress</a> <br>
              <span class="text-muted">$99.00</span>
            </div>

          </div>
        </div>

        <!-- Item -->
        <div class="col px-4" style="max-width: 300px;">
          <div class="card">

            <!-- Image -->
            <div class="card-img">

              <!-- Action -->
              <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button">
                <i class="fa-regular fa-heart"></i>
              </button>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 mb-1"></i> Quick View
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('client/assets/img/products/product-33.jpg')}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="product.html">Baseball Cap</a> <br>
              <span class="text-muted">$10.00</span>
            </div>

          </div>
        </div>

        <!-- Item -->
        <div class="col px-4" style="max-width: 300px;">
          <div class="card">

            <!-- Image -->
            <div class="card-img">

              <!-- Action -->
              <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button">
                <i class="fa-regular fa-heart"></i>
              </button>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 mb-1"></i> Quick View
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('client/assets/img/products/product-49.jpg')}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="product.html">Leather sneakers</a> <br>
              <span class="text-muted">$19.00</span>
            </div>

          </div>
        </div>

      </div>
    </section>
@endsection


@section('scripts')
@endsection
