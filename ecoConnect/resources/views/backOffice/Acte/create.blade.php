@extends('backOffice.menuDashboard')

@section('dashboardAdmin')

<div class="main-content " style=" padding-top: 20px!important;">
    <div class="middle-sidebar-bottom ">
        <div class="container">
            <div class="row">
                <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                    <a href="/Actes-show" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                    <h4 class="font-xs text-black fw-600 ms-4 mb-0 mt-2">Create Acte Volontaire</h4>
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
                <form method="POST" action="{{ route('Acte.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xsss">Categorie</label>
                                <select name="categorie" class="form-select form-control"
                                    style="line-height:20px;">
                                    @foreach (App\Enums\CategorieActeEnum::valuesCategories() as $key => $value)
                                        <option value="{{ $key }}">{{ $key }}</option>
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
                                <input name="titre" type="text" class="form-control">
                                @if ($errors->has('titre'))
                                <span class="text-danger">{{ $errors->first('titre') }}</span>
                            @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xsss">Description</label>
                                <textarea name="description" type="textarea" class="form-control"></textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
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
                                <label class="mont-font fw-600 font-xsss">Lieu</label>
                                <input name="lieu" type="text" class="form-control">
                                @if ($errors->has('lieu'))
                                <span class="text-danger">{{ $errors->first('lieu') }}</span>
                            @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label class="mont-font fw-600 font-xsss">Date</label>
                            <input type="text" name="date" value="{{ date("d-m-Y", old('date') ) }}" />
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label class="mont-font fw-600 font-xsss">Heure</label>
                            <input name="heure" type="time" class="form-control">
                            @if ($errors->has('heure'))
                                <span class="text-danger">{{ $errors->first('heure') }}</span>
                            @endif
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
                                class="bg-primary text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Enregistrer</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="content-backdrop fade"></div>
        </div>
    </div>
</div>
@endsection
