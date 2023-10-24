@extends('frontOffice.menu')
@section('UpdateProduit')
    <div class="main-content bg-lightblue theme-dark-bg right-chat-active">
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <div class="middle-wrap">
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                            <a href="{{ route('MesProduits') }}" class="d-inline-block mt-2"><i
                                    class="ti-arrow-left font-sm text-white"></i></a>
                            <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Edit Product</h4>
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
                            <form method="POST" action="{{ route('products.update', $Product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Titre</label>
                                            <input name="titre" type="text" class="form-control"
                                                value="{{ $Product->titre }}">
                                            @if ($errors->has('titre'))
                                            <span class="text-danger">{{ $errors->first('titre') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Prix</label>
                                            <input name="prix" type="text" class="form-control"
                                                value="{{ $Product->prix }}">
                                            @if ($errors->has('prix'))
                                            <span class="text-danger">{{ $errors->first('prix') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Description</label>
                                            <textarea name="description" type="textarea"
                                                class="form-control">{{ $Product->description }}</textarea>
                                            @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
    <div class="col-lg-12 mb-3">
        <div class="form-group">
            <label class="mont-font fw-600 font-xsss">Image</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            <div id="image-error" class="text-danger"></div>
            @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif
        </div>
    </div>
</div>


<div class="form-group">
    <label for="collaborateur_id" class="mont-font fw-600 font-xsss">Sélectionner un Collaborateur</label>
    <select name="collaborateur_id" id="collaborateur_id" class="form-control">
        <option value="">None</option>
        @foreach ($collaborateurs as $collaborateur)
            <option value="{{ $collaborateur->id }}" @if($Product->collaborateur_id == $collaborateur->id) selected @endif>
                {{ $collaborateur->nom }}
            </option>
        @endforeach
    </select>
</div>





                                <div class="d-flex justify-content-end">
                                    <div class="mx-2">
                                        <a href="{{ route('MesProduits') }}"
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
@endsection
