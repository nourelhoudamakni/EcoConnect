@extends('frontOffice.menu')
@section('Post')
    <x-app-layout>





        <!-- Content -->
        <div class="main-content bg-white">
            <div class="middle-sidebar-bottom">
                <div class="container pe-0">
                    <div class="row">

                        <div class="col-xl-4 col-xxl-4 col-lg-4">
                            <div class=" card d-block h-100 border-0 shadow-xss bg-white p-lg-5 p-4">
                                @php
                                    $user = \App\Models\User::find($post->user_id);
                                @endphp
                                <div class="d-flex ">
                                    <figure class="avatar me-3">
                                        <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="avater"
                                            class=" shadow-sm rounded-circle w45" />
                                    </figure>

                                    <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                        {{ $user->lastName }}</h5>
                                    <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                        {{ $user->firstName }} </h5>
                                </div>


                                <h2 class="fw-700 font-lg mt-3 mb-2">{{ $post->titre }}</h2>
                                
                                <span class="d-block font-xssss fw-500 mt-1  lh-3 text-grey-600"> Créer le: {{ $post->created_at }}</span>
                               
                                <h5 class="fw-700 font-lg mt-3 mb-2">{{ $post->likes }} likes </h5>

                                <p class="font-xsss fw-500 text-grey-600 lh-30 pe-5 mt-3 me-5">{{ $post->description }}</p>
                                <div class="clearfix"></div>

                                {{-- <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-600 me-2"><i
                                        class="btn-round-sm bg-greylight ti-location-pin text-grey-500 me-1"></i>
                                    hhh</h5>
                                <h5 class="mt-4 mb-4 d-inline-block font-xssss fw-600 text-grey-600 me-2"><i
                                        class="btn-round-sm bg-greylight ti-time text-grey-500 me-1"></i>
                                    hhh</h5>
                                <div class="clearfix"></div> --}}


                            </div>

                        </div>
                        <div class="col-xl-4 col-xxl-4 col-lg-4">
                            <div class="">
                                <div class="card-image w-100">
                                    <img src="/images/{{ $post->image }}" alt="event" class="w-100 rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class=" card d-block h-100 border-0 shadow-xss bg-white p-lg-5 p-4">
                                <div class="comments">
                                    <h2>Commentaires : </h2> <br>
                                    @foreach ($comments as $comment)
                                        @php
                                            $user = \App\Models\User::find($comment->user_id);
                                        @endphp
                                        <div class="comment">
                                            <div class="card-body p-0 d-flex">
                                                <figure class="avatar me-3">
                                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                        alt="avater" class="shadow-sm rounded-circle w50" />

                                                    </h5>
                                                </figure>
                                                <h1 class="fw-700 text-grey-850 font-xss mt-1"> {{ $user->lastName }}
                                                    {{ $user->firstName }}

                                                    <span
                                                        class="d-block font-xssss fw-500 mt-1  lh-3 text-grey-600">{{ $comment->created_at->diffForHumans() }}</span>
                                                </h1>
                                            </div>
                                            <h3 class="fw-500 text-grey-650 lh-26 font-s w-650 mb-2 mx-6">
                                                {{ $comment->content }}</h3>


                                        </div>

                                        @if ($user->id === auth()->user()->id)
                                            <form action="{{ route('Comment.destroy', $comment->id) }}" method="POST"
                                                class="d-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="margin-left: 600px;">
                                                    <i class="feather-trash-2"></i>
                                                </button>
                                            </form>
                                        @endif

                                        @if ($user->id === auth()->user()->id)
                                            <form action="{{ route('Comment.update', $comment->id) }}" method="POST"
                                                class="d-flex">
                                                @csrf
                                                @method('PUT')
                                                  <textarea name="content" 
                                                    class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xss text-grey-900 fw-500 border-light-md theme-dark-bg"
                                                    cols="30" rows="10">{{ $comment->content }}</textarea>
                                                <button type="submit" class="btn btn-primary" style="margin-left: 650px;">
                                                    <i class="feather-edit-2"></i>
                                                </button>
                                            </form>
                                        @endif
                                       
                                     
                                        

                                        <hr class="my-3">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-xl-5 col-xxl-5 col-lg-5">
                            <form action="{{ route('Comment.store', $post->id) }}" method="POST">
                                @csrf
                                <div class="card-body p-0 mt-3 position-relative">
                                    <textarea name="content"
                                        class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xss text-grey-900 fw-500 border-light-md theme-dark-bg"
                                        cols="30" rows="10" placeholder="Ajoutez votre commentaire ..."></textarea>
                                </div>
                                <div class="card-body d-flex p-0 mt-0">

                                    <a href="#" class="ms-auto" id="dropdownMenu4" data-bs-toggle="dropdown"
                                        aria-expanded="false"></a>
                                    {{-- <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4"> --}}
                                    <button type="submit"
                                        class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Commenter</button>

                                    {{-- </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        

        <!-- / Content -->




    </x-app-layout>
@endsection
