@extends('frontOffice.menu')
@section('produitDetails')
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
                                                    <h2 class="fw-700 display2-size display2-md-size lh-2  mt-5 " style="color: white;font-family: Montserrat,sans-serif;">Projets Evironnementales</h2>
                                                </div>
                                    </div>
                                </div>

                                <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                    <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4"
                                        id="pills-tab" role="tablist">
                                        <li class="active list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                                href="#navtabs1" data-toggle="tab">Mes projets</a></li>
                                        <li class="list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                                href="#navtabs2" data-toggle="tab">List des Projects</a></li>
                                    </ul>
                                </div>
                                <form class="container" method="POST" action="{{ route('projets.store') }}" enctype="multipart/form-data">
                                @csrf

                            <div class="row">
                                <!-- Champs du formulaire -->
                                <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input type="text" class="form-control" id="titre" name="titre" >
                                    @if ($errors->has('titre'))
                                            <span
                                                class="text-danger">{{ $errors->first('titre') }}</span>
                                    @endif
                                </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
                                    @if ($errors->has('description'))
                                            <span
                                                class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                </div>

                          <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="objectif">Objectif</label>
                                    <input type="text" class="form-control" id="objectif" name="objectif" >
                                    @if ($errors->has('objectif'))
                                            <span   
                                                class="text-danger">{{ $errors->first('objectif') }}</span>
                                    @endif
                                </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="ressources">Ressources</label>
                                    <input type="text" class="form-control" id="ressources" name="ressources" >
                                    @if ($errors->has('ressources'))
                                            <span
                                                class="text-danger">{{ $errors->first('ressources') }}</span>
                                    @endif
                                </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="etat">État</label>
                                    <select name="etat" class="form-select form-control" style="line-height:20px;">
                                                    @foreach(App\Enums\EtatProjetEnum::valuesEtat() as $key=>$value)
                                                        <option value="{{$key}}">{{ $key }}</option>
                                                    @endforeach
                                    </select>
                                    @if ($errors->has('etat'))
                                            <span
                                                class="text-danger">{{ $errors->first('etat') }}</span>
                                    @endif
                                </div>
                                </div>

                                 <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Image de la couverture</label>
                                                     <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="image" id="image" accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml">
                                                     <div id="image-error" class="text-danger"></div>
                                                    @if ($errors->has('image'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('image') }}</span>
                                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary text-white mt-4">Ajouter Projet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imageInput = document.getElementById("image");
            const imageError = document.getElementById("image-error");

            imageInput.addEventListener("change", function() {
                const file = imageInput.files[0];

                // Vérification du format de l'image
                const allowedTypes = ["image/jpeg", "image/png", "image/jpg", "image/gif", "image/svg+xml"];
                if (file && !allowedTypes.includes(file.type)) {
                    imageError.textContent = "Le format de l'image n'est pas pris en charge, utiliser les formats: jpg, png, jpeg, gif, svg";
                    imageInput.value = ""; // Effacer le champ de fichier
                    return;
                }

                // Vérification de la taille de l'image (max 2048 Ko)
                const maxSize = 2048 * 1024; // 2048 Ko en octets
                if (file && file.size > maxSize) {
                    imageError.textContent = "La taille de l'image dépasse la limite autorisée (2 Mo).";
                    imageInput.value = ""; // Effacer le champ de fichier
                    return;
                }

                // Réinitialiser le message d'erreur si tout est conforme
                imageError.textContent = "";
            });
        });
        </script>
        <!-- main content -->
 @endsection
