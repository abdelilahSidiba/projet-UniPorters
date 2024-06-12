<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return response()->json(['bookings' => $bookings], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'driver_id' => 'nullable|exists:drivers,id',
            'car_id' => 'nullable|exists:cars,id',
            'pack_id' => 'nullable|exists:service_packs,id',
            'date_depart' => 'required|date',
            'heure_depart' => 'required',
            'adresse_depart' => 'required',
            'adresse_arrivee' => 'required',
            'statut' => 'required|in:confirmée,en cours,terminée,annulée',
        ]);

        $booking = Booking::create([
            'user_id' => $request->user_id,
            'driver_id' => $request->driver_id,
            'car_id' => $request->car_id,
            'pack_id' => $request->pack_id,
            'date_depart' => $request->date_depart,
            'heure_depart' => $request->heure_depart,
            'adresse_depart' => $request->adresse_depart,
            'adresse_arrivee' => $request->adresse_arrivee,
            'statut' => $request->statut,
        ]);

        return response()->json(['booking' => $booking], 201);
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return response()->json(['booking' => $booking], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'driver_id' => 'nullable|exists:drivers,id',
            'car_id' => 'nullable|exists:cars,id',
            'pack_id' => 'nullable|exists:service_packs,id',
            'date_depart' => 'required|date',
            'heure_depart' => 'required',
            'adresse_depart' => 'required',
            'adresse_arrivee' => 'required',
            'statut' => 'required|in:confirmée,en cours,terminée,annulée',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update([
            'user_id' => $request->user_id,
            'driver_id' => $request->driver_id,
            'car_id' => $request->car_id,
            'pack_id' => $request->pack_id,
            'date_depart' => $request->date_depart,
            'heure_depart' => $request->heure_depart,
            'adresse_depart' => $request->adresse_depart,
            'adresse_arrivee' => $request->adresse_arrivee,
            'statut' => $request->statut,
        ]);

        return response()->json(['booking' => $booking], 200);
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json(['message' => 'Booking deleted successfully'], 200);
    }
}

