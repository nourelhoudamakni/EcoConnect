@extends('frontOffice.menu')
@section('EditBlog')
<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sociala - Social Network App HTML Template </title>

    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/feather.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/style.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/emoji.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/lightbox.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />
    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
            line-height: 40px;
            border: 2px #eee solid;
        }
    </style>

</head>

<body class="color-theme-blue mont-font">
    <div class="main-content "  style=" padding-top: 20px!important;">
        <div class="middle-sidebar-bottom " >
            <div class="container">
                <div class="row">
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                                <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                                    <a href="default-settings.html" class="d-inline-block mt-2"><i
                                            class="ti-arrow-left font-sm text-white"></i></a>
                                </div>
                                <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                                    <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Thématique</label>
                                                <select name="categorie" class="form-select form-control" style="line-height:20px;">
                                                    @foreach(App\Enums\CategorieEducationEnum::valuesCategories() as $key=>$value)
                                                        <option value="{{ $key }}" {{ $blog->categorie === $key ? 'selected' : '' }}>
                                                            {{ $key }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('categorie'))
                                                <span
                                                    class="text-danger">{{ $errors->first('categorie') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Titre</label>
                                                    <input type="text" class="form-control" name="titre" value="{{ $blog->titre }}">
                                                    @if ($errors->has('titre'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('titre') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Image de la couverture</label>
                                                     <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="image" id="image" accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml">
                                                     <img src="/upload/{{ $blog->image }}" width="300px" class="mt-2">
                                                     <div id="image-error" class="text-danger" ></div>
                                                    @if ($errors->has('image'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('image') }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Description</label>
                                                    <textarea class="form-control " name="description" id="file-picker" >{!! $blog->description !!}</textarea>
                                                    @if ($errors->has('description'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('description') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Mots clés</label>
                                                    <input class="form-control" type="text" data-role="tagsinput" name="tags" value="{{ implode(', ', $tags) }}">
                                                    @if ($errors->has('tags'))
                                                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="mx-2">
                                                <a href="#"
                                                    class="bg-secondary text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Annuler</a>
                                            </div>
                                            <div class="">
                                                <button type="submit"
                                                    class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Enregistrer</button>
                                            </div>
                                        </div>

                                </div>

                                </form>

                            </div>
                        </div>







                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="{{ Vite::asset('resources/assetsFront/js/plugin.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsFront/js/lightbox.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsFront/js/scripts.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsFront/js/countdown.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({

            selector: 'textarea#file-picker',
            height: 500,

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>

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
</body>
</html>
</x-app-layout>
@endsection
