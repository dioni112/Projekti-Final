<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    // Show all cars
    public function index()
    {
        $cars = Car::with('images')->where('is_sold', false)->get();
        return view('cars.index', compact('cars'));
    }

    // Show form to create new car
    public function create()
    {
        return view('cars.create');
    }

    // Store new car
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            // Add more validation rules here as needed
        ]);

        $car = Car::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'mileage' => $request->mileage,
            'fuel_type' => $request->fuel_type,
            'transmission' => $request->transmission,
            'location' => $request->location,
            'user_id' => Auth::id(),
        ]);

        // Handle images upload (optional)
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('cars.index')->with('success', 'Car listed successfully!');
    }

    // Show a single car
    public function show(Car $car)
    {
        $car->load('images', 'user');
        return view('cars.show', compact('car'));
    }

    // You can add edit, update, destroy methods as needed
}
