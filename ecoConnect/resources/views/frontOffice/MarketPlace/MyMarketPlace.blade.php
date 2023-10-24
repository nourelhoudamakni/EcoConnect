@extends('frontOffice.menu')

@section('marketPlace')
    <div class="main-content bg-white">
        <div class="middle-sidebar-bottom">
            <div class="container pe-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                        <div class="col-lg-12" >
                                    <div class="card " >
                                        <img  src="{{ Vite::asset('resources/assetsFront/images/Products.jpg') }}" class="card-img" alt="Stony Beach" style="opacity: 0.9;blur:20px" >
                                                <div class="card-img-overlay text-center" >
                                                    <h2 class="fw-700 display2-size display2-md-size lh-2  mt-5 " style="color: white;font-family: Montserrat,sans-serif;">EcoConnect MarketPlace</h2>

                                                </div>
                                    </div>
                                </div>
                            <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4" id="pills-tab" role="tablist">
                                    <li class="list-inline-item me-5"><a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active" href="/Produits" data-toggle="tab">Liste des produits</a></li>
                                    <li class="active list-inline-item me-5"><a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block" href="/MesProduits" data-toggle="tab">Mes produits</a></li>
                                    <li class="list-inline-item me-5"><a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block" href="/collaborateurs" data-toggle="tab">Mes collaborateurs</a></li>
                                </ul>
                            </div>




                            <div class="mt-3 text-center"> <!-- Centered the search bar -->
                                <form action="{{ route('products.search') }}" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control form-control-sm" placeholder="Rechercher par titre" aria-label="Rechercher par titre">
                                        <button type="submit" class="btn btn-primary btn-sm">Rechercher</button>
                                    </div>
                                </form>
                            </div>





                            @foreach ($products->sortByDesc('likes') as $product)
    <div class="col-lg-4 col-md-6 mt-3">
        <div class="card d-block w-100 h-100 border-0 mb-3 shadow-xss bg-white rounded-3 p-4 @if ($loop->first) highlight-product @endif">
            <div class="d-flex flex-column "> <!-- Adjusted to align text to the left and picture in the middle -->

                <div class="text-center mb-3"> <!-- Center the image -->
                    <img src="../public/images/{{ $product->image }}" width="100px" alt="Projet Image">
                </div>
                <h4 class="font-xss fw-700 text-grey-900 mb-3 pe-4 pt-4">
                    <a href="{{ route('Prod.details', $product->id) }}">{{ $product->titre }}</a>
                </h4>
                <h5 class="font-xssss mb-2 text-grey-500 fw-600">
                    <span class="text-grey-900 font-xssss">Prix : </span> {{ $product->prix }}
                </h5>
                <h5 class="font-xssss mb-2 text-grey-500 fw-600">
                    <span class="text-grey-900 font-xssss">Description : </span> {{ $product->description }}
                </h5>
                @if ($product->collaborateur)
                    <h5 class="font-xssss mb-2 text-success fw-600">
                        <span class="text-grey-900 font-xssss">Collaborateur : </span> {{ $product->collaborateur->nom }}
                    </h5>
                @endif
                <h5 class="font-xssss mb-2 text-success fw-600">
                    <span class="text-grey-900 font-xssss">Likes : </span> {{ $product->likes }}
                </h5>
                <form action="{{ route('products.like', ['product' => $product->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success btn-icon me-2">
                        <i class="feather feather-thumbs-up font-md text-white"></i>
                    </button>
                </form>
            </div>
            <div class="best-seller-badge @if (!$loop->first) text-center @endif mb-3 pt-4">
                    @if ($loop->first) <!-- Check if it's the most liked product -->
                    <div style="background-color: red; color: white; border-radius: 4px; padding: 5px; display: flex; justify-content: center; align-items: center;">
    <span class="font-md fw-700">Best-Seller</span>
</div>

                    @endif
                </div>
        </div>
        
    </div>
@endforeach



                            <div class="col-lg-12 mt-3 mb-5 text-center">
                                <a href="#" class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">back to top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
