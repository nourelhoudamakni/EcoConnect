@extends('frontOffice.menu')
@section('produitDetails')
    <div class="main-content bg-white">
        <div class="middle-sidebar-bottom">
            <div class="container pe-0">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card ">
                                    <img src="{{ Vite::asset('resources/assetsFront/images/actVolontaire.jpg') }}"
                                        class="card-img" alt="Stony Beach" style="opacity: 0.9;blur:20px">
                                    <div class="card-img-overlay text-center">
                                        <h2 class="fw-700 display2-size display2-md-size lh-2  mt-5 "
                                            style="color: white;font-family: Montserrat,sans-serif;">Actes Volontaires</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4" id="pills-tab"
                                    role="tablist">
                                    <li class=" list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block "
                                            href="/Acte-Volontaire" data-toggle="tab">Liste des actes</a></li>
                                    <li class=" active list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                            href="/Actes-show" data-toggle="tab">Mes actes</a></li>

                                </ul>
                            </div>


                            <div class="col-lg-12 mt-3">
                                <a href="{{ route('Acte.create') }}" class="btn btn-primary text-white">Ajouter acte
                                    volontaire</a>
                            </div>
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            {{-- <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">Featured</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="default-hotel-details.html" class="position-relative d-block"><img src="images/h-1.jpg" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="default-hotel-details.html" class="text-dark text-grey-900">Montana Hotel</a></h4>
                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                        <div class="star d-block w-100 text-left mt-0">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star-disable.png" alt="star" class="w15 me-1 float-left me-2">
                                        </div>
                                        <div class="clearfix"></div>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                        <div class="clearfix"></div>
                                        <span class="font-lg fw-700 mt-0 pe-3 ls-2 lh-32 d-inline-block text-success float-left"><span class="font-xsssss">$</span> 320 <span class="font-xsssss text-grey-500">/ mo</span> </span>
                                        <a href="#" class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                            @foreach ($actes as $acte)
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="card d-block w-100 border-0 mb-3 shadow-xss bg-white rounded-3 p-4"
                                        style="padding-left: 120px !important;">
                                        <img src="public/images/{{ $acte->image }}" width="100px" class="w-100" alt="Projet Image">
                                        <h4 class="font-xss fw-700 text-grey-900 mb-3 pe-4">{{ $acte->titre }}</h4>
                                        <h5 class="font-xssss mb-2 text-grey-500 fw-600">
                                            <span class="text-grey-900 font-xssss">Categorie : </span>
                                            {{ $acte->categorie }}
                                        </h5>
                                        <h5 class="font-xssss mb-2 text-grey-500 fw-600">
                                            <span class="text-grey-900 font-xssss">Description : </span>
                                            {{ $acte->description }}
                                        </h5>
                                        <h5 class="font-xssss text-grey-500 fw-600 mb-3">
                                            <span class="text-grey-900 font-xssss">Date : </span> {{ $acte->date }}
                                        </h5>
                                        <h5 class="font-xssss text-grey-500 fw-600 mb-3">
                                            <span class="text-grey-900 font-xssss">Heure : </span> {{ $acte->heure }}
                                        </h5>

                                        <h5 class="font-xssss text-grey-500 fw-600 mb-3">
                                            <span class="text-grey-900 font-xssss">Lieu : </span> {{ $acte->lieu }}
                                        </h5>

                                        <div class="flex flex-row">
                                            <a href="{{ route('Acte.edit', ['acteVolontaire' => $acte->id]) }}"
                                                class="btn btn-primary btn-icon"><i
                                                    class="feather-edit-2 font-md text-white"></i></a>
                                            <form action="{{ route('Acte.destroy', ['acteVolontaire' => $acte->id]) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon"><i
                                                        class="feather-trash-2 font-md text-white"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#"
                                    class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Load
                                    More</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- main content -->
@endsection