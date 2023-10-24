@extends('frontOffice.menu')
@section('UpdateCollaborateur')
    <div class="main-content bg-lightblue theme-dark-bg right-chat-active">
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <div class="middle-wrap">
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                            <a href="{{ route('collaborateurs') }}" class="d-inline-block mt-2"><i
                                    class="ti-arrow-left font-sm text-white"></i></a>
                            <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Edit Collaborateur</h4>
                        </div>
                        <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            <div class="row justify-content-center">

                            </div>
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                            @endif
                            <form method="POST" action="{{ route('collaborateurs.update', $Collaborateur->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Nom</label>
                                            <input name="nom" type="text" class="form-control"
                                                value="{{ $Collaborateur->nom }}">
                                            @if ($errors->has('nom'))
                                            <span class="text-danger">{{ $errors->first('nom') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Adresse</label>
                                            <input name="adresse" type="text" class="form-control"
                                                value="{{ $Collaborateur->adresse }}">
                                            @if ($errors->has('adresse'))
                                            <span class="text-danger">{{ $errors->first('adresse') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Email</label>
                                            <textarea name="email" type="text"
                                                class="form-control">{{ $Collaborateur->email }}</textarea>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Site Web</label>
                                            <textarea name="siteWeb" type="text"
                                                class="form-control">{{ $Collaborateur->siteWeb }}</textarea>
                                                @if ($errors->has('siteWeb'))
    <span class="text-danger">{{ $errors->first('siteWeb') }}</span>
@endif

                                        </div>
                                    </div>
                                </div>







                                <div class="d-flex justify-content-end">
                                    <div class="mx-2">
                                        <a href="{{ route('collaborateurs') }}"
                                            class="bg-secondary text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Annuler</a>
                                    </div>
                                    <div class="">
                                        <button type="submit"
                                            class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
@endsection
