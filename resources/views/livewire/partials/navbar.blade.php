<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">

        <!-- Brand -->
        <a wire:navigate class="navbar-brand" href="{{ route('client.index') }}">
            @if ($shop->logo_type == 1)
                <img src="{{ asset('storage/' . $shop->logo) }}" class=""  style="max-height: 45px" alt="{{ $shop->name }} Logo">                
            @else
                {{ $shop->name }}                
            @endif
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
                        href="{{ route('client.index') }}" wire:navigate>Accueil</a>
                </li>
                <li class="nav-item ">
                    <!-- Toggle -->
                    <a class="nav-link {{ request()->is('products') ? 'active' : '' }}"
                        href="{{ route('customer.products') }}" wire:navigate>Produits</a>
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