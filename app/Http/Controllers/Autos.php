<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class Autos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos = Auto::all();

        return view('autos.index', [
            'autos' => $autos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'make' => 'required|min:1|max:15',
            'model' => 'required|min:1|max:15',
            'price' => 'required|numeric',
        ]);

        $auto = Auto::create($validated);

        return redirect("/autos/{$auto->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $auto = Auto::find($id);

        return view('autos/one', [
            'auto' => $auto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $auto = Auto::find($id);
        return view('autos.edit', [
            'auto' => $auto 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $auto = Auto::find($id);

        $validated = $request->validate([
            'make' => 'required|min:1|max:15',
            'model' => 'required|min:1|max:15',
            'price' => 'required|numeric',
        ]);

        $auto['make'] = $validated['make'];
        $auto['model'] = $validated['model'];
        $auto['price'] = $validated['price'];

        $auto->save();

        return redirect("/autos/{$auto->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $auto = Auto::find($request['id']);
        $auto->delete();
        return redirect('/autos');
    }
}
