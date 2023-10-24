@extends('frontOffice.menu')
@section('accueil')
    <x-app-layout>
        <!-- Content -->
        <div class="main-content " style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <!-- loader wrapper -->
                            <div class="preloader-wrap p-3">
                                <div class="box shimmer">
                                    <div class="lines">
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                    </div>
                                </div>
                                <div class="box shimmer mb-3">
                                    <div class="lines">
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                    </div>
                                </div>
                                <div class="box shimmer">
                                    <div class="lines">
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                        <div class="line s_shimmer"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- loader wrapper -->
                            <div class="row feed-body">
                                <div class="col-xl-8 col-xxl-9 col-lg-10">


                                    <div
                                        class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                                        <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                                            <div class="item">
                                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                                    class="card w125 h200 d-block border-0 shadow-none rounded-xxxl bg-dark overflow-hidden mb-3 mt-3">
                                                    <div
                                                        class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                        <a href="#">
                                                            <span class="btn-round-lg bg-white"><i
                                                                    class="feather-plus font-lg"></i></span>
                                                            <div class="clearfix"></div>
                                                            <h4
                                                                class="fw-700 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                                Add Story </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                                    class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                                    style="background-image: url(images/s-1.jpg);">
                                                    <div
                                                        class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                        <a href="#">
                                                            <figure
                                                                class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                                <img src="{{ Vite::asset('resources/assetsFront/images/user-11.png') }}"
                                                                    alt="image"
                                                                    class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                            </figure>
                                                            <div class="clearfix"></div>
                                                            <h4
                                                                class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                                Victor Exrixon </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                                    class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                                    style="background-image: url(images/s-2.jpg);">
                                                    <div
                                                        class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                        <a href="#">
                                                            <figure
                                                                class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                                <img src="{{ Vite::asset('resources/assetsFront/images/user-12.png') }}"
                                                                    alt="image"
                                                                    class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                            </figure>
                                                            <div class="clearfix"></div>
                                                            <h4
                                                                class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                                Surfiya Zakir </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                                    class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3">
                                                    <video autoplay loop class="float-right w-100">
                                                        <source src="images/s-4.mp4" type="video/mp4">
                                                    </video>
                                                    <div
                                                        class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                        <a href="#">
                                                            <figure
                                                                class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                                <img src="{{ Vite::asset('resources/assetsFront/images/user-9.png') }}"
                                                                    alt="image"
                                                                    class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                            </figure>
                                                            <div class="clearfix"></div>
                                                            <h4
                                                                class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                                Goria Coast </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                                    class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3 me-1">
                                                    <video autoplay loop class="float-right w-100">
                                                        <source src="images/s-3.mp4" type="video/mp4">
                                                    </video>
                                                    <div
                                                        class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                        <a href="#">
                                                            <figure
                                                                class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                                <img src="{{ Vite::asset('resources/assetsFront/images/user-4.png') }}"
                                                                    alt="image"
                                                                    class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                            </figure>
                                                            <div class="clearfix"></div>
                                                            <h4
                                                                class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                                Hurin Seary </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                                    class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                                    style="background-image: url(images/s-5.jpg);">
                                                    <div
                                                        class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                        <a href="#">
                                                            <figure
                                                                class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                                <img src="{{ Vite::asset('resources/assetsFront/images/user-3.png') }}"
                                                                    alt="image"
                                                                    class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                            </figure>
                                                            <div class="clearfix"></div>
                                                            <h4
                                                                class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                                David Goria </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                                    class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                                    style="background-image: url(images/s-6.jpg);">
                                                    <div
                                                        class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                        <a href="#">
                                                            <figure
                                                                class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                                <img src="{{ Vite::asset('resources/assetsFront/images/user-2.png') }}"
                                                                    alt="image"
                                                                    class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                            </figure>
                                                            <div class="clearfix"></div>
                                                            <h4
                                                                class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                                Seary Victor </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <br> <br>






                                    <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3">
                                        <form method="POST" action="{{ route('Posts.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('post')

                                            <div class="card-body p-0">
                                                <a href="#"
                                                    class="font-xsss fw-600 text-grey-900 card-body p-0 d-flex align-items-center">
                                                    <i
                                                        class="btn-round-sm font-xsss text-primary feather-edit-3 me-2 bg-greylight"></i>Nouvelle
                                                    Publication
                                                </a>
                                            </div> <br>

                                            <div class="col-lg-6 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="titre"
                                                        class="small-input form-control rounded-xxl p-2 ps-5 font-xsss text-grey-900 fw-500 border-light-md theme-dark-bg"
                                                        style="vertical-align: top;" placeholder="Titre de la publication"
                                                        id="titre">
                                                    @if ($errors->has('titre'))
                                                        <span class="text-danger">{{ $errors->first('titre') }}</span>
                                                    @endif
                                                </div>
                                            </div>




                                            <div class="card-body p-0 mt-3 position-relative">
                                                @php
                                                    $user = auth()->user();
                                                @endphp
                                                <figure class="avatar position-absolute ms-2 mt-1 top-5"><img
                                                        src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                        alt="avater" class="shadow-sm rounded-circle w30"></figure>
                                                <textarea name="description"
                                                    class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xsss text-grey-900 fw-500 border-light-md theme-dark-bg"
                                                    style="vertical-align: top;" cols="30" rows="10" placeholder="What's on your mind?">
                                                                                                              
                                                    </textarea>
                                                @if ($errors->has('description'))
                                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                                @endif
                                            </div>

                                            <style>
                                                /* Style CSS pour changer la couleur du texte */
                                                textarea::placeholder {
                                                    color: #313030;
                                                    /* Couleur du texte du placeholder */
                                                }
                                            </style>

                                            <br>
                                            {{-- <div >
                                                <div class="col-lg-12 mb-3">
                                                    <div class="form-group">
                                                       
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
                                            </div> --}}

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label for="image"
                                                        class="custom-file-upload d-flex align-items-center font-xss fw-600 ls-1 text-grey-900 text-dark pe-4"
                                                        style="cursor: pointer;">
                                                        <i class="font-md text-success feather-image me-2"></i><span
                                                            class="d-none-xs">Photo</span>
                                                        <input type="file" name="image" style="display: none;"
                                                            id="image"
                                                            accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml">
                                                    </label>
                                                    <div id="image-error" class="text-danger"></div>
                                                    <span id="selected-file"></span>
                                                    @if ($errors->has('image'))
                                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <script>
                                                document.getElementById('image').addEventListener('change', function() {
                                                    const selectedFile = document.getElementById('image').files[0];
                                                    const selectedFileName = selectedFile ? selectedFile.name : '';
                                                    document.getElementById('selected-file').textContent = selectedFileName;
                                                });
                                            </script>





                                            <div class="card-body p-0 mt-0">
                                                <div class="d-flex justify-content-end mx-auto">
                                                    <button type="submit"
                                                        class="bg-current text-center text-white font-xsss fw-600 p-2 w100 rounded-full d-inline-block">Publier</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>





                                    @foreach ($posts as $post)
                                        <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
                                            <div class="card-body p-0 d-flex">
                                                @php
                                                    $user = \App\Models\User::find($post->user_id);
                                                @endphp
                                                <figure class="avatar me-3">
                                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                        alt="avater" class="shadow-sm rounded-circle w50" />
                                                </figure>
                                                <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                                    {{ $user->lastName }}</h5>
                                                <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                                    {{ $user->firstName }} </h5>

                                                <a href="{{ route('single-post', $post->id) }}" class="ms-auto">

                                                    <i
                                                        class="feather-eye text-dark text-grey-900 btn-round-sm font-lg"></i>
                                                </a>
                                                <br><br><br>
                                            </div><br>
                                            <div>
                                                <h4 class="fw-700 text-grey-900 font-xsss mt-1">{{ $post->titre }} <span
                                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $post->created_at->diffForHumans() }}</span>
                                                </h4>


                                            </div>
                                            <div class="card-body p-0 me-lg-5">
                                                <p class="fw-600 text-grey-900 font-xsss w-100 mb-2">
                                                    {{ $post->description }}

                                                </p>
                                            </div>
                                            <div class="card-body d-block p-0 mb-3">
                                                <div class="row ps-2 pe-2">
                                                    <div class="col-sm-12 p-1"><a href="images/t-30.jpg"
                                                            data-lightbox="roadtr"><img src="/images/{{ $post->image }}"
                                                                class="rounded-3 w-100"
                                                                alt="image"style="max-width: 400px;">

                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex p-0">
                                             
                                           
                                             
                                                {{-- <form action="{{ route('Posts.like', $post->id) }}" method="POST" class="d-flex">
                                                    @csrf
                                                    <button type="submit" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                                        <i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                                        {{ $post->likes }} Likes
                                                    </button>
                                                </form>
                                                
                                                <form action="{{ route('Posts.dislike', $post->id) }}" method="POST" class="d-flex">
                                                    @csrf
                                                    <button type="submit" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                                        <i class="feather-thumbs-down text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                                        {{ $post->likes}} Dislikes
                                                    </button>
                                                </form> --}}
                                                <div class="d-flex  ">

                                                <form action="{{ route('Posts.like', $post->id) }}" method="POST" class="d-flex">
                                                    @csrf
                                                    {{-- <button type="submit" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                                        <i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                                      like
                                                    </button> --}}
                                                    <button type="submit"
                                                    class="bg-primary-gradiant text-center text-white font-xsss fw-600 w50 rounded-full d-inline-block">
                                                    <i class="feather-thumbs-up text-white  btn-round-xs font-xss"></i></button>
                                                </form>
                                                
                                                <form action="{{ route('Posts.dislike', $post->id) }}" method="POST" class="d-flex">
                                                    @csrf
                                                    <button type="submit"
                                                    class="bg-primary-gradiant text-center text-white font-xsss fw-600 w50 rounded-full d-inline-block">
                                                    <i class="feather-thumbs-down text-white  btn-round-xs font-xss"></i></button>
                                                </form>
                                                <div class="mt-2">
                                                {{ $post->likes }} Likes
                                                </div>
                                                </div>


                                                <div class="emoji-wrap">
                                                    <ul class="emojis list-inline mb-0">
                                                        <li class="emoji list-inline-item"><i class="em em---1"></i>
                                                        </li>
                                                        <li class="emoji list-inline-item"><i class="em em-angry"></i>
                                                        </li>
                                                        <li class="emoji list-inline-item"><i class="em em-anguished"></i>
                                                        </li>
                                                        <li class="emoji list-inline-item"><i
                                                                class="em em-astonished"></i> </li>
                                                        <li class="emoji list-inline-item"><i class="em em-blush"></i>
                                                        </li>
                                                        <li class="emoji list-inline-item"><i class="em em-clap"></i>
                                                        </li>
                                                        <li class="emoji list-inline-item"><i class="em em-cry"></i>
                                                        </li>
                                                        <li class="emoji list-inline-item"><i
                                                                class="em em-full_moon_with_face"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#"
                                                    class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                                        class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                                                        class="d-none-xss">22 Comment</span></a>
                                                <a href="#"
                                                    class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                                        class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                                        class="d-none-xs">Share</span></a>
                                            </div><br><br>


                                            {{-- <div>
                                                <form method="POST">
                                                    <input type="text" placeholder="écrivez votre commentaires ici..."
                                                        required name="comment" wire:model.lazy="comment"
                                                        class="p-2 border-0 bg-grey text-grey-800 font-xsss lh-32 fw-600 rounded-3 w-100 theme-light-bg"
                                                        id="">
                                                </form>
                                            </div> --}}

                                            <form method="POST" action="{{ route('Comment.store', $post->id) }}">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="text" placeholder="Ajoutez votre commentaire ici..."
                                                        required name="content"
                                                        class="p-2 border-0 bg-grey text-grey-900 font-xss lh-32 fw-600 rounded-3 w-100 theme-dark-bg"
                                                        class="feather-message-circle">

                                                </div>
                                            </form>


                                        </div><br>
                                    @endforeach









                                    <div class="card w-100 text-center shadow-xss rounded-xxl border-0 p-4 mb-3 mt-3">
                                        <div class="snippet mt-2 ms-auto me-auto" data-title=".dot-typing">
                                            <div class="stage">
                                                <div class="dot-typing"></div>
                                            </div>
                                        </div>
                                    </div>


                                </div>






                                <div class="col-xl-4 col-xxl-3 col-lg-2 ps-lg-0">
                                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                                        <div class="card-body d-flex align-items-center p-4">
                                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Friend Request</h4>
                                            <a href="default-member.html"
                                                class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                        </div>
                                        <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 border-top-xs bor-0">
                                            <figure class="avatar me-3"><img
                                                    src="{{ Vite::asset('resources/assetsFront/images/user-7.png') }}"
                                                    alt="image" class="shadow-sm rounded-circle w45"></figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span
                                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12
                                                    mutual friends</span></h4>
                                        </div>
                                        <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                            <a href="#"
                                                class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                            <a href="#"
                                                class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                                        </div>

                                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0">
                                            <figure class="avatar me-3"><img
                                                    src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}"
                                                    alt="image" class="shadow-sm rounded-circle w45"></figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Mohannad Zitoun <span
                                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12
                                                    mutual friends</span></h4>
                                        </div>
                                        <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                            <a href="#"
                                                class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                            <a href="#"
                                                class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                                        </div>

                                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0">
                                            <figure class="avatar me-3"><img
                                                    src="{{ Vite::asset('resources/assetsFront/images/user-12.png') }}"
                                                    alt="image" class="shadow-sm rounded-circle w45"></figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Mohannad Zitoun <span
                                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12
                                                    mutual friends</span></h4>
                                        </div>
                                        <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                            <a href="#"
                                                class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                            <a href="#"
                                                class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                                        </div>
                                    </div>

                                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-0 ">
                                        <div class="card-body d-flex align-items-center p-4 mb-0">
                                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Confirm Friend</h4>
                                            <a href="default-member.html"
                                                class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                        </div>
                                        <div
                                            class="card-body bg-transparent-card d-flex p-3 bg-greylight ms-3 me-3 rounded-3">
                                            <figure class="avatar me-2 mb-0"><img
                                                    src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}"
                                                    alt="image" class="shadow-sm rounded-circle w45"></figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Anthony Daugloi <span
                                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12
                                                    mutual friends</span></h4>
                                            <a href="#"
                                                class="btn-round-sm bg-white text-grey-900 feather-chevron-right font-xss ms-auto mt-2"></a>
                                        </div>
                                        <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3"
                                            style="margin-bottom: 0 !important;">
                                            <figure class="avatar me-2 mb-0"><img
                                                    src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}"
                                                    alt="image" class="shadow-sm rounded-circle w45"></figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-2"> David Agfree <span
                                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12
                                                    mutual friends</span></h4>
                                            <a href="#"
                                                class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                                        </div>
                                        <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3">
                                            <figure class="avatar me-2 mb-0"><img
                                                    src="{{ Vite::asset('resources/assetsFront/images/user-12.png') }}"
                                                    alt="image" class="shadow-sm rounded-circle w45"></figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Hugury Daugloi <span
                                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12
                                                    mutual friends</span></h4>
                                            <a href="#"
                                                class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                                        </div>

                                    </div>

                                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-3">
                                        <div class="card-body d-flex align-items-center p-4">
                                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Suggest Group</h4>
                                            <a href="default-group.html"
                                                class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                        </div>
                                        <div
                                            class="card-body d-flex pt-4 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                                            <img src="images/e-2.jpg" alt="img" class="img-fluid rounded-xxl mb-2">
                                        </div>
                                        <div class="card-body dd-block pt-0 ps-4 pe-4 pb-4">
                                            <ul class="memberlist mt-1 mb-2 ms-0 d-block">
                                                <li class="w20"><a href="#"><img
                                                            src="{{ Vite::asset('resources/assetsFront/images/user-6.png') }}"
                                                            alt="user" class="w35 d-inline-block"
                                                            style="opacity: 1;"></a></li>
                                                <li class="w20"><a href="#"><img
                                                            src="{{ Vite::asset('resources/assetsFront/images/user-7.png') }}"
                                                            alt="user" class="w35 d-inline-block"
                                                            style="opacity: 1;"></a></li>
                                                <li class="w20"><a href="#"><img
                                                            src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}"
                                                            alt="user" class="w35 d-inline-block"
                                                            style="opacity: 1;"></a></li>
                                                <li class="w20"><a href="#"><img
                                                            src="{{ Vite::asset('resources/assetsFront/images/user-3.png') }}"
                                                            alt="user" class="w35 d-inline-block"
                                                            style="opacity: 1;"></a></li>
                                                <li class="last-member"><a href="#"
                                                        class="bg-greylight fw-600 text-grey-500 font-xssss w35 ls-3 text-center"
                                                        style="height: 35px; line-height: 35px;">+2</a></li>
                                                <li class="ps-3 w-auto ms-1"><a href="#"
                                                        class="fw-600 text-grey-500 font-xssss">Member apply</a></li>
                                            </ul>
                                        </div>



                                    </div>

                                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                                        <div class="card-body d-flex align-items-center p-4">
                                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Suggest Pages</h4>
                                            <a href="default-group.html"
                                                class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                        </div>
                                        <div
                                            class="card-body d-flex pt-4 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                                            <img src="{{ Vite::asset('resources/assetsFront/images/g-2.jpg') }}"
                                                alt="img" class="img-fluid rounded-xxl mb-2">
                                        </div>
                                        <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                            <a href="#"
                                                class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                                                    class="feather-external-link font-xss me-2"></i> Like Page</a>
                                        </div>

                                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden">
                                            <img src="{{ Vite::asset('resources/assetsFront/images/g-2.jpg') }}"
                                                alt="img" class="img-fluid rounded-xxl mb-2 bg-lightblue">
                                        </div>
                                        <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                            <a href="#"
                                                class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                                                    class="feather-external-link font-xss me-2"></i> Like Page</a>
                                        </div>


                                    </div>


                                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                                        <div class="card-body d-flex align-items-center  p-4">
                                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Event</h4>
                                            <a href="default-event.html"
                                                class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                        </div>
                                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                                            <div class="bg-success me-2 p-3 rounded-xxl">
                                                <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                                        class="ls-1 d-block font-xsss text-white fw-600">FEB</span>22
                                                </h4>
                                            </div>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Meeting with clients
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41
                                                    madison ave, floor 24 new work, NY 10010</span>
                                            </h4>
                                        </div>

                                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                                            <div class="bg-warning me-2 p-3 rounded-xxl">
                                                <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                                        class="ls-1 d-block font-xsss text-white fw-600">APR</span>30
                                                </h4>
                                            </div>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Developer Programe <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41
                                                    madison ave, floor 24 new work, NY 10010</span> </h4>
                                        </div>

                                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                                            <div class="bg-primary me-2 p-3 rounded-xxl">
                                                <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                                        class="ls-1 d-block font-xsss text-white fw-600">APR</span>23
                                                </h4>
                                            </div>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Aniversary Event <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41
                                                    madison ave, floor 24 new work, NY 10010</span> </h4>
                                        </div>

                                    </div>
                                </div>

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

        <!-- / Content -->




    </x-app-layout>
@endsection
