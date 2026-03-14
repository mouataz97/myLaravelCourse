@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Car</h1>

    <!-- Validation Errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('cars.update', $car->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Car Name</label>
            <input type="text" name="name" value="{{ old('name', $car->name) }}" class="form-control" id="name" required>
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" name="brand" value="{{ old('brand', $car->brand) }}" class="form-control" id="brand" required>
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" value="{{ old('model', $car->model) }}" class="form-control" id="model" required>
        </div>

        <div class="mb-3">
            <label for="price_per_day" class="form-label">Price per Day</label>
            <input type="number" name="price_per_day" value="{{ old('price_per_day', $car->price_per_day) }}" class="form-control" id="price_per_day" required>
        </div>

        <div class="mb-3">
            <label for="plate_number" class="form-label">Plate Number</label>
            <input type="text" name="plate_number" value="{{ old('plate_number', $car->plate_number) }}" class="form-control" id="plate_number" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" id="status" required>
                <option value="available" {{ $car->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="rented" {{ $car->status == 'rented' ? 'selected' : '' }}>Rented</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update Car</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
