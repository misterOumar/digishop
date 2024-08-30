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
                    @forelse ($produits as $produit)
                        <div class="col-6 col-md-3 col-sm-6">

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
                                        href="{{ route('client.product.details', $produit) }}">
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
                            <a class="page-link page-link-arrow" wire:click="previousPage" wire:loading.attr="disabled"
                                href="#">
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
