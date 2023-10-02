@extends('frontOffice.menu')
@section('acteVolontaire')
    <div class="main-content bg-lightblue theme-dark-bg right-chat-active">

        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <div class="middle-wrap">
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                            <i  class="ti-arrow-left font-sm text-white"></i>
                            <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Edit Acte Volontaire</h4>
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
                            <form method="POST" action="{{ route('Acte.update', $acteVolontaire->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Categorie</label>
                                            <select name="categorie" class="form-select form-control"
                                                style="line-height:20px;">
                                                @foreach (App\Enums\CategorieActeEnum::valuesCategories() as $key => $value)
                                                    <option value="{{ $key }}" {{ $key == $acteVolontaire->categorie ? 'selected' : '' }}>
                                                        {{ $acteVolontaire->categorie    }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('categorie'))
                                                <span class="text-danger">{{ $errors->first('categorie') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Titre</label>
                                            <input name="titre" type="text" class="form-control"
                                                value="{{ $acteVolontaire->titre }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Description</label>
                                            <textarea name="description" type="textarea"
                                                class="form-control">{{ $acteVolontaire->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Images</label>
                                            <input type="file" name="images[]" id="image" multiple
                                                class="form-control @error('images') is-invalid @enderror">
                                            <div id="image-error" class="text-danger"></div>
                                            @if ($errors->has('images'))
                                                <span class="text-danger">{{ $errors->first('images') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Lieu</label>
                                            <input name="lieu" type="text" class="form-control"
                                                value="{{ $acteVolontaire->lieu }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Date</label>
                                            <input type="text" name="date"
                                                value="{{ date("d-m-Y", strtotime($acteVolontaire->date)) }}" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Heure</label>
                                            <input name="heure" type="time" class="form-control"
                                                value="{{ $acteVolontaire->heure }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="mx-2">

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

