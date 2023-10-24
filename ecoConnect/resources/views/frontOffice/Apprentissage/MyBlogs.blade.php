@extends('frontOffice.menu')
@section('meslistApprentissages')
    <x-app-layout>

        <!-- main content -->
        <div class="main-content " style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                            <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4" id="pills-tab" role="tablist">
                                <li class=" list-inline-item me-5"><a
                                        class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block "
                                        href="{{ route('AllBlogs') }}" data-toggle="tab">Liste des contenus éducatives</a>
                                </li>
                                <li class=" active list-inline-item me-5"><a
                                        class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                        href="{{ route('MyBlogs') }}" data-toggle="tab">Mes contenus éducatives</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="row">

                        <div class="d-flex justify-content-end">
                            <div class="">
                                <a class="btn bg-cyan-950 btn-square btn-plus text-white " href="{{ route('Blog.Form') }}">
                                    <i class="feather-plus text-white font-sm" data-toggle="tooltip" data-placement="bottom"
                                        ></i> Ajouter votre article
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="row ">
                            @foreach ($Myblogs as $blog)
                                <div class="col-lg-4 col-md-4 col-sm-4 mb-3 pe-2 ps-2 mt-5">
                                    <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1 h-100">

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
                                                <h6 class="author-name font-xssss fw-600 mb-0 text-grey-800 mt-3">
                                                    {{ $user->firstName }} {{ $user->lastName }}</h6>

                                            </div>
                                            @if ($blog->validate==true)
                                            <div class="d-flex justify-content-end">

                                                <div class="mx-1">
                                                    <a class="btn bg-orange-600  btn-plus text-white " href="{{ route('edit.blog', ['id' => $blog->id]) }}">
                                                        <i class="feather-edit text-white font-sm" data-toggle="tooltip" data-placement="bottom"
                                                            ></i>
                                                    </a>
                                                </div>

                                                <div class="">


                                                    <form action="{{ route('Blog.destroy', ['id' => $blog->id]) }}" method="POST" class="d-inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn bg-red-600  btn-plus text-white " type="submit"  title="Valider l'article">
                                                            <i class="feather-trash text-white font-sm" data-toggle="tooltip" data-placement="bottom"
                                                            ></i>
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                    </div>


                </div>
            </div>
        </div>

        <!-- main content -->
        <script>
            setTimeout(function() {
                var successMessage = document.getElementById('successMessage');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 2000); // 2000 milliseconds (2 seconds)
        </script>
    </x-app-layout>
@endsection
