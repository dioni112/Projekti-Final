@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Cars</h1>

    <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Add New Car</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($cars->count())
        <div class="row">
            @foreach($cars as $car)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($car->images->first())
                            <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" class="card-img-top" alt="{{ $car->title }}">
                        @else
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->title }}</h5>
                            <p class="card-text">${{ number_format($car->price, 2) }}</p>
                            <a href="{{ route('cars.show', $car) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No cars available right now.</p>
    @endif
</div>
@endsection
