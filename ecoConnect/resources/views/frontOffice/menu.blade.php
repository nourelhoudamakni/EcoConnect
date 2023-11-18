<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcoConnect</title>

    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/feather.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/style.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/emoji.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/lightbox.css') }}">


</head>

<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    <div class="main-wrapper">

        <!-- navigation left -->
        <nav class="navigation ">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2 mt-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>

                        <ul class="mb-1 top-content">
                            <li class="logo d-none d-xl-block d-lg-block"></li>


                            <li><a href="{{ route('dashboard') }}" class="nav-content-bttn open-font"><i
                                        class="feather-tv btn-round-md bg-primary-gradiant me-3"></i><span>Accueil</span></a>
                            </li>
                            <li>
                            <a href="{{ route('products') }}" class="nav-content-bttn open-font"><i
                                        class="feather-shopping-cart btn-round-md bg-primary-gradiant me-3"></i><span>Boutique</span></a>
                            </li>
                            <li>
                                <a href="{{ route('projetEnv') }}" class="nav-content-bttn open-font"><i
                                        class="feather-clipboard btn-round-md bg-primary-gradiant me-3"></i><span>Projets </span></a>
                            </li>
                            <li>

                                <a href="{{ route('Acte.show')}}"  class="nav-content-bttn open-font"><i
                                        class="feather-shield btn-round-md bg-primary-gradiant me-3"></i><span>Actes
                                        volontaires</span></a>
                            </li>

                            <li>
                                <a href="{{ route('AllBlogs')}}" class="nav-content-bttn open-font"><i
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
        @yield('accueil')
        @yield('acteVolontaire')
        @yield('groupes')
        @yield('marketPlace')
        @yield('produitDetails')
        @yield('profileUser')
        @yield('accountInformation')

        {{-- ////////////////////// --}}
        @yield('listApprentissages')
        @yield('addBlog')
        @yield('EditBlog')
        @yield('formContenuEducative')
        @yield('contenuDetails')
        @yield('meslistApprentissages')
        {{-- //////////////////// --}}
        @yield('Post')
        @yield('Edit')
        @yield('index')
        @yield('AddProduit')
        @yield('AddCollaborateur')
        @yield('collaborateurs')
        @yield('UpdateProduit')
        @yield('UpdateCollaborateur')
        @yield('AddCollab')
        @yield('MesProduits')
        @yield('ProduitDetails')
        @yield('accountInformation')
        @yield('MesacteVolontaire')
        {{-- //////////////////////// --}}
        @yield('profileUpdate')
        @yield('settingsProfile')
        @yield('updatePassword')
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
    <script src="{{ Vite::asset('resources/assetsFront/js/jquery.easypiechart.min.js') }}"></script>

    {{-- <script>
        $('.chart').easyPieChart({
            easing: 'easeOutElastic',
            delay: 3000,
            barColor: '#3498db',
            trackColor: '#aaa',
            scaleColor: false,
            lineWidth: 5,
            trackWidth: 5,
            size: 50,
            lineCap: 'round',
            onStep: function(from, to, percent) {
                this.el.children[0].innerHTML = Math.round(percent);
            }
        });
    </script> --}}


</body>

</html>
