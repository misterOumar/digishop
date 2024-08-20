@extends('layouts.client_layout')

@section('title', 'Accueil')

@section('content')

<style>
.flickity-prev-next-button.previous::before {
    content: "\f053"; /* Code Unicode pour l'icône "fa-chevron-left" */
    font-family: "Font Awesome 6 Free"; /* Nom de la police Font Awesome */
    font-weight: 900; /* Poids de la police (nécessaire pour les icônes solid) */
    display: inline-block;
    font-size: 16px; /* Taille de l'icône */
    color: inherit; /* Couleur héritée de l'élément parent, vous pouvez aussi définir une couleur spécifique */
}
.flickity-prev-next-button.next::before {
    content: "\f054"; /* Code Unicode pour l'icône "fa-chevron-left" */
    font-family: "Font Awesome 6 Free"; /* Nom de la police Font Awesome */
    font-weight: 900; /* Poids de la police (nécessaire pour les icônes solid) */
    display: inline-block;
    font-size: 16px; /* Taille de l'icône */
    color: inherit; /* Couleur héritée de l'élément parent, vous pouvez aussi définir une couleur spécifique */
}

</style>

    <!-- SLIDER -->
    <section>
        <div class="flickity-page-dots-inner mb-9"
            data-flickity='{"prevNextButtons": true, "fade": false, "autoPlay": 3000, "lazyLoad": true, "pageDots": true}'>

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
  
           
  
              <!-- Content -->
              <div class="tab-content">
  
                <!-- Pane -->
                <div >
  
                  <!-- Slider -->
                  <div class="flickity-buttons-lg flickity-buttons-bottom-start px-lg-12" data-flickity='{"prevNextButtons": true}'>
  
                    <!-- Item -->
                    @forelse ($categories as $category)
                      <div class="col px-4" style="max-width: 200px;">
                        <div class="card h-100" >
    
                          <!-- Image -->
                          <img class="card-img-top" src="{{asset("storage/" .$category->cover)}}" alt="...">
    
                          <!-- Body -->
                          <div class="card-body py-4 px-0 text-center">
    
                            <!-- Heading -->
                            <a class="stretched-link text-body" href="{{ route('client.shop', $category->nom) }}">
                              <h6>{{ $category->nom }} <small>({{ $category->produits_count }})</small></h6>
                            </a>
    
                          </div>
    
                        </div>
                      </div>
                        
                    @empty
                        
                    @endforelse
  
                  
  
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

      

        @forelse ($produits as $produit)

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
                PROMO
              </span>

              <!-- Button -->
              <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct">
                <i class="fa-regular fa-eye me-2 "></i> Aperçu rapide
              </button>

              <!-- Image -->
              <img class="card-img-top" src="{{asset('storage/'.$produit->image)}}" alt="...">

            </div>

            <!-- Body -->
            <div class="card-body fw-bold text-center">
              <a class="text-body" href="{{ route('client.product.details', $produit->id) }}">{{ $produit->nom }}</a> <br>
              <span class="fs-xs text-gray-350 text-decoration-line-through">{{ $produit->prix + 3500 .' '. $shop->currency->symbol}} </span>
              <span class="text-primary">{{ $produit->prix.' ' . $shop->currency->symbol }}</span>
              {{-- <span class="text-muted">$65.00</span> --}}

            </div>

          </div>
        </div>

        @empty

        @endforelse

        


      

    

      </div>
    </section>
@endsection


@section('scripts')
@endsection
