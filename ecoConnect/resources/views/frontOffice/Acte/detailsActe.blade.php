@extends('frontOffice.menu')
@section('acteVolontaire')
<x-app-layout>
<div class="main-content right-chat-active">

    <div class="middle-sidebar-bottom ps-0 pe-0">
        <div class="middle-sidebar-left pe-0">
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-lg-12">
                    <div class="product- owl-nav-link owl-carousel owl-theme">
                        <div class="card-image w-100">
                            <img src="public/images/{{ $acte->image }}" alt="event" class="w-100 rounded-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-lg-12">
                    <div class="card d-block mt-4 border-0 shadow-xss bg-white p-lg-5 p-4">
                        <h2 class="fw-700 font-lg mt-3 mb-2">{{ $acte->titre }}</h2>

                        <p class="font-xsss fw-500 text-grey-500 lh-30 pe-5 mt-3 me-5">{{ $acte->description }}</p>

                        <div class="clearfix"></div>
                        <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-target text-grey-500 me-1"></i> {{$acte->categorie}}</h5>
                        <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-location-pin text-grey-500 me-1"></i> {{$acte->lieu}}</h5>
                        <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-time text-grey-500 me-1"></i> {{$acte->heure}}</h5>
                        <div class="clearfix"></div>

                        <a href="#" class="btn-round-lg ms-3 d-inline-block rounded-3 bg-greylight"><i class="feather-share-2 font-sm text-grey-700"></i></a>
                        <a href="#" class="btn-round-lg ms-2 d-inline-block rounded-3 bg-danger"><i class="feather-bookmark font-sm text-white"></i> </a>
                        <a href="#" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-3 d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">Participer</a>
                        <a href="#" class="bg-success border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-3 d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">Don</a>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>


        <!-- main content -->
 <!-- main content -->
</x-app-layout>
 @endsection
