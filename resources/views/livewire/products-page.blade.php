<!-- CONTENT -->
<section class="py-11">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

                <!-- Filters -->
                <form class="mb-10 mb-md-0">
                    <ul class="nav nav-vertical" id="filterNav">

                        <li class="nav-item">

                            <!-- Toggle -->
                            <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                data-bs-toggle="collapse" href="#categoryCollapse">
                                Categories
                            </a>

                            

                            <!-- Collapse -->
                            <div class="collapse show" id="categoryCollapse" data-simplebar-collapse="#categoryGroup">
                                <div class="form-group form-group-overflow mb-6" id="seasonGroup">

                                    @foreach ($categories as $category)
                                        <div class="form-check mb-3" wire-key="{{ $category->id }}">
                                            <input wire:model.live="selected_categories" class="form-check-input" id="{{ $category->slug }}" type="checkbox"
                                                value="{{ $category->id }}">
                                            <label class="form-check-label" for="{{ $category->slug }}">
                                                {{ $category->nom }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </li>
                        <li class="nav-item">

                            <!-- Toggle -->
                            <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                data-bs-toggle="collapse" href="#brandCollapse">
                                Marques
                            </a>

                            <!-- Collapse -->
                            <div class="collapse" id="brandCollapse" data-simplebar-collapse="#brandGroup">

                                <!-- Search -->
                                <div data-list='{"valueNames": ["name"]}'>

                                    <!-- Input group -->
                                    <div class="input-group input-group-merge mb-6">
                                        <input class="form-control form-control-xs search" type="search"
                                            placeholder="Rechercher une marque">

                                        <!-- Button -->
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-border btn-xs">
                                                <i class="fe fe-search"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <!-- Form group -->
                                    <div class="form-group form-group-overflow mb-6" id="brandGroup">
                                        <div class="list">

                                            @foreach ($brands as $brand)
                                                <div class="form-check mb-3" wire-key="{{ $brand->id }}">
                                                    <input class="form-check-input" id="{{ $brand->slug }}"
                                                        type="checkbox" value="{{ $brand->id }}">
                                                    <label class="form-check-label name" for="{{ $brand->slug }}">
                                                        {{ $brand->name }}
                                                    </label>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </li>
                        <li class="nav-item">

                            <!-- Toggle -->
                            <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                data-bs-toggle="collapse" href="#sizeCollapse">
                                Size
                            </a>

                            <!-- Collapse -->
                            <div class="collapse" id="sizeCollapse" data-simplebar-collapse="#sizeGroup">
                                <div class="form-group form-group-overlow mb-6" id="sizeGroup">
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeOne" type="checkbox">
                                        <label class="form-check-label" for="sizeOne">
                                            3XS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeTwo" type="checkbox" disabled>
                                        <label class="form-check-label" for="sizeTwo">
                                            2XS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeThree" type="checkbox">
                                        <label class="form-check-label" for="sizeThree">
                                            XS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeFour" type="checkbox">
                                        <label class="form-check-label" for="sizeFour">
                                            S
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeFive" type="checkbox" checked>
                                        <label class="form-check-label" for="sizeFive">
                                            M
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeSix" type="checkbox">
                                        <label class="form-check-label" for="sizeSix">
                                            L
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeSeven" type="checkbox">
                                        <label class="form-check-label" for="sizeSeven">
                                            XL
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeEight" type="checkbox" disabled>
                                        <label class="form-check-label" for="sizeEight">
                                            2XL
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeNine" type="checkbox">
                                        <label class="form-check-label" for="sizeNine">
                                            3XL
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeTen" type="checkbox">
                                        <label class="form-check-label" for="sizeTen">
                                            4XL
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-size mb-2">
                                        <input class="form-check-input" id="sizeEleven" type="checkbox">
                                        <label class="form-check-label" for="sizeEleven">
                                            One Size
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item">

                            <!-- Toggle -->
                            <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                data-bs-toggle="collapse" href="#colorCollapse">
                                Color
                            </a>

                            <!-- Collapse -->
                            <div class="collapse" id="colorCollapse" data-simplebar-collapse="#colorGroup">
                                <div class="form-group form-group-overflow mb-6" id="colorGroup">
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="colorOne" type="checkbox"
                                            style="background-color: black">
                                        <label class="form-check-label text-body" for="colorOne">
                                            Black
                                        </label>
                                    </div>
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="colorTwo" type="checkbox"
                                            style="background-color: #f9f9f9;" checked>
                                        <label class="form-check-label text-body" for="colorTwo">
                                            White
                                        </label>
                                    </div>
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="colorThree" type="checkbox"
                                            style="background-color: #3b86ff">
                                        <label class="form-check-label text-body" for="colorThree">
                                            Blue
                                        </label>
                                    </div>
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="colorFour" type="checkbox"
                                            style="background-color: #ff6f61">
                                        <label class="form-check-label text-body" for="colorFour">
                                            Red
                                        </label>
                                    </div>
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="colorFive" type="checkbox"
                                            style="background-color: #795548" disabled>
                                        <label class="form-check-label text-body" for="colorFive">
                                            Brown
                                        </label>
                                    </div>
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="colorSix" type="checkbox"
                                            style="background-color: #bababa">
                                        <label class="form-check-label text-body" for="colorSix">
                                            Gray
                                        </label>
                                    </div>
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="colorSeven" type="checkbox"
                                            style="background-color: #17a2b8;">
                                        <label class="form-check-label text-body" for="colorSeven">
                                            Cyan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-color">
                                        <input class="form-check-input" id="colorEight" type="checkbox"
                                            style="background-color: #e83e8c;">
                                        <label class="form-check-label text-body" for="colorEight">
                                            Pink
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item">

                            <!-- Toggle -->
                            <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                data-bs-toggle="collapse" href="#priceCollapse">
                                Price
                            </a>

                            <!-- Collapse -->
                            <div class="collapse" id="priceCollapse" data-simplebar-collapse="#priceGroup">

                                <!-- Form group-->
                                <div class="form-group form-group-overflow mb-6" id="priceGroup">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="priceOne" type="checkbox" checked>
                                        <label class="form-check-label" for="priceOne">
                                            $10.00 - $49.00
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="priceTwo" type="checkbox" checked>
                                        <label class="form-check-label" for="priceTwo">
                                            $50.00 - $99.00
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="priceThree" type="checkbox">
                                        <label class="form-check-label" for="priceThree">
                                            $100.00 - $199.00
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="priceFour" type="checkbox">
                                        <label class="form-check-label" for="priceFour">
                                            $200.00 and Up
                                        </label>
                                    </div>
                                </div>

                                <!-- Range -->
                                <div class="d-flex align-items-center">

                                    <!-- Input -->
                                    <input type="number" class="form-control form-control-xs" placeholder="$10.00"
                                        min="10">

                                    <!-- Divider -->
                                    <div class="text-gray-350 mx-2">‒</div>

                                    <!-- Input -->
                                    <input type="number" class="form-control form-control-xs" placeholder="$350.00"
                                        max="350">

                                </div>

                            </div>

                        </li>
                    </ul>
                </form>

            </div>

            <div class="col-12 col-md-8 col-lg-9">


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
                    @forelse ($produits as $produit)
                        <div class="col-6 col-md-3 col-sm-6" wire-key="{{ $produit->id }}">

                            <!-- Card -->
                            <div class="card mb-7">

                                <!-- Badge -->

                                @if ($produit->is_solde)
                                    <div class="badge bg-dark card-badge card-badge-start text-uppercase">
                                        Solde
                                    </div>
                                @elseif ($produit->is_new)
                                    <div class="badge bg-white text-body card-badge card-badge-start text-uppercase">
                                        Nouveau
                                    </div>
                                @endif

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Image -->
                                    <a class="{{ count($produit->photos) > 0 ? 'card-img-hover' : '' }}"
                                        href="{{ route('customer.product.details', $produit->slug) }}">
                                        @if (count($produit->photos) > 0)
                                            <img class="card-img-top card-img-back"
                                                src="{{ asset('storage/' . $produit->photos[0]) }}" alt="...">
                                        @endif

                                        <img class="card-img-top card-img-front"
                                            src="{{ asset('storage/' . $produit->image) }}" alt="...">
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
                                        <a class="text-muted" href="shop.html">{{ $produit->categorie->nom }}</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="fw-bold">
                                        <a class="text-body" href="product.html">
                                            {{ $produit->nom }}
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    @if ($produit->is_solde)
                                        <div class="fw-bold">
                                            <span
                                                class="fs-xs text-gray-350 text-decoration-line-through">{{ \App\Helpers::formatNumber(value: $produit->prix + $produit->prix * 0.5, style: NumberFormatter::CURRENCY, precision: 2, currencyCode: $shop->currency->code) }}</span>
                                            <span
                                                class="text-primary">{{ \App\Helpers::formatNumber(value: $produit->prix, style: NumberFormatter::CURRENCY, precision: 2, currencyCode: $shop->currency->code) }}</span>
                                        </div>
                                    @else
                                        <div class="fw-bold text-muted">
                                            {{ \App\Helpers::formatNumber(value: $produit->prix, style: NumberFormatter::CURRENCY, precision: 2, currencyCode: $shop->currency->code) }}
                                        </div>
                                    @endif

                                </div>

                            </div>

                        </div>
                    @empty
                        <p>Aucun produit disponible</p>
                    @endforelse



                </div>

                <!-- Pagination -->
                <nav class="d-flex justify-content-center justify-content-md-end">
                    <!-- Pagination personnalisée -->
                    <ul class="pagination pagination-sm text-gray-400">
                        <!-- Lien pour la page précédente -->
                        <li class="page-item @if ($produits->onFirstPage()) disabled @endif">
                            <a class="page-link page-link-arrow" wire:click="previousPage"
                                wire:loading.attr="disabled" href="#">
                                <i class="fa fa-caret-left"></i>
                            </a>
                        </li>

                        <!-- Liens pour chaque page -->
                        @foreach ($produits->links()->elements[0] as $page => $url)
                            <li class="page-item @if ($produits->currentPage() == $page) active @endif">
                                <a class="page-link" wire:click="gotoPage({{ $page }})"
                                    href="#">{{ $page }}</a>
                            </li>
                        @endforeach

                        <!-- Lien pour la page suivante -->
                        <li class="page-item @if (!$produits->hasMorePages()) disabled @endif">
                            <a class="page-link page-link-arrow" wire:click="nextPage" wire:loading.attr="disabled"
                                href="#">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>
