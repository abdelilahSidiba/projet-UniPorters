<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return response()->json(['drivers' => $drivers], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'numero_licence' => 'required',
            'status' => 'required|in:disponible,en cours de trajet,non disponible',
        ]);

        $driver = Driver::create([
            'user_id' => $request->user_id,
            'numero_licence' => $request->numero_licence,
            'experience' => $request->experience,
            'status' => $request->status,
            'evaluation' => $request->evaluation,
            'photo' => $request->photo,
        ]);

        return response()->json(['driver' => $driver], 201);
    }

    public function show($id)
    {
        $driver = Driver::findOrFail($id);
        return response()->json(['driver' => $driver], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:disponible,en cours de trajet,non disponible',
        ]);

        $driver = Driver::findOrFail($id);
        $driver->update([
            'user_id' => $request->user_id,
            'numero_licence' => $request->numero_licence,
            'experience' => $request->experience,
            'status' => $request->status,
            'evaluation' => $request->evaluation,
            'photo' => $request->photo,
        ]);

        return response()->json(['driver' => $driver], 200);
    }

    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return response()->json(['message' => 'Driver deleted successfully'], 200);
    }
}
