@extends('backOffice.menuDashboard')
@section('BlogsAdmin')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rated:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        .star-rating-complete {
            color: #c59b08;
        }

        .rating-container .form-control:hover,
        .rating-container .form-control:focus {
            background: #fff;
            border: 1px solid #ced4da;
        }

        .rating-container textarea:focus,
        .rating-container input:focus {
            color: #000;
        }

        .rated {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rated:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rated:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ffc700;
        }

        .rated:not(:checked)>label:before {
            content: '★ ';
        }

        .rated>input:checked~label {
            color: #ffc700;
        }

        .rated:not(:checked)>label:hover,
        .rated:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rated>input:checked+label:hover,
        .rated>input:checked+label:hover~label,
        .rated>input:checked~label:hover,
        .rated>input:checked~label:hover~label,
        .rated>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>
    <x-app-layout>
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header fw-bold bg-white" style="font-size:20px!important; ">Les articles validés</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Date de création</th>
                                    <th>Description</th>
                                    <th>User</th>
                                    <th>Moyenne</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($ValidatedBlogs as $ValidatedBlog)
                                    <tr class="clickable-tr"
                                        data-action="{{ route('details.blog.admin', $ValidatedBlog->id) }}">
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $ValidatedBlog->titre }}</strong></td>
                                        <td>{{ $ValidatedBlog->categorie }}</td>
                                        <td> {{ date('d-m-Y', strtotime($ValidatedBlog->created_at)) }}</td>
                                        <?php
                                        // Utilisez DomDocument pour analyser le contenu HTML
                                        $dom = new \DomDocument();
                                        $dom->loadHtml($ValidatedBlog->description);

                                        // Utilisez DomXPath pour extraire le texte de tous les éléments "text()"
                                        $xpath = new \DomXPath($dom);
                                        $textNodes = $xpath->query('//text()');

                                        $plainText = '';
                                        foreach ($textNodes as $node) {
                                            $plainText .= $node->nodeValue;
                                        }
                                        ?>

                                        <td> {{ mb_strimwidth($plainText, 0, 20, '...') }} </td>
                                        <td>
                                            @php
                                                $user = \App\Models\User::find($ValidatedBlog->user_id);
                                            @endphp
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title={{ $user->firstName }}>
                                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                        alt="Avatar" class="rounded-circle" />
                                                </li>

                                            </ul>
                                        </td>

                                        <td>
                                            <div class="col">
                                                <div class="rated" style="padding: 0 0px !important;    ">
                                                    @for ($i = 1; $i <= $ValidatedBlog->moyenne; $i++)
                                                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                        <label class="star-rating-complete "
                                                            title="text">{{ $i }}
                                                            stars</label>
                                                    @endfor
                                                </div>
                                            </div>
                                        </td>



                                        <td>
                                            <form action="{{ route('nonvalidate.blog', $ValidatedBlog->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf

                                                <button class="btn bg-slate-400 btn-sm btn-plus text-white" type="submit"
                                                    title="Annuler la validation"> <i class='bx bx-no-entry'></i>
                                                </button>
                                            </form>

                                            <form action="{{ route('destroy.blog.admin', $ValidatedBlog->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn bg-red-400 btn-sm btn-plus text-white" type="submit"
                                                    title="Supprimer l'article"> <i class='bx bx-trash-alt'></i>
                                                </button>
                                            </form>
                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
            <div class="row mt-5">
                <div class="card ">
                    <h5 class="card-header bg-white fw-bold " style="font-size:20px!important; ">Les articles non validés
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Date de création</th>
                                    <th>Description</th>
                                    <th>User</th>
                                    <th>Moyenne</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($nonValidatedBlogs as $ValidatedBlog)
                                    <tr class="clickable-tr"
                                    data-action="{{ route('details.blog.admin', $ValidatedBlog->id) }}">
                                        <td><i class="fab fa-angular fa-lg text-danger "></i>
                                            <strong>{{ $ValidatedBlog->titre }}</strong></td>

                                        <td>{{ $ValidatedBlog->categorie }}</td>
                                        <td> {{ date('d-m-Y', strtotime($ValidatedBlog->created_at)) }}</td>
                                        <?php
                                        // Utilisez DomDocument pour analyser le contenu HTML
                                        $dom = new \DomDocument();
                                        $dom->loadHtml($ValidatedBlog->description);

                                        // Utilisez DomXPath pour extraire le texte de tous les éléments "text()"
                                        $xpath = new \DomXPath($dom);
                                        $textNodes = $xpath->query('//text()');

                                        $plainText = '';
                                        foreach ($textNodes as $node) {
                                            $plainText .= $node->nodeValue;
                                        }
                                        ?>

                                        <td> {{ mb_strimwidth($plainText, 0, 20, '...') }} </td>
                                        <td>
                                            @php
                                                $user = \App\Models\User::find($ValidatedBlog->user_id);
                                            @endphp
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title={{ $user->firstName }}>
                                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                        alt="Avatar" class="rounded-circle" />
                                                </li>

                                            </ul>
                                        </td>

                                        <td>
                                            <div class="col">
                                                <div class="rated" style="padding: 0 0px !important;    ">
                                                    @for ($i = 1; $i <= $ValidatedBlog->moyenne; $i++)
                                                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                        <label class="star-rating-complete "
                                                            title="text">{{ $i }}
                                                            stars</label>
                                                    @endfor
                                                </div>
                                            </div>
                                        </td>


                                        <td>
                                            <form action="{{ route('validate.blog', $ValidatedBlog->id) }}" method="POST"
                                                class="d-inline-block">
                                                @csrf

                                                <button class="btn bg-green-300 btn-sm btn-plus text-white" type="submit"
                                                    title="Valider l'article">
                                                    <i class='bx bx-check ' ></i>
                                                </button>
                                            </form>
                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>



            </div>


        </div>
        <!-- / Content -->
        <style>
            .clickable-tr {
                cursor: pointer;
                transition: background-color 0.3s;
                /* Pour une transition douce de la couleur de fond */
            }

            .clickable-tr:hover {
                 background-color: rgb(226 232 240 / var(--tw-bg-opacity));
                /* Couleur de fond au survol */
            }
        </style>
        <script>
            $(document).ready(function() {
                $('.clickable-tr').click(function() {
                    const url = $(this).data('action');
                    window.location.href = url;
                });
            });
        </script>

    </x-app-layout>
@endsection
