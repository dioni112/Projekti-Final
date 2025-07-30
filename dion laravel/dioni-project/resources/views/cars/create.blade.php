@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Car</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Car Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (USD)</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand') }}">
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" id="model" class="form-control" value="{{ old('model') }}">
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}">
        </div>

        <div class="mb-3">
            <label for="mileage" class="form-label">Mileage (km)</label>
            <input type="number" name="mileage" id="mileage" class="form-control" value="{{ old('mileage') }}">
        </div>

        <div class="mb-3">
            <label for="fuel_type" class="form-label">Fuel Type</label>
            <input type="text" name="fuel_type" id="fuel_type" class="form-control" value="{{ old('fuel_type') }}">
        </div>

        <div class="mb-3">
            <label for="transmission" class="form-label">Transmission</label>
            <input type="text" name="transmission" id="transmission" class="form-control" value="{{ old('transmission') }}">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}">
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Car Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>

        <button type="submit" class="btn btn-success">Add Car</button>
    </form>
</div>
@endsection
