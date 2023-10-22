@extends('frontOffice.menu')
@section('MesacteVolontaire')
<x-app-layout>
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
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block  "
                                            href="{{ route('Acte.show') }}" data-toggle="tab">Liste des actes</a></li>
                                    <li class="active list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                            href="{{ route('MesActe.show') }}" data-toggle="tab">Mes actes</a></li>

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
                            @foreach ($actes as $acte)
                                <div class="col-lg-4 col-md-6 pe-2 ps-2">
                                    <a href="{{ route('Acte.details', $acte->id) }}">
                                    <div class="card p-3 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden ">
                                        <div class="card-image w-100">
                                            <img src="public/images/{{ $acte->image }}" alt="event"
                                                class="w-100 rounded-3">
                                        </div>
                                        <div class="mt-2">
                                            <h6
                                                class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2">
                                                {{ $acte->categorie }}</h6>
                                        </div>

                                        <div class="card-body d-flex ps-0 pe-0 pb-0">

                                            <div class="bg-greylight me-3 p-3 border-light-md rounded-xxl theme-dark-bg">
                                                <h4 class="fw-700 font-lg ls-3 text-grey-900 mb-0"><span
                                                        class="ls-3 d-block font-xsss text-grey-500 fw-500">FEB</span>22
                                                </h4>
                                            </div>
                                            <h2 class="fw-700 lh-3 font-xss">{{ $acte->titre }}

                                                <span class="d-flex font-xssss fw-500 mt-2 lh-3 text-grey-500"> <i
                                                        class="ti-location-pin me-1"></i>{{ $acte->lieu }} </span>
                                                <span class="d-flex font-xssss fw-500 mt-2 lh-3 text-grey-500"> <i
                                                        class="ti-time me-1"></i>{{ $acte->heure }} </span>
                                                <span
                                                    class="d-flex font-xssss fw-500 mt-2 lh-3 text-grey-500  text-truncate">
                                                    <i class="ti-pencil me-1"></i>{{ $acte->description }} </span>

                                            </h2>
                                        </div>



                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('Acte.edit', ['acteVolontaire' => $acte->id]) }}"
                                                    class="btn btn-primary btn-icon">ajouter don</a>
                                                <a href="{{ route('Acte.edit', ['acteVolontaire' => $acte->id]) }}"
                                                    class="btn btn-primary btn-icon mx-1"><i
                                                        class="feather-edit-2 font-md text-white"></i></a>
                                                <form action="{{ route('Acte.destroy', ['acteVolontaire' => $acte->id]) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-icon mx-2"><i
                                                            class="feather-trash-2 font-md text-white"></i></button>
                                                </form>
                                            </div>


                                    </div>
                                    </a>
                                </div>
                            @endforeach
                            {{-- @foreach ($actes as $acte)
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
                            @endforeach --}}

                            <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#"
                                    class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Load
                                    More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- main content -->
</x-app-layout>
@endsection
