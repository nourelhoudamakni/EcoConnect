@extends('frontOffice.menu')
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
@section('contenuDetails')
    <x-app-layout>
        <div class="main-content " style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 ">
                            <div class="row">
                                <div class="card d-block  border-0 shadow-xss bg-white p-lg-5 p-4">

                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h6
                                            class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2">
                                            {{ $blog->categorie }}</h6>
                                        </div>
                                        <div class="">
                                            <div class="col">
                                                <div class="rated"
                                                    style="padding: 0 0px !important;    ">
                                                    @for ($i = 1; $i <= $blog->moyenne; $i++)
                                                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                        <label class="star-rating-complete "
                                                            title="text">{{ $i }}
                                                            stars</label>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="d-block font-xssss fw-500 text-grey-600  mb-0">{{ date('d-m-Y', strtotime($blog->created_at)) }}</h6>
                                    <h2 class="fw-700 font-lg mt-3 mb-2">{{ $blog->titre }}</h2>
                                    <div class="mt-5" style="font-family: Montserrat,sans-serif"> {!! $blog->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block mt-4 border-0 shadow-xss bg-white p-lg-5 p-4 ">
                                    <div class="chat-wrapper p-3 w-100 position-relative  bg-white theme-dark-bg">
                                        <h2 class="fw-700 mb-4 mt-2 font-md text-grey-900 d-flex align-items-center">
                                            FeedBacks
                                            <span
                                                class="circle-count bg-warning text-white font-xsssss rounded-3 ms-2 ls-3 fw-600 p-2  mt-0">{{ $feedbacks->count() }}</span>

                                        </h2>


                                        <ul class="notification-box">
                                            @foreach ($feedbacks as $feedback)
                                                @php
                                                    $user = \App\Models\User::find($feedback->user_id);
                                                @endphp
                                                <li>
                                                    <div class="row">
                                                        <div class="col-1 text-left">
                                                            <figure class="avatar float-left mb-0"><img
                                                                    src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                                    alt="image" class="float-right shadow-none w40 me-2">
                                                            </figure>

                                                        </div>
                                                        <div class="col-11 ps-4">
                                                            <div class="row ">
                                                                <div class="content col-10">
                                                                    <h6
                                                                        class="author-name font-xssss fw-600 mb-0 text-grey-800">
                                                                        {{ $user->firstName }} {{ $user->lastName }}</h6>
                                                                    <h6
                                                                        class="d-block font-xsssss fw-500 text-grey-500 mt-2 mb-0">
                                                                        {{ $feedback->created_at->diffForHumans() }}</h6>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="rated"
                                                                                style="padding: 0 0px !important;    height: 30px!important;">
                                                                                @for ($i = 1; $i <= $feedback->note; $i++)
                                                                                    {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                                                    <label class="star-rating-complete "
                                                                                        title="text">{{ $i }}
                                                                                        stars</label>
                                                                                @endfor
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <p
                                                                        class="comment-text lh-24 fw-500 font-xsss text-grey-700 mt-2">
                                                                        {{ $feedback->description }}
                                                                    </p>
                                                                </div>
                                                                @if ($user->id === auth()->user()->id)
                                                                    <div class="col-2">
                                                                        <div class="d-flex justify-content-around">
                                                                            <div class="">
                                                                                <button href="#"
                                                                                    class="edit-feedback-button"
                                                                                    data-feedback-id="{{ $feedback->id }}">
                                                                                    <i
                                                                                        class="feather-edit font-md text-grey-500 position-absolute right-7 me-3"></i></button>
                                                                            </div>
                                                                            <div class="">

                                                                                <form
                                                                                    action="{{ route('feedback.destroy', $feedback->id) }}"
                                                                                    method="POST" class="d-flex">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button href="#" class="">
                                                                                        <i
                                                                                            class="feather-trash font-md text-grey-500 position-absolute right-0 me-3"></i></button>
                                                                                </form>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <hr class="my-2">

                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <div class="row edit-feedback-form" style="display: none">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @php
                                $user = \App\Models\User::find($blog->user_id);
                            @endphp
                            @if ($user->id !== auth()->user()->id)
                                <div class="row">
                                    <div class="card d-block mt-4 border-0 shadow-xss bg-white p-lg-5 p-4 ">

                                        <form action="{{ route('store.feedBack', $blog->id) }}" method="POST">
                                            @csrf
                                            <h2 class="fw-700 mb-4 mt-2 font-md text-grey-900 d-flex align-items-center">
                                                Your Feedback

                                            </h2>

                                            <div class="row">

                                                <div class="col">
                                                    <div class="">
                                                        <h6 class="d-block font-xsssss fw-500 text-grey-500  mb-0">
                                                            Note:</h6>
                                                    </div>

                                                    <div class="rate" style="padding: 0 0px !important;   ">
                                                        <input type="radio" id="star5" class="rate" name="rating"
                                                            value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" checked id="star4" class="rate"
                                                            name="rating" value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" class="rate" name="rating"
                                                            value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" class="rate" name="rating"
                                                            value="2">
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" class="rate"
                                                            name="rating" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="">
                                                    <h6 class="d-block font-xsssss fw-500 text-grey-500  mb-0">
                                                    Description:</h6>
                                                </div>
                                                <div class="">
                                                    <textarea name="description" class="form-control mb-5 p-3 h100 bg-greylight lh-16 mt-2" rows="5"
                                                    placeholder="Write your feedback..."></textarea>
                                                    @if ($errors->has('description'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('description') }}</span>
                                                @endif
                                                </div>


                                            </div>

                                            <div class="text-end">
                                                <button type="submit"
                                                    class="p-2 lh-20 w100 bg-primary-gradiant text-white text-center font-xssss fw-600 ls-1 rounded-xl">Save</button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="col-xl-3">
                            <div class="card w-100 border-0  mb-4 p-lg-4 p-3 shadow-xss position-relative rounded-3 bg-white">
                                <h2 class="fw-700 mb-4 mt-2 font-md text-grey-900 d-flex align-items-center">
                          Latest Articles

                                </h2>
                                @foreach ($latestblogs  as $latestblog )
                                <div class="row">
                                    <div class=" d-block w-100 border-0 border-bottom mb-3 p-4"
                                        style="padding-left: 120px !important;">
                                        <img src="/upload/{{ $latestblog->image }}" alt="images"
                                            class="position-absolute   w75 ms-4 left-0">
                                        <a href="{{ route('details.blog', ['id' => $latestblog->id]) }}"   class=""> <i
                                                class="feather-eye font-md text-grey-500 position-absolute right-0 me-3"></i></a>

                                        <h4 class="font-xss fw-700 text-grey-900  pe-4">{{ $latestblog->titre }} </h4>
                                        <h6 class="font-xssss fw-500 text-grey-600 mt-1">{{ date('d-m-Y', strtotime($blog->created_at)) }}</h6>
                                        <h6
                                        class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2 mt-2">
                                        {{ $latestblog->categorie }}</h6>




                                    </div>
                                </div>
                                @endforeach


                                <div class="row">
                                    <a href="{{ route('AllBlogs') }}"
                                        class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-3 d-block mt-0 w-100 p-2 lh-34 text-center ls-3 ">
                                        VOIR AUTRES ARTICLES</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>



        <!-- main content -->
        <!-- main content -->

        <script>
            const editButtons = document.querySelectorAll('.edit-feedback-button');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const feedbackId = this.getAttribute('data-feedback-id');
                    const editForm = document.querySelector('.edit-feedback-form');

                    fetch('/get-feedback/' + feedbackId)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            // Clear the edit form content
                            editForm.innerHTML = '';

                            // Create a form element
                            const form = document.createElement('form');
                            form.action = `/update-feedback/${feedbackId}`; // Set the update route
                            form.method = 'POST';
                            // Create a hidden input for the CSRF token
                            const csrfTokenInput = document.createElement('input');
                            csrfTokenInput.type = 'hidden';
                            csrfTokenInput.name = '_token';
                            csrfTokenInput.value = '{{ csrf_token() }}';
                            form.appendChild(csrfTokenInput);

                            // Create a div to hold the star rating
                            const starRating = document.createElement('div');
                            starRating.className = 'rated';

                            // Generate the stars dynamically based on the feedback note
                            for (let i = 1; i <= data.note; i++) {
                                const starInput = document.createElement('input');
                                starInput.type = 'radio';
                                starInput.id = `star${i}`;
                                starInput.className = 'rate';
                                starInput.name = 'rating';
                                starInput.value = i;
                                starRating.appendChild(starInput);

                                const starLabel = document.createElement('label');
                                starLabel.className = 'star-rating-complete';
                                starLabel.setAttribute('for', `star${i}`);
                                starLabel.title = `${i} stars`;
                                starLabel.textContent = `${i} stars`;
                                starRating.appendChild(starLabel);

                                if (i === data.note) {
                                    starInput.checked = true;
                                }
                            }

                            // Append the star rating div to the edit form
                            form.appendChild(starRating);


                            // Create a textarea for the description
                            const descriptionTextarea = document.createElement('textarea');
                            descriptionTextarea.name = 'description';
                            descriptionTextarea.className =
                                'form-control mb-5 p-3 h100 bg-greylight lh-16 mt-2';
                            descriptionTextarea.rows = '5';
                            descriptionTextarea.placeholder = 'Write your feedback...';
                            descriptionTextarea.textContent = data.description;
                            form.appendChild(descriptionTextarea);

                            // Create a button to submit the form
                            const submitButton = document.createElement('button');
                            submitButton.type = 'submit';
                            submitButton.className =
                                'p-2 lh-20 w100 bg-primary-gradiant text-white text-center font-xssss fw-600 ls-1 rounded-xl text-end';
                            submitButton.textContent = 'Update';
                            form.appendChild(submitButton);

                            // Append the form to the edit form
                            editForm.appendChild(form);

                            // Display the edit form
                            editForm.style.display = 'block';
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        </script>


        </body>
    </x-app-layout>
@endsection
