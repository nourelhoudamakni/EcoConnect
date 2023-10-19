@extends('frontOffice.menu')
@section('contenuDetails')
        <div class="main-content bg-white">
            <div class="middle-sidebar-bottom">
                <div class="container pe-0">
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <div class="row">
                                <div class="card d-block mt-4 border-0 shadow-xss bg-white p-lg-5 p-4">
                                    <h6 class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2">{{ $education->categorie }}</h6>
                                    <h2 class="fw-700 font-lg mt-3 mb-2">{{ $education->titre }}</h2>
                                    <div class=" " style="font-family: Montserrat,sans-serif"> {!! $education->description !!}</div>

                                    {{-- <div class="clearfix"></div>
                                    <div class="star d-block w-100 text-left mt-2">
                                        <img src="images/star.png" alt="star" class="w15 float-left">
                                        <img src="images/star.png" alt="star" class="w15 float-left">
                                        <img src="images/star.png" alt="star" class="w15 float-left">
                                        <img src="images/star.png" alt="star" class="w15 float-left">
                                        <img src="images/star-disable.png" alt="star" class="w15 float-left me-2">
                                    </div>
                                    <p class="review-link font-xssss fw-600 text-grey-500 lh-3 mb-0">(456 ratings ) 2 customer review</p>
                                    <div class="clearfix"></div>
                                    <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                    <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                    <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                    <div class="clearfix"></div>

                                    <a href="#" class="btn-round-lg ms-3 d-inline-block rounded-3 bg-greylight"><i class="feather-share-2 font-sm text-grey-700"></i></a>
                                    <a href="#" class="btn-round-lg ms-2 d-inline-block rounded-3 bg-danger"><i class="feather-bookmark font-sm text-white"></i> </a>
                                    <a href="#" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-3 d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">BOOK NOW</a>
                                </div> --}}
                            </div>
                            <div class="row">
                                    <div class="product-slider owl-nav-link owl-carousel owl-theme">
                                        <div class="owl-items ">

                                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">Featured</span>
                                                    <div class="card-image w-100 mb-3">
                                                        <a href="default-hotel-details.html" class="position-relative d-block"><img src="{{ Vite::asset('resources/assetsFront/images/projetEnv2.jpg') }}" alt="image" class="w-100"></a>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="default-hotel-details.html" class="text-dark text-grey-900">Crown Retreat Hotel</a></h4>
                                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                                    </div>
                                                </div>

                                        </div>

                                        <div class="owl-items">
                                                    <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                                        <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">Featured</span>
                                                        <div class="card-image w-100 mb-3">
                                                            <a href="default-hotel-details.html" class="position-relative d-block"><img src="{{ Vite::asset('resources/assetsFront/images/projetEnv2.jpg') }}" alt="image" class="w-100"></a>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                                            <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="default-hotel-details.html" class="text-dark text-grey-900">Crown Retreat Hotel</a></h4>
                                                            <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- main content -->
 <!-- main content -->
 @endsection
