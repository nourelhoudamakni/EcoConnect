@extends('frontOffice.menu')
@section('profileUser')
<x-app-layout>
    <!-- main content -->
    <div class="main-content " style=" padding-top: 20px!important;">
        <div class="middle-sidebar-bottom" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card w-100 border-0 p-0 bg-white shadow-xss rounded-xxl">
                            <div class="card-body h250 p-0 rounded-xxl overflow-hidden m-3"><img
                                    src="{{ Vite::asset('resources/assetsFront/images/u-bg.jpg') }}" alt="image"></div>
                                    @php
                                    $user =auth()->user();
                                    @endphp
                            <div class="card-body p-0 position-relative">
                                <figure class="avatar position-absolute w100 z-index-1" style="top:-40px; left: 30px;"><img
                                    src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                              
                                <h4 class="fw-700 font-sm mt-2 mb-lg-5 mb-4 pl-15">{{$user->firstName}} {{$user->lastName}}   </h4>       
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute-md right-15 top-0 me-2">
                                    <a href="{{ route('user.profile.information') }}"
                                        class="d-none d-lg-block bg-success p-3 z-index-1 rounded-3 text-white font-xsssss text-uppercase fw-700 ls-3">
                                        UPDATE PROFIL</a>


                                    <div class="p-2 text-center ms-3 position-relative dropdown-menu-icon menu-icon cursor-pointer">
                                                <i class="feather-settings animation-spin d-inline-block font-xl text-current"></i>
                                                <div class="dropdown-menu-settings " >
                                                    <h4 class="fw-700 font-sm mb-4">Settings</h4>

                                                    <div class="card bg-transparent-card border-0 d-block mt-3">
                                                        <a href="{{ route('user.update.password') }}"
                                                        class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                                                            class="font-md text-current feather-lock me-2"></i><span class="d-none-xs"></span>Password Settings</a>

                                                    </div>
                                                    <div class="card bg-transparent-card border-0 d-block mt-3">
                                                        <a href="{{ route('user.profile.settings') }}"
                                                        class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                                                            class="font-md text-current feather-user me-2"></i><span class="d-none-xs"></span>Profile Settings</a>

                                                    </div>


                                                </div>
                                            </div>
                                </div>
                            </div>

                            <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs">
                                <ul class="nav nav-tabs h55 d-flex product-info-tab border-bottom-0 ps-4" id="pills-tab"
                                    role="tablist">
                                    <li class="active list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                            href="#navtabs1" data-toggle="tab">About</a></li>
                                    <li class="list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                            href="#navtabs2" data-toggle="tab">Membership</a></li>
                                    <li class="list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                            href="#navtabs3" data-toggle="tab">Discussion</a></li>
                                    <li class="list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                            href="#navtabs4" data-toggle="tab">Video</a></li>
                                    <li class="list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                            href="#navtabs3" data-toggle="tab">Group</a></li>
                                    <li class="list-inline-item me-5"><a
                                            class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                            href="#navtabs1" data-toggle="tab">Events</a></li>
                                    <li class="list-inline-item me-5"><a
                                            class="fw-700 me-sm-5 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                            href="#navtabs7" data-toggle="tab">Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-3 col-lg-4 pe-0">
                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-3">
                            <div class="card-body p-3 border-0">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="chart-container w50 h50">
                                            <div class="chart position-relative" data-percent="78" data-bar-color="#a7d212">
                                                <span class="percent fw-700 font-xsss" data-after="%">78</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 ps-1">
                                        <h4 class="font-xsss d-block fw-700 mt-2 mb-0">Advanced Python Sass <span
                                                class="float-right mt-2 font-xsssss text-grey-500">87%</span></h4>
                                        <p class="font-xssss fw-600 text-grey-500 lh-26 mb-0">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                            <div class="card-body d-block p-4">
                                <h4 class="fw-700 mb-3 font-xsss text-grey-900">About</h4>
                                <p class="fw-500 text-grey-500 lh-24 font-xssss mb-0">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat
                                    non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus
                                </p>
                            </div>
                            <div class="card-body border-top-xs d-flex">
                                <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-0">Private <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">What's up, how
                                        are you?</span></h4>
                            </div>

                            <div class="card-body d-flex pt-0">
                                <i class="feather-eye text-grey-500 me-3 font-lg"></i>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-0">Visble <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">Anyone can find
                                        you</span></h4>
                            </div>
                            <div class="card-body d-flex pt-0">
                                <i class="feather-map-pin text-grey-500 me-3 font-lg"></i>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-1">Flodia, Austia </h4>
                            </div>
                            <div class="card-body d-flex pt-0">
                                <i class="feather-users text-grey-500 me-3 font-lg"></i>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-1">Genarel Group</h4>
                            </div>
                        </div>
                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex align-items-center  p-4">
                                <h4 class="fw-700 mb-0 font-xssss text-grey-900">Photos</h4>
                                <a href="#" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                            </div>
                            <div class="card-body d-block pt-0 pb-2">
                                <div class="row">
                                    <div class="col-6 mb-2 pe-1"><a href="images/e-2.jpg" data-lightbox="roadtrip"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/e-2.jpg') }}"
                                                alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                    <div class="col-6 mb-2 ps-1"><a href="images/e-3.jpg" data-lightbox="roadtrip"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/e-3.jpg') }}"
                                                alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                    <div class="col-6 mb-2 pe-1"><a href="images/e-4.jpg" data-lightbox="roadtrip"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/e-4.jpg') }}"
                                                alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                    <div class="col-6 mb-2 ps-1"><a href="images/e-5.jpg" data-lightbox="roadtrip"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/e-5.jpg') }}"
                                                alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                    <div class="col-6 mb-2 pe-1"><a href="images/e-2.jpg" data-lightbox="roadtrip"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/e-2.jpg') }}"
                                                alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                    <div class="col-6 mb-2 ps-1"><a href="images/e-1.jpg" data-lightbox="roadtrip"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/e-1.jpg') }}"
                                                alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                </div>
                            </div>
                            <div class="card-body d-block w-100 pt-0">
                                <a href="#"
                                    class="p-2 lh-28 w-100 d-block bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                                        class="feather-external-link font-xss me-2"></i> More</a>
                            </div>
                        </div>

                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex align-items-center  p-4">
                                <h4 class="fw-700 mb-0 font-xssss text-grey-900">Event</h4>
                                <a href="#" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                            </div>
                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                                <div class="bg-success me-2 p-3 rounded-xxl">
                                    <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                            class="ls-1 d-block font-xsss text-white fw-600">FEB</span>22</h4>
                                </div>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-2">Meeting with clients <span
                                        class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave,
                                        floor 24 new work, NY 10010</span> </h4>
                            </div>

                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                                <div class="bg-warning me-2 p-3 rounded-xxl">
                                    <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                            class="ls-1 d-block font-xsss text-white fw-600">APR</span>30</h4>
                                </div>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-2">Developer Programe <span
                                        class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave,
                                        floor 24 new work, NY 10010</span> </h4>
                            </div>

                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                                <div class="bg-primary me-2 p-3 rounded-xxl">
                                    <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                            class="ls-1 d-block font-xsss text-white fw-600">APR</span>23</h4>
                                </div>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-2">Aniversary Event <span
                                        class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave,
                                        floor 24 new work, NY 10010</span> </h4>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-8 col-xxl-9 col-lg-8">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif


                        {{-- <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3 mt-3">
                            <div class="card-body p-0">
                                <a href="#"
                                    class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-center"><i
                                        class="btn-round-sm font-xs text-primary feather-edit-3 me-2 bg-greylight"></i>Create
                                    Post</a>
                            </div>
                            <div class="card-body p-0 mt-3 position-relative">
                                <figure class="avatar position-absolute ms-2 mt-1 top-5"><img
                                        src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}" alt="image"
                                        class="shadow-sm rounded-circle w30"></figure>
                                <textarea name="message"
                                    class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg"
                                    cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                            </div>
                            <div class="card-body d-flex p-0 mt-0">
                                <a href="#"
                                    class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                                        class="font-md text-danger feather-video me-2"></i><span class="d-none-xs">Live
                                        Video</span></a>
                                <a href="#"
                                    class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                                        class="font-md text-success feather-image me-2"></i><span
                                        class="d-none-xs">Photo/Video</span></a>
                                <a href="#"
                                    class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                                        class="font-md text-warning feather-camera me-2"></i><span
                                        class="d-none-xs">Feeling/Activity</span></a>
                                <a href="#" class="ms-auto" id="dropdownMenu8" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg"
                                    aria-labelledby="dropdownMenu8">
                                    <div class="card-body p-0 d-flex">
                                        <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span
                                                class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this
                                                to your saved items</span></h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span
                                                class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                your saved items</span></h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group
                                            <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save
                                                to your saved items</span>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                        <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group
                                            <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save
                                                to your saved items</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <br> <br>
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
                                    <figure class="avatar position-absolute ms-2 mt-1 top-5"><img
                                            {{-- src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}" --}}
                                            src="{{ asset('storage/' . $user->profile_photo_path) }}"  alt="image"
                                            class="shadow-sm rounded-circle w30"></figure>
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



                        @foreach ($listPosts as $post)
                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3"><img
                                        src="{{ asset('storage/' . $user->profile_photo_path) }}"alt="image"
                                            class="shadow-sm rounded-circle w45"></figure>
                                            
                                           
                                            <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                                {{ $user->lastName }}</h5>
                                            <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                                {{ $user->firstName }} </h5><br><br>
                                   
                                   
                                    <a href="{{ route('single-post', $post->id) }}" class="ms-auto">

                                        <i
                                            class="feather-eye text-dark text-grey-900 btn-round-sm font-lg"></i>
                                    </a>
                                    
                                </div>
                                <div class="card-body p-0 me-lg-5">

                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">{{ $post->titre }} <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $post->created_at->diffForHumans() }}</span>
                                </h4>
                                    <p class="fw-500 text-grey-800 lh-26 font-xsss w-100">{{ $post->description }}
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
                                    <a href="#"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-3"><i
                                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                        <i
                                            class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                                        Like</a>
                                    <a href="#"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>22
                                        Comment</a>


                                    <a href="{{ route('Posts.edit', ['id' => $post->id]) }}"
                                        class="d-flex
                                        align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                        <i class="feather-edit text-dark text-grey-900 btn-round-sm font-lg">
                                        </i>
                                    </a>
                                    <form action="{{ route('Posts.destroy', ['id' => $post->id]) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                                class="feather-trash-2 text-dark text-grey-900 btn-round-sm font-lg"></i></button>
                                    </form>

                                    <a href="#"
                                        class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                            class="d-none-xs">Share</span></a>
                                </div>
                            </div>
                        @endforeach






                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- main content -->
</x-app-layout>
@endsection
