@extends('frontOffice.menu')
@section('produitDetails')
    <div class="main-content bg-white">
        <div class="middle-sidebar-bottom">
            <div class="container pe-0">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <img src="{{ Vite::asset('resources/assetsFront/images/projetEnv2.jpg') }}"
                                        class="card-img" alt="Stony Beach" style="opacity: 0.9; blur:20px">
                                </div>
                            </div>
                            <form class="container" method="POST" action="{{ route('tasks.store', $project) }}"  >
                                @csrf
                                <div class="row">
                                    <!-- Champs du formulaire -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="titre">Titre</label>
                                            <input type="text" class="form-control" id="titre" name="titre">
                                            @if ($errors->has('titre'))
                                                <span class="text-danger">{{ $errors->first('titre') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description"
                                            ></textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="date_debut">Date Debut</label>
                                            <input type="date" class="form-control" id="date_debut" name="date_debut">
                                            @if ($errors->has('date_debut'))
                                                <span class="text-danger">{{ $errors->first('date_debut') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="date_fin">Date Fin</label>
                                            <input type="date" class="form-control" id="date_fin" name="date_fin">
                                            @if ($errors->has('date_fin'))
                                                <span class="text-danger">{{ $errors->first('date_fin') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary text-white mt-4">Ajouter Tache</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection