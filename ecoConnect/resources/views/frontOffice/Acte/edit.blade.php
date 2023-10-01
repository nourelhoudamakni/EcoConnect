@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Edit Acte Volontaire</h1>
    <form method="POST" action="{{ route('acte-volontaires.update', $acteVolontaire->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">Title:</label>
            <input type="text" name="titre" class="form-control" value="{{ $acteVolontaire->titre }}" required>
        </div>
        {{-- Add form fields for other attributes --}}
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
