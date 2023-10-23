@extends('frontOffice.menu')
@section('contenuDetails')
    <div class="main-content bg-white">
        <div class="container">
            <button class="bg-current border-0 mb-2 rounded-3" style="width: 80px;">
                <a href="{{ route('projetEnv') }}" class="d-inline-block my-2">
                    <i class="ti-arrow-left font-sm text-white"></i>
                </a>
            </button>
            <div class="row shadow-xss bg-white">
                <div class="col-md-6">
                    <img src="/upload/{{ $projet->image }}" width="500px" height="500px" alt="Projet Image">
                </div>
                <div class="col-md-6">
                    <div class="mt-4 border-0 p-lg-5 p-4">
                        <h1 class="fw-700 font-xl mt-3 mb-5">{{ $projet->titre }}</h1>
                        <h6 class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2">{{ $projet->etat }}</h6>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Description:</h4>
                            <h4 class="fw-300 font-lg mt-3 mb-2 mx-2">{{ $projet->description }}</h4>
                        </div>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Objectif:</h4>
                            <h4 class="fw-300 font-lg mt-3 mb-2 mx-2">{{ $projet->objectif }}</h4>
                        </div>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Ressources:</h4>
                            <h4 class="fw-300 font-lg mt-3 mb-2 mx-2">{{ $projet->ressources }}</h4>
                        </div>
                        <div class="d-flex flex-col">
                            <h4 class="fw-500 font-lg mt-3 mb-2">Created At:</h4>
                            <h4 class="fw-300 font-lg mt-3 mb-2 mx-2">{{ $projet->created_at }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 shadow-xss bg-white">
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
                                <th>Task Name</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
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
                                            <a href="{{ route('tasks.edit', ['taskId' => $task->id]) }}" class="btn btn-primary">Edit</a>
                                            <form method="POST" action="{{ route('tasks.delete', ['taskId' => $task->id]) }}" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection