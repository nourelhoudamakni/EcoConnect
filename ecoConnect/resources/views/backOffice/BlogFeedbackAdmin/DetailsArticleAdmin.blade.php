@extends('backOffice.menuDashboard')
@section('BlogsAdminDetails')
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
                <div class="card d-block  border-0 shadow-xss bg-white p-lg-5 p-4">

                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h6 class="d-inline-block p-2 text-success alert-success fw-600 font-xssss rounded-3 me-2">
                                {{ $blog->categorie }}</h6>
                        </div>
                        <div class="">
                            <div class="col">
                                <div class="rated" style="padding: 0 0px !important;    ">
                                    @for ($i = 1; $i <= $blog->moyenne; $i++)
                                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                        <label class="star-rating-complete " title="text">{{ $i }}
                                            stars</label>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="d-block font-xssss fw-500 text-grey-600  mb-0">
                        {{ date('d-m-Y', strtotime($blog->created_at)) }}</h6>
                    <h2 class="fw-700 font-lg mt-3 mb-2">{{ $blog->titre }}</h2>
                    <div class="mt-5"> {!! $blog->description !!}
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="card">
                    <h5 class="card-header fw-bold bg-white" style="font-size:20px!important; ">Les Feedbacks</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>User</th>
                                    <th>Description</th>
                                    <th>Note</th>
                                    <th>Date de création</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>
                                            @php
                                                $user = \App\Models\User::find($feedback->user_id);
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
                                        <td> {{ mb_strimwidth($feedback->description, 0, 20, '...') }} </td>

                                        <td class="text-center">
                                            <div class="col">
                                                <div class="rated" style="padding: 0 0px !important;    ">
                                                    @for ($i = 1; $i <= $feedback->note; $i++)
                                                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                        <label class="star-rating-complete "
                                                            title="text">{{ $i }}
                                                            stars</label>
                                                    @endfor
                                                </div>
                                            </div>
                                        </td>
                                        <td> {{ date('d-m-Y', strtotime($feedback->created_at)) }}</td>


                                        <td>


                                            <button class="btn bg-slate-400 btn-sm btn-plus text-white edit-feedback-button"
                                            data-feedback-id="{{ $feedback->id }}"type="submit"
                                                title="Annuler la validation"> <i class='bx bx-show'></i></i>
                                            </button>

                                            <form action="{{ route('destroy.feedback.admin', $feedback->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn bg-red-400 btn-sm btn-plus text-white" type="submit"
                                                    title="Supprimer le feedback"> <i class='bx bx-trash-alt'></i>
                                                </button>
                                            </form>
                                        </td>


                                    </tr>
                                    <div class="row">
                                        <div id="dit-feedback-form" style="display: none;">
                                            <!-- Les détails du feedback seront affichés ici -->
                                        </div>
                                    </div>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>



            </div>


        </div>
        <!-- / Content -->
        <script>
            const editButtons = document.querySelectorAll('.edit-feedback-button');
            const editForm = document.querySelector('#dit-feedback-form');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const feedbackId = this.getAttribute('data-feedback-id');

                    // Make an AJAX request to get feedback data
                    fetch('/get-feedback-admin/' + feedbackId)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            // Populate the edit form fields with the feedback data
                            editForm.innerHTML = `

                                <textarea name="description" class="form-control mb-5 p-3 h100 bg-greylight lh-16 mt-2" rows="5" placeholder="Write your feedback...">${data.description}</textarea>
                            `;

                            // Display the edit form
                            editForm.style.display = 'block';
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        </script>




    </x-app-layout>
@endsection
