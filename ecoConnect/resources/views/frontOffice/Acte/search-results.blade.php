@extends('frontOffice.menu')
@section('acteVolontaire')
<x-app-layout>
<div class="container">
    <h1>Search Results</h1>

    @if ($actes->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach ($actes as $acte)
                <li>
                    <h3>{{ $acte->title }}</h3>
                    <p>{{ $acte->description }}</p>
                    <!-- Add more fields you want to display -->
                </li>
            @endforeach
        </ul>
    @endif
</div>
</div>
</x-app-layout>
@endsection
