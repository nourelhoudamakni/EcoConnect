@extends('frontOffice.menu')
@section('acteVolontaire')
    <x-app-layout>
        <style>
            .custom-textarea textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
                font-size: 16px;
                line-height: 1.5;
                height: 50%;
            }
        </style>
        <div class="main-content " style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom ">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-6 col-xxl-6 col-lg-6">
                            <div class=" card d-block h-100 border-0 shadow-xss bg-white p-lg-5 p-4">
                                <h2 class="fw-700 font-lg mt-3 mb-2">{{ $acte->titre }}</h2>
                                <p class="font-xsss fw-500 text-grey-500 lh-30 pe-5 mt-3 me-5">{{ $acte->description }}</p>
                                <div class="clearfix"></div>
                                <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500"><i
                                        class="btn-round-sm bg-greylight ti-target text-grey-500 me-1"></i>
                                    {{ $acte->categorie }}</h5>
                                <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i
                                        class="btn-round-sm bg-greylight ti-location-pin text-grey-500 me-1"></i>
                                    {{ $acte->lieu }}</h5>
                                <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i
                                        class="btn-round-sm bg-greylight ti-time text-grey-500 me-1"></i>
                                    {{ $acte->heure }}</h5>
                                <div class="clearfix"></div>

                                <a href="#" class="btn-round-lg ms-3 d-inline-block rounded-3 bg-greylight"><i
                                        class="feather-share-2 font-sm text-grey-700"></i></a>
                                <a href="#" class="btn-round-lg ms-2 d-inline-block rounded-3 bg-danger"><i
                                        class="feather-bookmark font-sm text-white"></i> </a>
                                        <form method="POST" action="{{ route('Acte.participate', $acte->id) }}">
                                            @csrf
                                            @method('post')
                                            <button type="submit" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-3 d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">Participer</button>
                                        </form>

                                        @if(session('success'))
                                            <div class="alert alert-primary">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        @if(session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                @php
                                    $user = \App\Models\User::find($acte->organizer_id);
                                @endphp
                                @if ($user->id === auth()->user()->id)
                                    <a href="#" id="showFormButton"
                                        class="bg-success border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-3 d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200"><i
                                            class="btn-round-sm fw-600 ti-plus text-500 me-1"></i>Demande de don</a>
                                @endif

                            </div>

                        </div>
                        <div class="col-xl-6 col-xxl-6 col-lg-6">
                            <div class="">
                                <div class="card-image w-100">
                                    <img src="http://127.0.0.1:8000/public/images/{{ $acte->image }}" alt="event"
                                        class="w-100 rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row mt-5">
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class="table-content table-responsive">
                                <div class="comments">
                                    <b class="border-0 p-4">DONS : </b>
                                    @foreach ($dons as $don)
                                        <table class="table text-center">
                                            <thead class="bg-greyblue rounded-3">
                                                <tr>

                                                    <th class="border-0 p-4">Titre</th>
                                                    <th class="border-0 p-4">TypeDon</th>
                                                    <th class="border-0 p-4">Description</th>
                                                    <th class="border-0 p-4">Date Creation</th>
                                                    <th class="border-0 p-4">Date Fin</th>
                                                    <th class="border-0 p-4">Status</th>
                                                    <th class="border-0 p-4">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td class="product-headline wide-column">
                                                        <h3>
                                                            <p class="text-grey-900 fw-600 font-xsss">{{ $don->titre }}
                                                            </p>
                                                        </h3>
                                                    </td>
                                                    <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-600 font-xsss"><span
                                                                    class="font-xsssss"></span> {{ $don->typeDon }}</span>
                                                        </span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-600 font-xsss"><span
                                                                    class="font-xsssss"></span>{{ $don->description }}</span>
                                                        </span>
                                                    </td>
                                                    <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong><span
                                                                        class="font-xsssss"></span>{{ $don->dateCreation }}</strong></span>
                                                        </span>
                                                    </td>
                                                    <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong><span
                                                                        class="font-xsssss"></span>{{ $don->dateFin }}</strong></span>
                                                        </span>
                                                    </td>
                                                    <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong><span
                                                                        class="font-xsssss"></span>{{ $don->status }}</strong></span>
                                                        </span>
                                                    </td>

                                                    <td class="product-remove text-right"><a href="{{ route('Don.edit', ['don' => $don->id]) }}"><i
                                                        class="ti-pencil-alt font-xs text-grey-500"></i></a></td>

                                                    <form action="{{ route('Don.destroy', ['don' => $don->id]) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <td class="product-remove text-right"><button type="submit"><i
                                                                class="ti-trash font-xs text-grey-500"></i></button></td>
                                                            </form>
                                                </tr>
                                            </tbody>
                                        </table>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </div>


                    <div id="popupForm" style="display: none;" class="row mt-5 ">
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class=" card d-block h-100 border-0 shadow-xss bg-white p-lg-5 p-4">
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                <form id="donationForm" method="POST" action="{{ route('Don.store', $acte->id) }}"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @method('post')
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">TypeDon</label>
                                                <select name="typeDon" class="form-select form-control"
                                                    style="border: 2px #eee solid;" style="line-height:20px;">
                                                    @foreach (App\Enums\TypeDonEnum::valuesCategories() as $key => $value)
                                                        <option value="{{ $key }}">{{ $key }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('typeDon'))
                                                    <span class="text-danger">{{ $errors->first('typeDon') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Titre</label>
                                                <input name="titre" type="text" class="form-control"
                                                    style="border: 2px #eee solid;">
                                                @if ($errors->has('titre'))
                                                    <span class="text-danger">{{ $errors->first('titre') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Status</label>
                                                <select name="status" class="form-select form-control"
                                                    style="border: 2px #eee solid;" style="line-height:20px;">
                                                    @foreach (App\Enums\StatusEnum::valuesCategories() as $key => $value)
                                                        <option value="{{ $key }}">{{ $key }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('status'))
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group custom-textarea ">
                                                <label class="mont-font fw-600 font-xsss">Description</label>
                                                <textarea name="description" type="textarea" class="form-control" style="border: 2px #eee solid;" rows="4"></textarea>
                                                @if ($errors->has('description'))
                                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Date de creation</label>
                                                <input type="text" name="dateCreation" class="form-control"
                                                    style="border: 2px #eee solid;"
                                                    value="{{ date('d-m-Y', old('date')) }}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Date de fin</label>
                                                <input type="text" name="dateFin" class="form-control"
                                                    style="border: 2px #eee solid;"
                                                    value="{{ date('d-m-Y', old('date')) }}" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-end">
                                        <div class="mx-2">
                                            <a href=""
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#showFormButton").click(function(e) {
                    e.preventDefault(); // Prevent the default link behavior (if it's a link)
                    $("#popupForm").fadeIn(); // Show the form
                });

                $("#closeFormButton").click(function() {
                    $("#popupForm").fadeOut(); // Hide the form
                });
            });
        </script>

        <script>
            // Function to show the form
            function showForm() {
                document.getElementById('popupForm').style.display = 'block';
            }

            // Function to hide the form
            function hideForm() {
                document.getElementById('popupForm').style.display = 'none';
            }

            // Add an event listener to the "Enregistrer" button to hide the form
            document.querySelector('#donationForm button[type="submit"]').addEventListener('click', function() {
                hideForm();
            });

            // Add an event listener to the "Annuler" link to hide the form
            document.querySelector('#popupForm a').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the default link behavior
                hideForm();
            });
        </script>



        <!-- main content -->
        <!-- main content -->
    </x-app-layout>
@endsection
