<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicePack;

class ServicePackController extends Controller
{
    public function index()
    {
        $servicePacks = ServicePack::all();
        return response()->json(['service_packs' => $servicePacks], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_pack' => 'required',
            'description' => 'nullable',
            'tarif' => 'required|numeric|min:0',
            'type_pack' => 'required|in:pré-défini,personnalisé',
        ]);

        $servicePack = ServicePack::create([
            'nom_pack' => $request->nom_pack,
            'description' => $request->description,
            'tarif' => $request->tarif,
            'type_pack' => $request->type_pack,
        ]);

        return response()->json(['service_pack' => $servicePack], 201);
    }

    public function show($id)
    {
        $servicePack = ServicePack::findOrFail($id);
        return response()->json(['service_pack' => $servicePack], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_pack' => 'required',
            'description' => 'nullable',
            'tarif' => 'required|numeric|min:0',
            'type_pack' => 'required|in:pré-défini,personnalisé',
        ]);

        $servicePack = ServicePack::findOrFail($id);
        $servicePack->update([
            'nom_pack' => $request->nom_pack,
            'description' => $request->description,
            'tarif' => $request->tarif,
            'type_pack' => $request->type_pack,
        ]);

        return response()->json(['service_pack' => $servicePack], 200);
    }

    public function destroy($id)
    {
        $servicePack = ServicePack::findOrFail($id);
        $servicePack->delete();
        return response()->json(['message' => 'Service pack deleted successfully'], 200);
    }
}
