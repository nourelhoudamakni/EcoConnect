@extends('frontOffice.menu')
@section('marketPlace')
        <!-- main content -->
         <div class="main-content bg-white">
            <div class="middle-sidebar-bottom">
                <div class="container pe-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-wrapper bg-greylight overflow-hidden rounded-3">
                                        <div class="banner-slider owl-carousel owl-theme dot-style2 owl-nav-link link-style3 overflow-hidden">
                                             <div class="owl-items style1 d-flex align-items-center bg-lightblue" >
                                                <div class="row">
                                                    <div class="col-lg-6 p-lg-5 ps-5 pe-5 pt-4" style="padding-right: 20px !important;">
                                                        <div class="card w-100 border-0 ps-lg-5 ps-0 bg-transparent bg-transparent-card">
                                                            <h4 class="font-xssss text-danger ls-3 fw-700 ms-0 mt-4 mb-3">TRENDING</h4>
                                                            <h2 class="fw-300 display2-size display2-md-size lh-2 text-grey-900">New Arrival Products<br> <b class="fw-700">Collection</b></h2>
                                                            <p class="fw-500 text-grey-500 lh-26 font-xssss pe-lg-5">Check it now</p>
                                                            <a href="{{ route('Produit.create') }}" class="fw-700 text-white rounded-xl bg-primary-gradiant font-xsssss text-uppercase ls-3 lh-30 mt-0 text-center d-inline-block p-2 w150">Add new product</a>
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                            <div class="owl-items style1 d-flex align-items-center bg-cyan" >
                                                <div class="row">
                                                    <div class="col-lg-6 p-lg-5 ps-5 pe-5 pt-4" style="padding-right: 20px !important;">
                                                        <div class="card w-100 border-0 ps-lg-5 ps-0 bg-transparent bg-transparent-card">
                                                            <h4 class="font-xssss text-white ls-3 fw-700 ms-0 mt-4 mb-3">TRENDING</h4>
                                                            <h2 class="fw-300 display2-size display2-md-size lh-2 text-white">New Arrival Products<br> <b class="fw-700">Collection</b></h2>
                                                            <p class="fw-500 text-grey-100 lh-26 font-xssss pe-lg-5">Check it now</p>
                                                            <a href="" class="fw-700 text-grey-900 rounded-xl bg-white font-xsssss text-uppercase ls-3 lh-30 mt-0 text-center d-inline-block p-2 w150">Add new product</a>
                                                        </div>
                                                    </div>
                                                   

                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                    <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4"
                                        id="pills-tab" role="tablist">

                                        <li class=" list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active "
                                                href="/Produits" data-toggle="tab">Liste des produits</a></li>

                                        <li class=" active list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block "
                                                href="/MesProduits" data-toggle="tab">Mes produits</a></li>

                                                <li class=" list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block "
                                                href="/collaborateurs" data-toggle="tab">Mes collaborateurs</a></li>

                                    </ul>
                                </div>
                                


                                @foreach($products as $product)
    <div class="col-lg-4 col-md-6 mt-3">
        <div class="card d-block w-100 border-0 mb-3 shadow-xss bg-white rounded-3 p-4" style="padding-left: 120px !important;">
            <img src="public/images/{{ $product->image }}" width="100px" alt="Projet Image">
            <h4 class="font-xss fw-700 text-grey-900 mb-3 pe-4"><a href="{{ route('Prod.details',$product->id) }}">{{ $product->titre }}</a></h4>
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
        </div>
    </div>
@endforeach




                                <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#" class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">back to top</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- main content -->
         @endsection
