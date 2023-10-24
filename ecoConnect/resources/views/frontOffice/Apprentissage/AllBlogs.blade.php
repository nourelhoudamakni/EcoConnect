
@extends('frontOffice.menu')
@section('listApprentissages')

    <x-app-layout>
        <!-- main content -->
        <div class="main-content " style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                            <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4" id="pills-tab" role="tablist">
                                <li class="active list-inline-item me-5"><a
                                        class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                        href="{{ route('AllBlogs') }}" data-toggle="tab">Liste des contenus éducatives</a>
                                </li>
                                <li class="list-inline-item me-5"><a
                                        class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                        href="{{ route('MyBlogs') }}" data-toggle="tab">Mes contenus éducatives</a></li>

                            </ul>
                        </div>
                    </div>
                   <div class="row mt-2">
                    @if ($blogsrandom->count() === 3)
                        <div class="row mt-5">
                            <div class="col-7">
                                <div class="card w-100 p-0 hover-card  border-0 rounded-3 overflow-hidden me-1 ">
                                    <div class="card-image w-100 mb-3 ">
                                        <a href="default-hotel-details.html"
                                            class="position-relative d-block img-fluid "><img
                                                src="/upload/{{ $blogsrandom[0]->image }}" alt="image" class="w-100 "
                                                style="height:520px"></a>
                                        <div class="card-img-overlay text-left ">
                                            <span
                                                class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                                {{ $blogsrandom[0]->categorie }} </span>

                                            <div class="d-flex flex-column " style="margin-top:50%">
                                                <h2 class="fw-700  font-md d-flex align-items-center"
                                                    style="color: white;font-family: Montserrat,sans-serif;">
                                                    {{ date('d-m-Y', strtotime($blogsrandom[0]->created_at)) }}</h2>
                                                <h2 class="fw-700 display2-size display2-md-size "
                                                    style="color: white;font-family: Montserrat,sans-serif;">
                                                    {{ $blogsrandom[0]->titre }}</h2>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="row">
                                    <div class="card w-100 p-0 hover-card  border-0 rounded-3 overflow-hidden me-1">
                                        <div class="card-image w-100 mb-3">
                                            <a href="default-hotel-details.html"
                                                class="position-relative d-block img-fluid"><img
                                                    src="/upload/{{ $blogsrandom[1]->image }}" alt="image" class="w-100"
                                                    style="height:250px"></a>
                                            <div class="card-img-overlay text-left ">
                                                <span
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                                    {{ $blogsrandom[1]->categorie }} </span>

                                                <div class="d-flex flex-column " style="margin-top: 25%">
                                                    <h2 class="fw-700  font-md d-flex align-items-center"
                                                        style="color: white;font-family: Montserrat,sans-serif;">
                                                        {{ date('d-m-Y', strtotime($blogsrandom[1]->created_at)) }}
                                                    </h2>
                                                    <h2 class="fw-700 display1-size display2-md-size "
                                                        style="color: white;font-family: Montserrat,sans-serif;">
                                                        {{ $blogsrandom[1]->titre }}</h2>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card w-100 p-0 hover-card  border-0 rounded-3 overflow-hidden ">
                                        <div class="card-image w-100 ">
                                            <a href="default-hotel-details.html"
                                                class="position-relative d-block img-fluid"><img
                                                    src="/upload/{{ $blogsrandom[2]->image }}" alt="image"
                                                    class="w-100" style="height:250px"> </a>
                                            <div class="card-img-overlay text-left ">
                                                <span
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                                    {{ $blogsrandom[2]->categorie }} </span>


                                                <div class="d-flex flex-column " style="margin-top: 25%">
                                                    <h2 class="fw-700  font-md d-flex align-items-center"
                                                        style="color: white;font-family: Montserrat,sans-serif;">
                                                        {{ date('d-m-Y', strtotime($blogsrandom[2]->created_at)) }}
                                                    </h2>
                                                    <h2 class="fw-700 display1-size display2-md-size "
                                                        style="color: white;font-family: Montserrat,sans-serif;">
                                                        {{ $blogsrandom[2]->titre }}</h2>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-6">
                                <div class="card w-100 p-0 hover-card  border-0 rounded-3 overflow-hidden me-1">
                                    <div class="card-image w-100 mb-3">
                                        <a href="default-hotel-details.html"
                                            class="position-relative d-block img-fluid"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/renouvelable.jpg') }}"
                                                alt="image" class="w-100" style="height:500px"></a>
                                        <div class="card-img-overlay text-left ">
                                            <span
                                                class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                                gestion des ressources naturelles </span>

                                            <div class="d-flex flex-column " style="margin-top: 45%">
                                                <h2 class="fw-700  font-md d-flex align-items-center"
                                                    style="color: white;font-family: Montserrat,sans-serif;">
                                                    12-10-2023
                                                </h2>
                                                <h2 class="fw-700 display1-size display2-md-size "
                                                    style="color: white;font-family: Montserrat,sans-serif;">
                                                    Utilisation des energies renouvelables pour la conservation des
                                                    ressources naturelles. </h2>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card w-100 p-0 hover-card  border-0 rounded-3 overflow-hidden ">
                                    <div class="card-image w-100 ">
                                        <a href="default-hotel-details.html"
                                            class="position-relative d-block img-fluid"><img
                                                src="{{ Vite::asset('resources/assetsFront/images/foret.jpg') }}"
                                                alt="image" class="w-100" style="height:500px"> </a>
                                        <div class="card-img-overlay text-left ">
                                            <span
                                                class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                                conservation de la biodiversite </span>


                                            <div class="d-flex flex-column " style="margin-top: 55%">
                                                <h2 class="fw-700  font-md d-flex align-items-center"
                                                    style="color: white;font-family: Montserrat,sans-serif;">
                                                    22-10-2023
                                                </h2>
                                                <h2 class="fw-700 display1-size display2-md-size "
                                                    style="color: white;font-family: Montserrat,sans-serif;">
                                                    Lutter contre la déforestation.</h2>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                    @if (Session::has('success'))
                    <div class="alert alert-success"  id="success-message">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                    @endif
                    <div class="row mt-5">
                        <div class="d-flex flex-column">
                            <div class="">
                                <span
                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-cyan-950 d-inline-block text-white  mt-3 ">
                                    Découvrez tous les articles environnementales </span>
                            </div>
                            <div class="mt-2">
                                <form  action="{{ route('blog.searchByCategorie') }}"  method="GET" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Categorie</label>
                                            <select name="categorie" class="form-select form-control" style="line-height:20px;">
                                                @foreach(App\Enums\CategorieEducationEnum::valuesCategories() as $key=>$value)
                                                    <option value="{{$key}}">{{ $key }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-lg-1 mt-4">

                                        <button class="btn bg-blue-600 btn-plus text-white " type="submit"  title="Valider l'article">
                                            <i class="feather-search text-white font-sm" data-toggle="tooltip" data-placement="bottom"
                                            ></i>
                                        </button>

                                        <a href="{{ route('AllBlogs') }}"  class="btn bg-slate-500  btn-plus text-white " type="submit"  title="Valider l'article">
                                            <i class="feather-refresh-cw text-white font-sm" data-toggle="tooltip" data-placement="bottom"
                                            ></i>
                                        </a>

                                    </div>
                                    </div>
                                </form>
                            </div>


                        </div>

                        <div class="col-xl-9 col-xxl-10 col-lg-10">
                            <div class="row ">
                                @foreach ($blogs as $blog)
                                    <div class="col-lg-4 col-md-4 col-sm-4 mb-3 pe-2 ps-2 mt-5">
                                        <div
                                            class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1 h-100">

                                            <div class="card-image w-100 mb-3">
                                                <a href="{{ route('details.blog', ['id' => $blog->id]) }}"
                                                    class="position-relative d-block img-fluid"><img
                                                        src="/upload/{{ $blog->image }}"alt="image" class="w-100"></a>
                                            </div>
                                            <div class="card-body pt-0">

                                                <h4 class="font-xsss fw-700 text-grey-800 ">{{ $blog->categorie }} - <span
                                                        class="font-xsss fw-500 text-grey-500 ">{{ date('d-m-Y', strtotime($blog->created_at)) }}</span>
                                                </h4>
                                                <h4 class="font-md fw-700 text-grey-900 mt-2"> {{ $blog->titre }} </h4>

                                                <?php
                                                // Utilisez DomDocument pour analyser le contenu HTML
                                                $dom = new \DomDocument();
                                                $dom->loadHtml($blog->description);

                                                // Utilisez DomXPath pour extraire le texte de tous les éléments "text()"
                                                $xpath = new \DomXPath($dom);
                                                $textNodes = $xpath->query('//text()');

                                                $plainText = '';
                                                foreach ($textNodes as $node) {
                                                    $plainText .= $node->nodeValue;
                                                }
                                                ?>
                                                <h5 class="font-xsss mb-2 text-grey-600 fw-400 mt-3">
                                                    {{ mb_strimwidth($plainText, 0, 150, '...') }}</h5>
                                                <div class="d-flex mt-3">
                                                    @php
                                                        $user = \App\Models\User::find($blog->user_id);
                                                    @endphp
                                                    <div class="col-1 text-left">
                                                        <figure class="avatar float-left mb-0 "><img
                                                                src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                                alt="image"
                                                                class="float-right rounded-circle shadow-none w40 me-2">
                                                        </figure>

                                                    </div>
                                                    <h6 class="author-name font-xssss fw-600 mb-0 text-grey-800 mt-2">
                                                        {{ $user->firstName }} {{ $user->lastName }}</h6>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-2 col-lg-2 mt-5">
                            <div
                                class="card w-100 border-0  mb-4 p-lg-3 p-3 shadow-xss position-relative rounded-3 bg-white">
                                <h2 class="fw-700 mb-4 mt-2 font-md text-grey-900 d-flex align-items-center">
                                    Meilleurs Articles

                                </h2>
                                @foreach ($bestBlogs as $bestBlog)
                                    <div class="row">
                                        <div class=" d-block w-100 border-0 border-bottom mb-3 p-4"
                                            style="padding-left: 120px !important;">
                                            <img src="/upload/{{ $bestBlog->image }}" alt="images"
                                                class="position-absolute   w75 ms-4 left-0">
                                            <a href="{{ route('details.blog', ['id' => $bestBlog->id]) }}"
                                                class=""> <i
                                                    class="feather-eye font-md text-grey-500 position-absolute right-0 me-3"></i></a>


                                            <h4 class="font-xss fw-700 text-grey-900  pe-4">{{ $bestBlog->titre }} </h4>
                                            <h6 class="font-xssss fw-500 text-grey-600 mt-1">
                                                {{ date('d-m-Y', strtotime($bestBlog->created_at)) }}</h6>
                                            <h6
                                                class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2 mt-2">
                                                {{ $bestBlog->categorie }}</h6>




                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <script>
            // Vérifie si le message de succès existe
            const successMessage = document.getElementById('success-message');

            if (successMessage) {
                // Attendre 2 minutes (120 000 ms) puis masquer le message
                setTimeout(function () {
                    successMessage.style.display = 'none';
                }, 60000); // 120 000 millisecondes équivalent à 2 minutes
            }
        </script>

        <!-- main content -->
    </x-app-layout>
@endsection
