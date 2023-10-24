@extends('backOffice.menuDashboard')

@section('ListProduits')
    <div class="main-content" style="padding-top: 20px;">
        <div class="middle-sidebar-bottom">
            <div class="container">
                <div class="row">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Liste des produits non validés</span></h4>

                    <div class="card">
                        <div class="card-datatable table-responsive">
                            <table class="datatables-products table border-top">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>titre</th>
                                        <th>description</th>
                                        <th>prix</th>
                                        <th>Actions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unvalidatedProducts as $Product)
                                        <tr>
                                            <th>#{{ $Product->id }}</th>
                                            <th>
                                                <div class="d-flex justify-content-start align-items-center product-name">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar me-2 rounded-2 bg-label-secondary">
                                                            @if ($Product->image)
                                                                <img src="{{ asset('public/images/' . $Product->image) }}" alt="Product" class="rounded-2" loading="lazy">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex flex-column">
                                                    <h6 class="text-body text-nowrap mb-0">
                                                        {{ $Product->titre }}
                                                    </h6>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex flex-column">
                                                    <small class="text-muted text-truncate d-none d-sm-block text-wrap">
                                                        {{ Str::limit($Product->description, 10) }}
                                                    </small>
                                                </div>
                                            </th>
                                            <th>{{ $Product->prix }}</th>
                                            <th>
                                                <form action="{{ route('destroyProduct', ['Product' => $Product->id]) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="feather-trash-2 font-md text-white">Delete</i>
                                                    </button>
                                                </form>
</th>
                                                <th>
                                                <form action="{{ route('validateProduct', ['product' => $Product->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <button type="submit" class="btn btn-success">Valider</button>
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

        <div class="container">
            <div class="row">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Liste des produits validés</span></h4>

                <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-products table border-top">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>titre</th>
                                    <th>description</th>
                                    <th>prix</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($validatedProducts as $Product)
                                    <tr>
                                        <th>#{{ $Product->id }}</th>
                                        <th>
                                            <div class="d-flex justify-content-start align-items-center product-name">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary">
                                                        @if ($Product->image)
                                                            <img src="{{ asset('public/images/' . $Product->image) }}" alt="Product" class="rounded-2" loading="lazy">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex flex-column">
                                                <h6 class="text-body text-nowrap mb-0">
                                                    {{ $Product->titre }}
                                                </h6>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex flex-column">
                                                <small class="text-muted text-truncate d-none d-sm-block text-wrap">
                                                    {{ Str::limit($Product->description, 10) }}
                                                </small>
                                            </div>
                                        </th>
                                        <th>{{ $Product->prix }}</th>
                                        <th>
                                            <form action="{{ route('destroyProduct', ['Product' => $Product->id]) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="feather-trash-2 font-md text-white">Delete</i>
                                                </button>
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
@endsection
