@extends('backOffice.menuDashboard')

@section('showAllCollaborateurs')

<div class="main-content " style=" padding-top: 20px!important;">
    <div class="middle-sidebar-bottom ">
        <div class="container">
            <div class="row">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Liste des collaborateurs </span></h4>

                <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-products table border-top">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Site Web</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collaborateurs as $Product)
                                    <tr>
                                        <th>#{{ $Product->id }}</th>
                                        <th>
                                                <div class="d-flex flex-column">
                                                    <h6 class="text-body text-nowrap mb-0">
                                                        {{ $Product->nom }}
                                                    </h6>
                                                </div>
                                        </th>
                                        <th>
                                                    <div class="d-flex flex-column">
                                                    <small class="text-muted text-truncate d-none d-sm-block text-wrap">
                                                        {{ Str::limit($Product->adresse, 10) }}
                                                    </small>
                                                </div>

                                        </th>
                                        <th>{{ $Product->email }}</th>
                                        <th>{{ $Product->siteWeb }}</th>
                                        <th>
                                        <form action="{{ route('destroyCollaborateur', ['Collaborateur' => $Product->id]) }}" method="POST" class="d-inline-block">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="feather-trash-2 font-md text-white">Delete</i></button>



                </form>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="content-backdrop fade"></div>
        </div>
    </div>
</div>
@endsection