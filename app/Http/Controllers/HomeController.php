<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        Car::create([
            'name' => 'Clio',
            'brand' => 'Renault',
            'price_per_day' => 200,
            'plate_number' => '123-A-45',
            'status' => 'available'
        ]);

        return "Car inserted";
    }
}