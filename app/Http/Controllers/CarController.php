<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price_per_day' => 'required|integer',
            'plate_number' => 'required|string|max:255',
        ]);

        Car::create($request->all());

        return redirect('/cars')->with('success', 'Car added successfully!');
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price_per_day' => 'required|integer',
            'plate_number' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $car->update($request->all());

        return redirect('/cars')->with('success', 'Car updated successfully!');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars')->with('success', 'Car deleted successfully!');
    }
}
