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

    <div class="preloader"></div>
    <div class="main-wrapper">

        <!-- navigation top-->
        <div class="nav-header bg-white shadow-xs border-0">
            <div class="nav-top">
                <a href="index.html"><i class="feather-zap text-success display1-size me-2 ms-0"></i><span
                        class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">Sociala.
                    </span> </a>
                <a href="#" class="mob-menu ms-auto me-2 chat-active-btn">
                    <i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="default-video.html" class="mob-menu me-2"><i
                        class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="#" class="me-2 menu-search-icon mob-menu"><i
                        class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <button class="nav-menu me-0 ms-2"></button>
            </div>

            <form action="#" class="float-left header-search">
                <div class="form-group mb-0 icon-input">
                    <i class="feather-search font-sm text-grey-400"></i>
                    <input type="text" placeholder="Start typing to search.."
                        class="bg-grey border-0 lh-32 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
                </div>
            </form>
            <a href="default.html" class="p-2 text-center ms-3 menu-icon center-menu-icon"><i
                    class="feather-home font-lg alert-primary btn-round-lg theme-dark-bg text-current "></i></a>
            <a href="default-group.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                    class="feather-users font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
            <a href="default-group.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                    class="feather-user font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>


            <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-bs-toggle="dropdown"
                aria-expanded="false"><span class="dot-count bg-warning"></span><i
                    class="feather-bell font-xl text-current"></i></a>
            <div class="dropdown-menu dropdown-menu-end p-4 rounded-3 border-0 shadow-lg"
                aria-labelledby="dropdownMenu3">

                <h4 class="fw-700 font-xss mb-4">Notification</h4>
                <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                    <img src="{{ Vite::asset('resources/assetsFront/images/user-8.png') }}"alt="user"
                        class="w40 position-absolute left-0">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Hendrix Stamp <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 3 min</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">There are many variations of pass..</h6>
                </div>
                <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                    <img src="{{ Vite::asset('resources/assetsFront/images/user-4.png') }}" alt="user"
                        class="w40 position-absolute left-0">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Goria Coast <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 2 min</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
                </div>

                <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                    <img src="{{ Vite::asset('resources/assetsFront/images/user-7.png') }}" alt="user"
                        class="w40 position-absolute left-0">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Surfiya Zakir <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 1 min</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
                </div>
                <div class="card bg-transparent-card w-100 border-0 ps-5">
                    <img src="{{ Vite::asset('resources/assetsFront/images/user-6.png') }}" alt="user"
                        class="w40 position-absolute left-0">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Victor Exrixon <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 30 sec</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
                </div>
            </div>
            <a href="#" class="p-2 text-center ms-3 menu-icon chat-active-btn"><i
                    class="feather-message-square font-xl text-current"></i></a>
            <div class="p-2 text-center ms-3 position-relative dropdown-menu-icon menu-icon cursor-pointer">
                <i class="feather-settings animation-spin d-inline-block font-xl text-current"></i>
                <div class="dropdown-menu-settings switchcolor-wrap">
                    <h4 class="fw-700 font-sm mb-4">Settings</h4>
                    <h6 class="font-xssss text-grey-500 fw-700 mb-3 d-block">Choose Color Theme</h6>
                    <ul>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="red" checked=""><i
                                    class="ti-check"></i>
                                <span class="circle-color bg-red" style="background-color: #ff3b30;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="green"><i class="ti-check"></i>
                                <span class="circle-color bg-green" style="background-color: #6db679;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="blue" checked=""><i
                                    class="ti-check"></i>
                                <span class="circle-color bg-blue" style="background-color: #132977;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="pink"><i class="ti-check"></i>
                                <span class="circle-color bg-pink" style="background-color: #ff2d55;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="yellow"><i class="ti-check"></i>
                                <span class="circle-color bg-yellow" style="background-color: #ffcc00;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="orange"><i class="ti-check"></i>
                                <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="gray"><i class="ti-check"></i>
                                <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                            </label>
                        </li>

                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="brown"><i class="ti-check"></i>
                                <span class="circle-color bg-brown" style="background-color: #D2691E;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="darkgreen"><i class="ti-check"></i>
                                <span class="circle-color bg-darkgreen" style="background-color: #228B22;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="deeppink"><i class="ti-check"></i>
                                <span class="circle-color bg-deeppink" style="background-color: #FFC0CB;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="cadetblue"><i class="ti-check"></i>
                                <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                            </label>
                        </li>
                        <li>
                            <label class="item-radio item-content">
                                <input type="radio" name="color-radio" value="darkorchid"><i class="ti-check"></i>
                                <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                            </label>
                        </li>
                    </ul>

                    <div class="card bg-transparent-card border-0 d-block mt-3">
                        <h4 class="d-inline font-xssss mont-font fw-700">Header Background</h4>
                        <div class="d-inline float-right mt-1">
                            <label class="toggle toggle-menu-color"><input type="checkbox"><span
                                    class="toggle-icon"></span></label>
                        </div>
                    </div>
                    <div class="card bg-transparent-card border-0 d-block mt-3">
                        <h4 class="d-inline font-xssss mont-font fw-700">Menu Position</h4>
                        <div class="d-inline float-right mt-1">
                            <label class="toggle toggle-menu"><input type="checkbox"><span
                                    class="toggle-icon"></span></label>
                        </div>
                    </div>
                    <div class="card bg-transparent-card border-0 d-block mt-3">
                        <h4 class="d-inline font-xssss mont-font fw-700">Dark Mode</h4>
                        <div class="d-inline float-right mt-1">
                            <label class="toggle toggle-dark"><input type="checkbox"><span
                                    class="toggle-icon"></span></label>
                        </div>
                    </div>

                </div>
            </div>


            <a href="default-settings.html" class="p-0 ms-3 menu-icon"><img
                    src="{{ Vite::asset('resources/assetsFront/images/profile-4.png') }}" alt="user"
                    class="w40 mt--1"></a>

        </div>
        <!-- navigation top -->

        <!-- navigation left -->
        <nav class="navigation scroll-bar">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2 mt-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>

                        <ul class="mb-1 top-content">
                            <li class="logo d-none d-xl-block d-lg-block"></li>


                            <li><a href="default.html" class="nav-content-bttn open-font"><i
                                        class="feather-tv btn-round-md bg-primary-gradiant me-3"></i><span>Accueil</span></a>
                            </li>
                            <li>
                                <a href="default-badge.html" class="nav-content-bttn open-font"><i
                                        class="feather-shopping-cart btn-round-md bg-primary-gradiant me-3"></i><span>Boutique</span></a>
                            </li>
                            <li><a href="default-group.html" class="nav-content-bttn open-font"><i
                                        class="feather-clipboard btn-round-md bg-primary-gradiant me-3"></i><span>Projets
                                    </span></a>
                            </li>
                            <li>
                                <a href="user-page.html" class="nav-content-bttn open-font"><i
                                        class="feather-shield btn-round-md bg-primary-gradiant me-3"></i><span>Actes
                                        volontaires</span></a>
                            </li>
                            <li>
                                <a href="user-page.html" class="nav-content-bttn open-font"><i
                                        class="feather-calendar btn-round-md  bg-primary-gradiant me-3"></i><span>Evenements</span></a>
                            </li>
                            <li>
                                <a href="user-page.html" class="nav-content-bttn open-font"><i
                                        class="feather-book-open btn-round-md bg-primary-gradiant me-3"></i><span>Apprentissage</span></a>
                            </li>
                        </ul>

                    </div>

                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span>More </span>Pages</div>
                        <ul class="mb-3">
                            <li><a href="default-email-box.html" class="nav-content-bttn open-font"><i
                                        class="font-xl text-current feather-inbox me-3"></i><span>Email Box</span><span
                                        class="circle-count bg-warning mt-1">584</span></a></li>
                            <li><a href="default-hotel.html" class="nav-content-bttn open-font"><i
                                        class="font-xl text-current feather-home me-3"></i><span>Near Hotel</span></a>
                            </li>
                            <li><a href="default-event.html" class="nav-content-bttn open-font"><i
                                        class="font-xl text-current feather-map-pin me-3"></i><span>Latest
                                        Event</span></a></li>
                            <li><a href="default-live-stream.html" class="nav-content-bttn open-font"><i
                                        class="font-xl text-current feather-youtube me-3"></i><span>Live
                                        Stream</span></a></li>
                        </ul>
                    </div>
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                        <ul class="mb-1">
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="default-settings.html" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                                        class="font-sm feather-settings me-3 text-grey-500"></i><span>Settings</span></a>
                            </li>
                            <li><a href="default-analytics.html"
                                    class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                                        class="font-sm feather-pie-chart me-3 text-grey-500"></i><span>Analytics</span></a>
                            </li>
                            <li><a href="default-message.html" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                                        class="font-sm feather-message-square me-3 text-grey-500"></i><span>Chat</span><span
                                        class="circle-count bg-warning mt-0">23</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation left -->

        <!-- main content -->
        <!-- main content -->

        <div class="main-content bg-white">
            <div class="middle-sidebar-bottom">
                <div class="container pe-0">
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                                <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                                    <a href="default-settings.html" class="d-inline-block mt-2"><i
                                            class="ti-arrow-left font-sm text-white"></i></a>
                                </div>
                                <div class="card-body p-lg-5 p-4 w-100 border-0 ">

                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                                Session::forget('success');
                                            @endphp
                                        </div>
                                    @endif
                                    <form action="{{ route('Ajout.contenu') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Thématique</label>
                                                <select name="categorie" class="form-select form-control" style="line-height:20px;">
                                                    @foreach(App\Enums\CategorieEducationEnum::valuesCategories() as $key=>$value)
                                                        <option value="{{$key}}">{{ $key }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('categorie'))
                                                <span
                                                    class="text-danger">{{ $errors->first('categorie') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Date de publication</label>
                                                <input type="date" class="form-control" name="">
                                            </div>
                                        </div> --}}
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Titre</label>
                                                    <input type="text" class="form-control" name="titre">
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
                                                     <div id="image-error" class="text-danger"></div>
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
                                                    <textarea class="form-control " name="description" id="file-picker"></textarea>
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
                                                    <input class="form-control" type="text" data-role="tagsinput"
                                                        name="tags">
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
    <!-- main content -->

    <!-- main content -->


    <div class="app-footer border-0 shadow-lg bg-primary-gradiant">
        <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
        <a href="default-video.html" class="nav-content-bttn"><i class="feather-package"></i></a>
        <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i
                class="feather-layout"></i></a>
        <a href="shop-2.html" class="nav-content-bttn"><i class="feather-layers"></i></a>
        <a href="default-settings.html" class="nav-content-bttn"><img
                src="{{ Vite::asset('resources/assetsFront/images/female-profile.png') }}" alt="user"
                class="w30 shadow-xss"></a>
    </div>

    <div class="app-header-search">
        <form class="search-form">
            <div class="form-group searchbox mb-0 border-0 p-1">
                <input type="text" class="form-control border-0" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline" role="img" class="md hydrated"
                        aria-label="search outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 mt-1 d-inline-block close searchbox-close">
                    <i class="ti-close font-xs"></i>
                </a>
            </div>
        </form>
    </div>

    </div>

    <div class="modal bottom side fade" id="Modalstory" tabindex="-1" role="dialog" style=" overflow-y: auto;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 bg-transparent">
                <button type="button" class="close mt-0 position-absolute top--30 right--10" data-dismiss="modal"
                    aria-label="Close"><i class="ti-close text-grey-900 font-xssss"></i></button>
                <div class="modal-body p-0">
                    <div class="card w-100 border-0 rounded-3 overflow-hidden bg-gradiant-bottom bg-gradiant-top">
                        <div class="owl-carousel owl-theme dot-style3 story-slider owl-dot-nav nav-none">
                            <div class="item"><img
                                    src="{{ Vite::asset('resources/assetsFront/images/story-5.jpg') }}"
                                    alt="image"></div>
                            <div class="item"><img
                                    src="{{ Vite::asset('resources/assetsFront/images/story-6.jpg') }}"alt="image">
                            </div>
                            <div class="item"><img
                                    src="{{ Vite::asset('resources/assetsFront/images/story-7.jpg') }}"alt="image">
                            </div>
                            <div class="item"><img
                                    src="{{ Vite::asset('resources/assetsFront/images/story-8.jpg') }}"
                                    alt="image"></div>

                        </div>
                    </div>
                    <div class="form-group mt-3 mb-0 p-3 position-absolute bottom-0 z-index-1 w-100">
                        <input type="text"
                            class="style2-input w-100 bg-transparent border-light-md p-3 pe-5 font-xssss fw-500 text-white"
                            value="Write Comments">
                        <span class="feather-send text-white font-md text-white position-absolute"
                            style="bottom: 35px;right:30px;"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-popup-chat">
        <div class="modal-popup-wrap bg-white p-0 shadow-lg rounded-3">
            <div class="modal-popup-header w-100 border-bottom">
                <div class="card p-3 d-block border-0 d-block">
                    <figure class="avatar mb-0 float-left me-2">
                        <img src="{{ Vite::asset('resources/assetsFront/images/user-12.png') }}" alt="image"
                            class="w35 me-1">
                    </figure>
                    <h5 class="fw-700 text-primary font-xssss mt-1 mb-1">Hendrix Stamp</h5>
                    <h4 class="text-grey-500 font-xsssss mt-0 mb-0"><span
                            class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                    <a href="#" class="font-xssss position-absolute right-0 top-0 mt-3 me-4"><i
                            class="ti-close text-grey-900 mt-2 d-inline-block"></i></a>
                </div>
            </div>
            <div class="modal-popup-body w-100 p-3 h-auto">
                <div class="message">
                    <div class="message-content font-xssss lh-24 fw-500">Hi, how can I help you?</div>
                </div>
                <div class="date-break font-xsssss lh-24 fw-500 text-grey-500 mt-2 mb-2">Mon 10:20am</div>
                <div class="message self text-right mt-2">
                    <div class="message-content font-xssss lh-24 fw-500">I want those files for you. I want you to
                        send 1 PDF and 1 image file.</div>
                </div>
                <div class="snippet pt-3 ps-4 pb-2 pe-3 mt-2 bg-grey rounded-xl float-right" data-title=".dot-typing">
                    <div class="stage">
                        <div class="dot-typing"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-popup-footer w-100 border-top">
                <div class="card p-3 d-block border-0 d-block">
                    <div class="form-group icon-right-input style1-input mb-0"><input type="text"
                            placeholder="Start typing.."
                            class="form-control rounded-xl bg-greylight border-0 font-xssss fw-500 ps-3"><i
                            class="feather-send text-grey-500 font-md"></i></div>
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
