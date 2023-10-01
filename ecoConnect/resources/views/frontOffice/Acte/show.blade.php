@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Acte Volontaire Details</h1>
    <p><strong>Title:</strong> {{ $acteVolontaire->titre }}</p>
    <p><strong>Date:</strong> {{ $acteVolontaire->date }}</p>
    {{-- Display other attributes --}}
    <a href="{{ route('acte-volontaires.index') }}" class="btn btn-primary">Back to List</a>
@endsection
