@extends('frontOffice.menu')
@section('produitDetails')
<x-app-layout>
        <div class="main-content bg-white" style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom">
                <div class="container ">
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <div class="card " >
                                        <img  src="{{ Vite::asset('resources/assetsFront/images/projetEnv2.jpg') }}" class="card-img" alt="Stony Beach" style="opacity: 0.9;blur:20px" >
                                                <div class="card-img-overlay text-center" >
                                                    <h2 class="fw-700 display2-size display2-md-size lh-2  mt-5 " style="color: white;font-family: Montserrat,sans-serif;">Projets Evironnementales</h2>
                                                </div>
                                    </div>
                                </div>

                                <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                    <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4" id="pills-tab" role="tablist">
                                        <li class="list-inline-item me-5">
                                            <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block {{ Request::is('My-Projets-Environnementales') ? 'active' : '' }}"
                                                href="{{ route('MyprojetEnv') }}">Mes projets</a>
                                        </li>
                                        <li class="list-inline-item me-5">
                                            <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block {{ Request::is('My-Projets-Environnementales') ? 'active' : '' }}"
                                                href="{{ route('projetEnv') }}">Liste des projets</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="col-lg-12 mt-3">
                                    <a href="{{ route('addProjetEnv') }}" class="btn btn-primary text-white">Ajouter Projet</a>
                                </div>
                                @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                                Session::forget('success');
                                            @endphp
                                        </div>
                                    @endif
                               @foreach($projets as $projet)
                                    <div class="col-md-3 col-xss-6 pe-2 ps-4 mt-5">
                                        <a href="{{ route('projet.details', ['id' => $projet->id]) }}" class="text-decoration-none">
                                            <div class="card  border-0 shadow">
                                                <div class="position-relative">
                                                    <div class="image-overlay">
                                                    <img src="/upload/{{ $projet->image }}" class="card-img-top" alt="Projet Image" width="200px" height="200px">
                                                    </div>
                                                    <div class="avatar-group position-absolute top-0 start-0 mt-3 ms-3">
                                                        <img src="{{ asset('storage/' . $projet->user->profile_photo_path) }}" alt="User Avatar" class="avatar  rounded-circle border border-white h-20">
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <h5 class="card-title fw-bold text-dark">{{ $projet->titre }}</h5>
                                                    <p class="card-text text-muted">{{ $projet->user->firstName }} {{ $projet->user->lastName }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#" class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Load More</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- main content -->
    </x-app-layout>
 @endsection
