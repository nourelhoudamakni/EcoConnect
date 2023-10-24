@extends('backOffice.menuDashboard')

@section('detailsPost')
    <x-app-layout>




        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">



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
                                                        <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                            alt="avater" class=" shadow-sm rounded-circle w45" />
                                                    </figure>

                                                    <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                                        {{ $user->lastName }}</h5>
                                                    <h5 class="mt-4 mb-4 d-inline-block font-xss fw-600 text-grey-900 me-2">
                                                        {{ $user->firstName }} </h5>
                                                </div>


                                                <h2 class="fw-700 font-lg mt-3 mb-2">{{ $post->titre }}</h2>
                                                <h5 class="fw-700 font-lg mt-3 mb-2">{{ $post->likes }} likes </h5>
                                                <span
                                                    class="d-block font-xssss fw-500 mt-1  lh-3 text-grey-600">Créer le: {{ $post->created_at }}</span>

                                                <p class="font-xsss fw-500 text-grey-600 lh-30 pe-5 mt-3 me-5">
                                                    {{ $post->description }}</p>
                                                <div class="clearfix"></div>



                                            </div>

                                        </div>
                                        <div class="col-xl-4 col-xxl-4 col-lg-4">
                                            <div class="">
                                                <div class="card-image w-100">
                                                    <img src="/images/{{ $post->image }}" alt="event"
                                                        class="w-100 rounded-3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                                            <div class=" card d-block h-100 border-0 shadow-xss bg-white p-lg-5 p-4">
                                                <div class="comments">
                                                    <h2>Listes des Commentaires : </h2> <br>
                                                    @foreach ($comments as $comment)
                                                        @php
                                                            $user = \App\Models\User::find($comment->user_id);
                                                        @endphp
                                                        <div class="comment">
                                                            <div class="card-body p-0 d-flex">
                                                                <figure class="avatar me-3">
                                                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                                        alt="avater"
                                                                        class="shadow-sm rounded-circle w50" />

                                                                    </h5>
                                                                </figure>
                                                                <h1 class="fw-700 text-grey-850 font-xss mt-1">
                                                                    {{ $user->lastName }}
                                                                    {{ $user->firstName }}

                                                                    <span
                                                                        class="d-block font-xssss fw-500 mt-1  lh-3 text-grey-600"> {{ $comment->created_at }}</span>
                                                                </h1>
                                                            </div>
                                                            <h3 class="fw-500 text-grey-650 lh-26 font-s w-650 mb-2 mx-6">
                                                                {{ $comment->content }}</h3>

                                                             
                                                        </div>
                                                        
                                                        <form action="{{ route('destroyComment', $comment->id) }}" method="POST"
                                                            class="d-flex">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" style="margin-left: 600px;">
                                                                <i class="feather-trash-2"></i>
                                                            </button>
                                                        </form>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- / Content -->


    </x-app-layout>
@endsection
