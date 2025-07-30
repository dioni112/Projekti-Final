@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $car->title }}</h1>

    <div class="mb-4">
        @foreach($car->images as $image)
            <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $car->title }}" style="max-width: 300px; margin-right: 10px;">
        @endforeach
    </div>

    <p><strong>Price:</strong> ${{ number_format($car->price, 2) }}</p>
    <p><strong>Description:</strong> {{ $car->description ?? 'N/A' }}</p>
    <p><strong>Brand:</strong> {{ $car->brand ?? 'N/A' }}</p>
    <p><strong>Model:</strong> {{ $car->model ?? 'N/A' }}</p>
    <p><strong>Year:</strong> {{ $car->year ?? 'N/A' }}</p>
    <p><strong>Mileage:</strong> {{ $car->mileage ?? 'N/A' }} km</p>
    <p><strong>Fuel Type:</strong> {{ $car->fuel_type ?? 'N/A' }}</p>
    <p><strong>Transmission:</strong> {{ $car->transmission ?? 'N/A' }}</p>
    <p><strong>Location:</strong> {{ $car->location ?? 'N/A' }}</p>
    <p><strong>Seller:</strong> {{ $car->user->name ?? 'N/A' }}</p>

    <a href="{{ route('cars.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
