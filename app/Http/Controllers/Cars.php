<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cars\Save as CarsSave;
use Illuminate\Http\Request;
use App\Models\Car;

class Cars extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gearboxTypes = config('gearbox-types');
        return view('cars.create', compact('gearboxTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarsSave $request)
    {
        $car = Car::create($request->validated());
        return redirect("/cars/{$car->id}")->with('create', 'Create new Car');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        $gearboxType = config('gearbox-types')[$car['gearbox_types']];
        return view('cars.single', compact(['car' , 'gearboxType']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $gearboxTypes = config('gearbox-types');
        return view('cars.edit', compact(['car', 'gearboxTypes']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarsSave $request, string $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->validated());
        return redirect("/cars/{$car->id}")->with('notification', 'Car updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $car = Car::findOrFail($request['id']);
        $car->delete();
        return redirect('/cars');
    }
}
