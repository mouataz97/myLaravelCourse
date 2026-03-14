@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Add New Car</a>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Price/Day</th>
            <th>Plate</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->name }}</td>
            <td>{{ $car->brand }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->price_per_day }}</td>
            <td>{{ $car->plate_number }}</td>
            <td>{{ $car->status }}</td>
            <td>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
