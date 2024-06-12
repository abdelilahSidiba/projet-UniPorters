<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return response()->json(['cars' => $cars], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'owner_id' => 'required|exists:car_owners,id',
            'marque' => 'required',
            'modele' => 'required',
            'plaque' => 'required|unique:cars,plaque',
            'disponibilite' => 'required|in:disponible,en maintenance',
        ]);

        $car = Car::create([
            'owner_id' => $request->owner_id,
            'marque' => $request->marque,
            'modele' => $request->modele,
            'annee' => $request->annee,
            'plaque' => $request->plaque,
            'capacite' => $request->capacite,
            'disponibilite' => $request->disponibilite,
        ]);

        return response()->json(['car' => $car], 201);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return response()->json(['car' => $car], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'owner_id' => 'required|exists:car_owners,id',
            'marque' => 'required',
            'modele' => 'required',
            'plaque' => 'required|unique:cars,plaque,'.$id,
            'disponibilite' => 'required|in:disponible,en maintenance',
        ]);

        $car = Car::findOrFail($id);
        $car->update([
            'owner_id' => $request->owner_id,
            'marque' => $request->marque,
            'modele' => $request->modele,
            'annee' => $request->annee,
            'plaque' => $request->plaque,
            'capacite' => $request->capacite,
            'disponibilite' => $request->disponibilite,
        ]);

        return response()->json(['car' => $car], 200);
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(['message' => 'Car deleted successfully'], 200);
    }
}
