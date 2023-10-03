@extends('frontOffice.menu')
@section('produitDetails')
        <div class="main-content bg-white">
            <div class="middle-sidebar-bottom">
                <div class="container pe-0">
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 ">
                                     <img src="{{ Vite::asset('resources/assetsFront/images/pl8.png') }}" alt="icon">
                                </div>
                                <div class="col-lg-6 col-md-12 pad-top-lg-200 pad-bottom-lg-100 pad-top-100 pad-bottom-75 ps-md--5">
                                    <h4 class="text-danger font-xssss fw-700 ls-2">DNMX</h4>
                                    <h2 class="fw-700 text-grey-900 display1-size lh-3 porduct-title display2-md-size"> Camisole with Adjustable Straps</h2>
                                    <div class="star d-block w-100 text-left">
                                        <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                        <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                        <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                        <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                        <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                    </div>
                                    <p class="review-link font-xssss fw-500 text-grey-500 lh-3"> 2 customer review</p>
                                    <div class="clearfix"></div>
                                    <p class="font-xsss fw-400 text-grey-500 lh-30 pe-5 mt-3 me-5">ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>

                                    <h6 class="display2-size fw-700 text-current ls-2 mb-2"><span class="font-xl">$</span>449 <span class="font-xs text-grey-500" style="text-decoration: line-through;">$699</span></h6>
                                    <div class="timer bg-white mt-2 mb-0 w350 rounded-3"><div class="time-count"><span class="text-time">00</span> <span class="text-day">Day</span></div> <div class="time-count"><span class="text-time">10</span> <span class="text-day">Hours</span> </div> <div class="time-count"><span class="text-time">49</span> <span class="text-day">Min</span> </div> <div class="time-count"><span class="text-time">11</span> <span class="text-day">Sec</span> </div> </div>
                                    <div class="clearfix"></div>
                                    <form action="#" class="form--action mt-4 mb-3">
                                        <div class="product-action flex-row align-items-center">
                                            <div class="quantity me-3">
                                                <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                            </div>

                                            <a href="#" class="add-to-cart bg-dark text-white fw-700 ps-lg-5 pe-lg-5 text-uppercase font-xssss float-left border-dark border rounded-3 border-size-md d-inline-block mt-0 p-3 text-center ls-3">Add to cart</a>
                                            <a href="#" class="btn-round-xl alert-dark text-white d-inline-block mt-0 ms-4 float-left"><i class="ti-heart font-sm"></i></a>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                    <ul class="product-feature-list mt-5">
                                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left"><b class="text-grey-900"> Category : </b>Furniture</li>
                                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left">Straight fit</li>
                                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left"><b class="text-grey-900">SKU : </b> REF. LA-107</li>
                                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left">Dry clean</li>
                                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left"><b class="text-grey-900">Tags : </b>Design, Toys</li>
                                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left">Cutton shirt</li>
                                    </ul>
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
