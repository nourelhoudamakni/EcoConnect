@extends('frontOffice.menu')
@section('ProduitDetails')
    <x-app-layout>
        <style>
            .custom-textarea textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
                font-size: 16px;
                line-height: 1.5;
                height: 50%;
            }
        </style>
        <div class="main-content " style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom ">
                <div class="container">
                    <div class="row">

                    <div class="col-xl-6 col-xxl-6 col-lg-6">
    <div class="card d-block h-100 border-0 shadow-xss bg-white p-lg-5 p-4">
        <h2 class="fw-700 font-xl mt-3 mb-2">{{ $prod->titre }}</h2>
        <p class="font-lg fw-500 text-grey-500 lh-36 pe-5 mt-3 me-5">{{ $prod->description }}</p>
        <div class="clearfix"></div>
        <h5 class="mt-4 mb-4 d-inline-block font-lg fw-600 text-grey-500"><i
            class="btn-round-sm bg-greylight ti-money text-grey-500 me-1"></i>
            {{ $prod->prix }}
        </h5>
    </div>
</div>

                        <div class="col-xl-6 col-xxl-6 col-lg-6">
                            <div class="">
                                <div class="card-image w-100">
                                    <img src="http://127.0.0.1:8000/public/images/{{ $prod->image }}" alt="event"
                                        class="w-100 rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>



                    


                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- main content -->
    </x-app-layout>
@endsection