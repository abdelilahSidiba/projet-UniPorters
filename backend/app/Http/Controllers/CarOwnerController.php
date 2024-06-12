<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarOwner;

class CarOwnerController extends Controller
{
    public function index()
    {
        $carOwners = CarOwner::all();
        return response()->json(['carOwners' => $carOwners], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $carOwner = CarOwner::create([
            'user_id' => $request->user_id,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'photo' => $request->photo,
        ]);

        return response()->json(['carOwner' => $carOwner], 201);
    }

    public function show($id)
    {
        $carOwner = CarOwner::findOrFail($id);
        return response()->json(['carOwner' => $carOwner], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $carOwner = CarOwner::findOrFail($id);
        $carOwner->update([
            'user_id' => $request->user_id,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'photo' => $request->photo,
        ]);

        return response()->json(['carOwner' => $carOwner], 200);
    }

    public function destroy($id)
    {
        $carOwner = CarOwner::findOrFail($id);
        $carOwner->delete();
        return response()->json(['message' => 'Car owner deleted successfully'], 200);
    }
}
