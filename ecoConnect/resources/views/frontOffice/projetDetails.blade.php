@extends('frontOffice.menu')
@section('contenuDetails')
<x-app-layout>
<div class="main-content bg-white" style=" padding-top: 20px!important;">
        <div class="middle-sidebar-bottom">
        <div class="container">
            <div class="row">
            <button class="bg-current border-0 mb-2 rounded-3" style="width: 80px;">
                <a href="{{ route('projetEnv') }}" class="d-inline-block my-2">
                    <i class="ti-arrow-left font-sm text-white"></i>
                </a>
            </button>
            <div>

           
            <div class="card d-block  mt-2 border-0 shadow-xss bg-white p-lg-5 p-4">
                 <div class="row ">
                <div class="col-md-6">
                    <img src="/upload/{{ $projet->image }}" width="700px" height="800px" alt="Projet Image">
                </div>
                <div class="col-md-6">
                    <div class=" border-0 p-lg-5 p-4">
                        <h1 class="fw-700 font-xl ">{{ $projet->titre }}</h1>
                        <h6 class="d-inline-block p-2 mt-3 text-success alert-success fw-600 font-xssss rounded-3 me-2">{{ $projet->etat }}</h6>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Description :</h4>
                            <h4 class="fw-300 font-sm mt-3 mb-2 mx-2">{{ $projet->description }}</h4>
                        </div>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Objectif :</h4>
                            <h4 class="fw-300 font-sm mt-3 mb-2 mx-2">{{ $projet->objectif }}</h4>
                        </div>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Ressources: </h4>
                            <h4 class="fw-300 font-sm mt-3 mb-2 mx-2">{{ $projet->ressources }}</h4>
                        </div>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Crée :</h4>
                            <h4 class="fw-300 font-sm mt-3 mb-2 mx-2">{{ $projet->created_at }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="card d-block  border-0 shadow-xss bg-white p-lg-5 p-4">
            <div class="row ">
                <div class="col-md-12 my-5">
                    <div>
                        <h3 class="fw-700 font-lg">Taches:</h3>
                        @if ($projet->user_id === auth()->user()->id)
                            <button class="bg-current border-0 mb-2 rounded-3" style="width: 120px;">
                                <a href="{{ route('tasks.create', $projet) }}" class="d-inline-block my-2 text-white">Ajouter Tache</a>
                            </button>
                        @endif
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tache</th>
                                <th>Description</th>
                                <th>Date Debut</th>
                                <th>Date Fin</th>
                                @if ($projet->user_id === auth()->user()->id)
                                <th>Action</th>
                                 @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->titre }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->date_debut }}</td>
                                    <td>{{ $task->date_fin }}</td>
                                    <td>
                                        @if ($projet->user_id === auth()->user()->id)
                                            <a href="{{ route('tasks.edit', ['taskId' => $task->id]) }}" class="btn btn-primary">modifier</a>
                                            <form method="POST" action="{{ route('tasks.delete', ['taskId' => $task->id]) }}" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn bg-red-600  btn-plus text-white">Supprimer</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
    </div>
</div>
</div>
</x-app-layout>
@endsection