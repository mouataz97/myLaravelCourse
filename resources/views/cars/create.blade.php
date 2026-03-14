@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Car</h1>

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

    <form method="POST" action="{{ route('cars.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Car Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" required>
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" name="brand" value="{{ old('brand') }}" class="form-control" id="brand" required>
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" value="{{ old('model') }}" class="form-control" id="model" required>
        </div>

        <div class="mb-3">
            <label for="price_per_day" class="form-label">Price per Day</label>
            <input type="number" name="price_per_day" value="{{ old('price_per_day') }}" class="form-control" id="price_per_day" required>
        </div>

        <div class="mb-3">
            <label for="plate_number" class="form-label">Plate Number</label>
            <input type="text" name="plate_number" value="{{ old('plate_number') }}" class="form-control" id="plate_number" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Car</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

