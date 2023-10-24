@extends('frontOffice.menu')
@section('produitDetails')
<x-app-layout>
        <div class="main-content bg-white" style=" padding-top: 20px!important;">>
            <div class="middle-sidebar-bottom">
                <div class="container">
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
                                            <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block {{ Request::is('MyProjet') ? 'active' : '' }}"
                                            href="{{ route('MyprojetEnv') }}">Mes projets</a>
                                        </li>
                                        <li class="list-inline-item me-5">
                                            <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block {{ Request::is('projetEnv') ? 'active' : '' }}"
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
                                    <div class="col-lg-4 col-md-6 mt-3">
                                        <div class="card d-block w-100 border-0 mb-3 shadow-xss bg-white rounded-3 p-4">

                                        <a href="{{ route('projet.details', ['id' => $projet->id]) }}">  <img src="/upload/{{ $projet->image }}" width="300px" height="300px" class="card-img" alt="Stony Beach" style="opacity: 0.9;blur:20px"></a>    
                                            <a href="{{ route('projet.details', ['id' => $projet->id]) }}"> <h1 class="font-lg fw-700 mt-2 text-grey-900 mb-3 pe-4">{{ $projet->titre }}</h1></a>    
                                    
                                            <div class="flex flex-row">
                                            <a href="{{ route('modifierProjetEnv', ['id' => $projet->id]) }}" class="btn btn-primary btn-icon"><i class="feather-edit-2 font-md text-white"></i></a>
                                                <form action="{{ route('supprimerProjet', ['id' => $projet->id]) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon bg-danger ml-2"><i class="feather-trash-2 font-md text-white "></i></button>
                                                </form>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <a href="{{ route('tasks.create', $projet) }}" class="btn btn-success text-white">Ajouter Tache</a>
                                            </div>
                                        </div>
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
