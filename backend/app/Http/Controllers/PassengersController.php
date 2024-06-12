<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;


class PassengersController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();
        return response()->json(['passengers' => $passengers], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'photo' => 'nullable',
        ]);

        $passenger = Passenger::create([
            'user_id' => $request->user_id,
            'photo' => $request->photo,
        ]);

        return response()->json(['passenger' => $passenger], 201);
    }

    public function show($id)
    {
        $passenger = Passenger::findOrFail($id);
        return response()->json(['passenger' => $passenger], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'photo' => 'nullable',
        ]);

        $passenger = Passenger::findOrFail($id);
        $passenger->update([
            'user_id' => $request->user_id,
            'photo' => $request->photo,
        ]);

        return response()->json(['passenger' => $passenger], 200);
    }

    public function destroy($id)
    {
        $passenger = Passenger::findOrFail($id);
        $passenger->delete();
        return response()->json(['message' => 'Passenger deleted successfully'], 200);
    }
}
