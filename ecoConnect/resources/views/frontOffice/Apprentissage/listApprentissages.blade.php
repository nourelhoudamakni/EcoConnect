@extends('frontOffice.menu')
@section('listApprentissages')
        <!-- main content -->
        <div class="main-content bg-white">
            <div class="middle-sidebar-bottom">
                <div class="container pe-0">
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <div class="card " >
                                        <img  src="{{ Vite::asset('resources/assetsFront/images/projetEnv2.jpg') }}" class="card-img" alt="Stony Beach" style="opacity: 0.9;blur:20px" >
                                                <div class="card-img-overlay text-center" >
                                                    <h2 class="fw-700 display2-size display2-md-size lh-2  mt-5 " style="color: white;font-family: Montserrat,sans-serif;">Éducation à l'environnement</h2>

                                                </div>

                                    </div>
                                </div>



                                <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                    <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4"
                                        id="pills-tab" role="tablist">
                                        <li class="active list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                                href="#navtabs1" data-toggle="tab">Liste des contenus éducatives</a></li>
                                        <li class="list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                                href="#navtabs2" data-toggle="tab">Mes contenus éducatives</a></li>

                                    </ul>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <h4 class="float-left font-xssss fw-700 text-grey-500 text-uppercase ls-3 mt-2 pt-1">32 Product found</h4>
                                    <select class="searchCat float-right sort"> <option value="">Default Sorting</option><option value="151781441596 ">Fashion</option><option value="139119624252 ">- Men</option><option value="139118313532 ">- Women</option><option value="139360141372 ">Electronics</option><option value="152401903676 ">Home &amp; Garden</option><option value="138866720828 ">- Decor</option><option value="138866917436 ">- Lighting</option></select>
                                </div>
                             @foreach ($educations as $educ)
                             <div class="col-lg-4 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">{{ $educ->categorie }}</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="default-hotel-details.html" class="position-relative d-block"><img src="/upload/{{ $educ->image }}"alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <h4 class="font-xss fw-700 text-grey-900 mb-3 pe-4">Python Developer <span class="font-xssss fw-500 text-grey-500 ms-4">(3 days ago)</span> </h4>
                                        <h5 class="font-xssss mb-2 text-grey-500 fw-600"><span class="text-grey-900 font-xssss">Location : </span> London, United Kingdom</h5>
                                        <h5 class="font-xssss mb-2 text-grey-500 fw-600"><span class="text-grey-900 font-xssss">Employment : </span> Part Time</h5>
                                        <h5 class="font-xssss text-grey-500 fw-600 mb-3"><span class="text-grey-900 font-xssss">Salary : </span> 12000 -45000</h5>
                                        <h6 class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2">UX Design</h6>
                                        <h6 class="d-inline-block p-2 text-warning alert-warning fw-600 font-xssss rounded-3 me-2">Andriod</h6>
                                        <h6 class="d-inline-block p-2 text-secondary alert-secondary fw-600 font-xssss rounded-3 me-2">Developer</h6>
                                        <a href="#" class="position-absolute bottom-15 mb-3 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                        <a href="{{ route('details.contenu', ['id' => $educ->id]) }} class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- main content -->
                                <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#" class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Load More</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- main content -->
 @endsection
