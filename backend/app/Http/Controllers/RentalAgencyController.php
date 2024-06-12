<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalAgency;

class RentalAgencyController extends Controller
{
    public function index()
    {
        $rentalAgencies = RentalAgency::all();
        return response()->json(['rental_agencies' => $rentalAgencies], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_agency' => 'required',
            'adresse' => 'nullable',
            'telephone' => 'nullable',
            'email' => 'nullable|email',
            'photo' => 'nullable',
        ]);

        $rentalAgency = RentalAgency::create([
            'nom_agency' => $request->nom_agency,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'photo' => $request->photo,
        ]);

        return response()->json(['rental_agency' => $rentalAgency], 201);
    }

    public function show($id)
    {
        $rentalAgency = RentalAgency::findOrFail($id);
        return response()->json(['rental_agency' => $rentalAgency], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_agency' => 'required',
            'adresse' => 'nullable',
            'telephone' => 'nullable',
            'email' => 'nullable|email',
            'photo' => 'nullable',
        ]);

        $rentalAgency = RentalAgency::findOrFail($id);
        $rentalAgency->update([
            'nom_agency' => $request->nom_agency,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'photo' => $request->photo,
        ]);

        return response()->json(['rental_agency' => $rentalAgency], 200);
    }

    public function destroy($id)
    {
        $rentalAgency = RentalAgency::findOrFail($id);
        $rentalAgency->delete();
        return response()->json(['message' => 'Rental agency deleted successfully'], 200);
    }
}

