<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('client/assets/favicon/favicon.ico') }}" type="image/x-icon" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/libs.bundle.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/theme.bundle.css') }}" />


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Title -->
    <title> @yield('title') - {{ $shop->name }}</title>
</head>

<body >

    @include('clients.partials.modals_partial')


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="">
                {{ $shop->name }}
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Nav -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <!-- Toggle -->
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ route('client.index') }}">Accueil</a>
                    </li>
                    <li class="nav-item ">
                        <!-- Toggle -->
                        <a class="nav-link" href="">Panier</a>
                    </li>



                </ul>

                <!-- Nav -->
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#modalSearch">
                            <i class="fa-solid fa-magnifying-glass " style="color: #30353b;"></i>
                        </a>
                    </li>
                    <li class="nav-item ms-lg-n4">
                        <a class="nav-link" href="">
                            <i class="fa-regular fa-user " style="color: #30353b;"></i>
                        </a>
                    </li>
                    <li class="nav-item ms-lg-n4">
                        <a class="nav-link" href="./account-wishlist.html">
                            <i class="fa-regular fa-heart" style="color: #30353b;"></i>
                        </a>
                    </li>
                    <li class="nav-item ms-lg-n4">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#modalShoppingCart">
                            <span data-cart-items="{{ count((array) session('cart')) }}">
                                <i class="fa-solid fa-cart-shopping" style="color: #30353b;"></i>
                            </span>



                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>

    <!-- PROMO -->
    <div class="py-3 bg-dark bg-pattern mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Text -->
                    <div class="text-center text-white">
                        <span class="heading-xxs letter-spacing-xl">
                            ⚡️ De bonnes affaires pour les fêtes de fin d'année👌 ⚡️
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @yield('content')




    <!-- FOOTER -->
    <footer class="bg-dark bg-cover "
        style="background-image: url({{ asset('client/assets/img/patterns/pattern-2.svg') }})">
        <div class="py-12 border-bottom border-gray-700">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-6">

                        <!-- Heading -->
                        <h5 class="mb-7 text-center text-white">Want style Ideas and Treats?</h5>

                        <!-- Form -->
                        <form class="mb-11">
                            <div class="row gx-5 align-items-start">
                                <div class="col">
                                    <input type="email" class="form-control form-control-gray-700 form-control-lg"
                                        placeholder="Enter Email *">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-gray-500 btn-lg">Subscribe</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3">

                        <!-- Heading -->
                        <h4 class="mb-6 text-white"> {{ $shop->name }}</h4>

                        <!-- Social -->
                        <ul class="list-unstyled list-inline mb-7 mb-md-0">

                            @if ($shop->facebook)
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $shop->facebook }}" class="text-gray-350">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>                                
                            @endif

                            @if ($shop->youtube)
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $shop->youtube }}" class="text-gray-350">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            @endif

                            @if ($shop->twitter)
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $shop->twitter }}" class="text-gray-350">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            @endif
                           
                            @if ($shop->instagram)                            
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $shop->instagram }}" class="text-gray-350">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            @endif

                            @if ($shop->tiktok)
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $shop->tiktok }}" class="text-gray-350">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </li>
                            @endif
                        </ul>

                    </div>
                    <div class="col-6 col-sm">

                        <!-- Heading -->
                        <h6 class="heading-xxs mb-4 text-white">
                            Support
                        </h6>

                        <!-- Links -->
                        <ul class="list-unstyled mb-7 mb-sm-0">
                            <li>
                                <a class="text-gray-300" href="./contact-us.html">Contact Us</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="./faq.html">FAQs</a>
                            </li>
                            <li>
                                <a class="text-gray-300" data-bs-toggle="modal" href="#modalSizeChart">Size
                                    Guide</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="./shipping-and-returns.html">Shipping & Returns</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-6 col-sm">

                        <!-- Heading -->
                        <h6 class="heading-xxs mb-4 text-white">
                            Shop
                        </h6>

                        <!-- Links -->
                        <ul class="list-unstyled mb-7 mb-sm-0">
                            <li>
                                <a class="text-gray-300" href="./shop.html">Men's Shopping</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="./shop.html">Women's Shopping</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="./shop.html">Kids' Shopping</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="./shop.html">Discounts</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-6 col-sm">

                        <!-- Heading -->
                        <h6 class="heading-xxs mb-4 text-white">
                            Company
                        </h6>

                        <!-- Links -->
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-gray-300" href="./about.html">Our Story</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="#!">Careers</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="#!">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="text-gray-300" href="#!">Privacy & Cookie policy</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-6 col-sm">

                        <!-- Heading -->
                        <h6 class="heading-xxs mb-4 text-white">
                            Contact
                        </h6>

                        <!-- Links -->
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-gray-300" href="tel:">{{ $shop->phone_1 ?? '' }}</a>
                            </li>
                            @if ($shop->phone_2)
                            <li>
                                <a class="text-gray-300" href="#!">{{ $shop->phone_2 ?? '' }}</a>
                            </li>
                            @endif
                            @if ($shop->email)
                            <li>
                                <a class="text-gray-300" href="#!">{{ $shop->email }}</a>
                            </li>
                            @endif
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Copyright -->
                        <p class="mb-3 mb-md-0 fs-xxs text-muted">
                            © 2019 All rights reserved. Designed by Unvab.
                        </p>

                    </div>
                    <div class="col-auto">

                        <!-- Payment methods -->
                        <img class="footer-payment" src="{{ asset('/client/assets/img/payment/mastercard.svg') }}"
                            alt="...">
                        <img class="footer-payment" src="{{ asset('/client/assets/img/payment/visa.svg') }}"
                            alt="...">
                        <img class="footer-payment" src="{{ asset('/client/assets/img/payment/amex.svg') }}"
                            alt="...">
                        <img class="footer-payment" src="{{ asset('/client/assets/img/payment/paypal.svg') }}"
                            alt="...">
                        <img class="footer-payment" src="{{ asset('/client/assets/img/payment/maestro.svg') }}"
                            alt="...">
                        <img class="footer-payment" src="{{ asset('/client/assets/img/payment/klarna.svg') }}"
                            alt="...">

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <!-- Map (replace the API key to enable) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('client/assets/js/vendor.bundle.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('client/assets/js/theme.bundle.js') }}"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    @yield('scripts')


    <script type="text/javascript">
        // modal pour voir un produit
        $(document).ready(function() {
            $('.btn-view-modal').click(function(e) {
                e.preventDefault();
                var productUrl = $(this).data('url')

                $.get(productUrl, function(data) {
                    console.log(data);

                    $('#plus_info').attr('href', "/" + data.produit.id);
                    $('#fournisseur_produit').attr('href', "/" + data.produit.fournisseur_id);
                    $('#btn_add_to_cart').attr('href', "/" + data
                        .id);

                    $('#image_produit').attr('src', "{{ asset('products/') }}" + '/' + data.produit
                        .image)
                    $('#modalProductColorOne').attr('src', "{{ asset('products/') }}" + '/' + data
                        .produit
                        .image)
                    $('#modalProductColorTwo').attr('src', "{{ asset('products/') }}" + '/' + data
                        .produit
                        .image)
                    $('#fournisseur_produit').text(data.fournisseur.name + ' ' + data.fournisseur
                        .surname)
                    $('#nom_produit').text(data.produit.nom)
                    $('#description').text(data.produit.description)

                    $('#prix_produit').text(data.produit.prix + ' ' + 'F-CFA')
                    $('#stock').text('( ' + data.produit.quantite + ' en stock )')
                    $('#prix_produit_barre').text(data.produit.prix + ' ' + 'F-CFA')


                    $('#modalProductDetail').modal('show');
                });

            });
        });

        //mettre à jour la quantité
        $(".cart_update").change(function(e) {
            e.preventDefault();
            var ele = $(this);

            $.ajax({
                url: '',
                method: 'patch',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: ele.parents('li').attr("data-id"),
                    quantite: ele.parents('li').find(".quantite").val(),
                },

                success: function(response) {
                    // windown.location.reload();

                }

            });

        });

        // Retirer du panier
        $('.cart_remove').click(function(e) {
            e.preventDefault();

            var ele = $(this);

            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: "Vous ne pourrez pas revenir en arrière !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, Retirer!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '',
                        method: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: ele.parents('li').attr("data-id")
                        },

                        success: function(response) {
                            Swal.fire(
                                'Supprimer !',
                                'Produit retirer du panier',
                                'success'
                            )
                            windown.location.reload();

                        }

                    });
                }
            })
        });
    </script>

</body>

</html>
