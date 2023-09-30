@extends('frontOffice.menu')
@section('acteVolontaire')
   <!-- main content -->
     <div class="main-content bg-white">
        <div class="middle-sidebar-bottom">
            <div class="container pe-0">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-12" >
                                <div class="card " >
                                    <img  src="{{ Vite::asset('resources/assetsFront/images/actVolontaire.jpg') }}" class="card-img" alt="Stony Beach" style="opacity: 0.9;blur:20px" >
                                            <div class="card-img-overlay text-center" >
                                                <h2 class="fw-700 display2-size display2-md-size lh-2  mt-5 " style="color: white;font-family: Montserrat,sans-serif;">Actes Volontaires</h2>

                                            </div>

                                </div>
                            </div>
                            <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4"
                                    id="pills-tab" role="tablist">
                                    <li class="active list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                            href="#navtabs1" data-toggle="tab">Liste des actes</a></li>
                                    <li class="list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                            href="#navtabs2" data-toggle="tab">Mes actes</a></li>

                                </ul>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <select class="searchCat float-right sort"> <option value="">Default Sorting</option><option value="151781441596 ">Fashion</option><option value="139119624252 ">- Men</option><option value="139118313532 ">- Women</option><option value="139360141372 ">Electronics</option><option value="152401903676 ">Home &amp; Garden</option><option value="138866720828 ">- Decor</option><option value="138866917436 ">- Lighting</option></select>
                            </div>

                            <div class="col-lg-4 col-md-6 pe-2 ps-2">
                                <div class="card p-3 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden ">
                                    <div class="card-image w-100">
                                        <img src="{{ Vite::asset('resources/assetsFront/images/e-1.jpg') }}"  alt="event" class="w-100 rounded-3">
                                    </div>
                                    <div class="card-body d-flex ps-0 pe-0 pb-0">
                                        <div class="bg-greylight me-3 p-3 border-light-md rounded-xxl theme-dark-bg"><h4 class="fw-700 font-lg ls-3 text-grey-900 mb-0"><span class="ls-3 d-block font-xsss text-grey-500 fw-500">FEB</span>22</h4></div>
                                        <h2 class="fw-700 lh-3 font-xss">Right here Right Now -  Comedy
                                            <span class="d-flex font-xssss fw-500 mt-2 lh-3 text-grey-500"> <i class="ti-location-pin me-1"></i> Goa, Mumbai </span>
                                        </h2>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="memberlist mt-4 mb-2 ms-0 d-inline-block">
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-6.png') }}"  alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-7.png') }}"  alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}"  alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-3.png') }}"  alt="user" class="w30 d-inline-block"></a></li>
                                            <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        </ul>
                                        <a href="#" class="font-xsssss fw-700 ps-3 pe-3 lh-32 float-right mt-4 text-uppercase rounded-3 ls-2 bg-success d-inline-block text-white me-1">APPLY</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pe-2 ps-2">
                                <div class="card p-3 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden ">
                                    <div class="card-image w-100">
                                        <img  src="{{ Vite::asset('resources/assetsFront/images/e-2.jpg') }}" alt="event" class="w-100 rounded-3">
                                    </div>
                                    <div class="card-body d-flex ps-0 pe-0 pb-0">
                                        <div class="bg-greylight me-3 p-3 border-light-md rounded-xxl theme-dark-bg"><h4 class="fw-700 font-lg ls-3 text-grey-900 mb-0"><span class="ls-3 d-block font-xsss text-grey-500 fw-500">FEB</span>22</h4></div>
                                        <h2 class="fw-700 lh-3 font-xss">Right here Right Now -  Comedy
                                            <span class="d-flex font-xssss fw-500 mt-2 lh-3 text-grey-500"> <i class="ti-location-pin me-1"></i> Goa, Mumbai </span>
                                        </h2>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="memberlist mt-4 mb-2 ms-0 d-inline-block">
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-6.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-7.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-3.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        </ul>
                                        <a href="#" class="font-xsssss fw-700 ps-3 pe-3 lh-32 float-right mt-4 text-uppercase rounded-3 ls-2 bg-success d-inline-block text-white me-1">APPLY</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pe-2 ps-2">
                                <div class="card p-3 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden ">
                                    <div class="card-image w-100">
                                        <img src="{{ Vite::asset('resources/assetsFront/images/e-3.jpg') }}"  alt="event" class="w-100 rounded-3">
                                    </div>
                                    <div class="card-body d-flex ps-0 pe-0 pb-0">
                                        <div class="bg-greylight me-3 p-3 border-light-md rounded-xxl theme-dark-bg"><h4 class="fw-700 font-lg ls-3 text-grey-900 mb-0"><span class="ls-3 d-block font-xsss text-grey-500 fw-500">FEB</span>22</h4></div>
                                        <h2 class="fw-700 lh-3 font-xss">Right here Right Now -  Comedy
                                            <span class="d-flex font-xssss fw-500 mt-2 lh-3 text-grey-500"> <i class="ti-location-pin me-1"></i> Goa, Mumbai </span>
                                        </h2>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="memberlist mt-4 mb-2 ms-0 d-inline-block">
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-6.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-7.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img  src="{{ Vite::asset('resources/assetsFront/images/user-3.png') }}" alt="user" class="w30 d-inline-block"></a></li>
                                            <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        </ul>
                                        <a href="#" class="font-xsssss fw-700 ps-3 pe-3 lh-32 float-right mt-4 text-uppercase rounded-3 ls-2 bg-success d-inline-block text-white me-1">APPLY</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#" class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Load More</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- main content -->
    @endsection
