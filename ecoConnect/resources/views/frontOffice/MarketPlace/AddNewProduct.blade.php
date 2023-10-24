@extends('frontOffice.menu')
@section('AddProduit')
    <x-app-layout>
        <div class="main-content bg-lightblue theme-dark-bg right-chat-active">

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                                <a href="default-settings.html" class="d-inline-block mt-2"><i
                                        class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Create Product</h4>
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
                                <form method="POST" action="{{ route('Produit.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Titre</label>
                                                <input name="titre" type="text" class="form-control">
                                                @if ($errors->has('titre'))
                                                    <span class="text-danger">{{ $errors->first('titre') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Prix</label>
                                                <input name="prix" type="text" class="form-control">
                                                @if ($errors->has('Prix'))
                                                    <span class="text-danger">{{ $errors->first('Prix') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Description</label>
                                                <textarea name="description" type="textarea" class="form-control"></textarea>
                                                @if ($errors->has('description'))
                                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Image de la couverture</label>
                                                <input type="file" name="image"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    placeholder="image" id="image"
                                                    accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml">
                                                <div id="image-error" class="text-danger"></div>
                                                @if ($errors->has('image'))
                                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>





                                    <div class="d-flex justify-content-end">
                                        <div class="">
                                            <button type="button" id="ajouterCollaborateur"
                                                class="bg-green text-white rounded-3 smaller-button"><b>Ajouter
                                                    Collaborateur</b></button>

                                            <style>
                                                .smaller-button {
                                                    padding: 5px 10px;
                                                    /* Adjust the padding values as needed */
                                                    font-size: 12px;
                                                    /* Adjust the font size as needed */
                                                }

                                                .bg-green {
                                                    background-color: green;
                                                    /* Set the background color to green */
                                                }
                                            </style>

                                        </div>
                                    </div>


                                    <div id="collaborateurForm" style="display: none;">
                                        <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Ajouter Collaborateur</h4>
                                        <form method="POST" action="{{ route('collaborateurs.create') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Email</label>
                                                        <input name="email" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Adresse</label>
                                                        <input name="adresse" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Nom</label>
                                                        <input name="nom" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Site Web</label>
                                                        <input name="siteWeb" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end">
                                                <div class="mx-2">
                                                    <button type="button" id="annulerCollaborateur"
                                                        class="bg-secondary text-white rounded-3 smaller-button"><b>Annuler</b></button>
                                                </div>
                                                <div class="">
                                                    <button type="submit"
                                                        class="bg-green text-white rounded-3 smaller-button"><b>Enregistrer
                                                            Collaborateur</b></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>





                                    <div class="d-flex justify-content-end pt-4">
                                        <div class="mx-2">
                                            <a href="#"
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
                        imageError.textContent =
                            "Le format de l'image n'est pas pris en charge, utiliser les formats: jpg, png, jpeg, gif, svg";
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

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const imageInput = document.getElementById("image");
                const imageError = document.getElementById("image-error");
                const collaborateurForm = document.getElementById("collaborateurForm");
                const ajouterCollaborateurButton = document.getElementById("ajouterCollaborateur");

                imageInput.addEventListener("change", function() {
                    // Image validation code here...
                });

                ajouterCollaborateurButton.addEventListener("click", function() {
                    if (collaborateurForm.style.display === "none") {
                        collaborateurForm.style.display = "block";
                    } else {
                        collaborateurForm.style.display = "none";
                    }
                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const collaborateurForm = document.getElementById("collaborateurForm");
                const annulerCollaborateurButton = document.getElementById("annulerCollaborateur");

                annulerCollaborateurButton.addEventListener("click", function() {
                    collaborateurForm.style.display = "none";
                });
            });
        </script>
    @endsection
