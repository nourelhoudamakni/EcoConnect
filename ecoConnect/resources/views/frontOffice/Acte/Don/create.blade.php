@extends('frontOffice.menu')
@section('acteVolontaire')
    <x-app-layout>
        <div class="main-content bg-lightblue theme-dark-bg right-chat-active">

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                                <a href="/Actes-show" class="d-inline-block mt-2"><i
                                        class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Create Don</h4>
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
                                <form method="POST" action="{{ route('Don.updateDon', $don->id) }}" enctype="multipart/form-data">

                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Type Don</label>
                                                <select name="typeDon" class="form-select form-control"
                                                    style="line-height:20px;">
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
                                                <input name="titre" type="text" class="form-control">
                                                @if ($errors->has('titre'))
                                                    <span class="text-danger">{{ $errors->first('titre') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Status</label>
                                            <select name="status" class="form-select form-control"
                                                style="line-height:20px;">
                                                @foreach (App\Enums\StatusEnum::valuesCategories() as $key => $value)
                                                    <option value="{{ $key }}">{{ $key }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
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
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Date de creation</label>
                                                <input type="text" name="date de creation"
                                                    value="{{ date('d-m-Y', old('date')) }}" />
                                                    
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Date de fin</label>
                                                <input type="text" name="date de fin"
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
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>

            </div>
        </div>
    </x-app-layout>
@endsection
