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

    public function store(request $request)
    {
        Car::create([
    'name' => $request->name,
    'brand' => $request->brand,
    'model' => $request->model,
    'price_per_day' => $request->price_per_day,
    'plate_number' => $request->plate_number,
    'status' => 'available'
    ]);

        return redirect('/cars');
    }

    // Edit car form
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    // Update car in database
    public function update(Request $request, Car $car)
    {
        $car->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'model' => $request->model,
            'price_per_day' => $request->price_per_day,
            'plate_number' => $request->plate_number,
            'status' => $request->status,
        ]);

        return redirect('/cars');
    }

    // Delete car
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }

}
