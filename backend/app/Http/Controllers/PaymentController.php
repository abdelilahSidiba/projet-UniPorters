<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return response()->json(['payments' => $payments], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'montant' => 'required',
            'date_paiement' => 'required|date',
            'methode_paiement' => 'required',
            'statut' => 'required|in:effectué,en attente',
        ]);

        $payment = Payment::create([
            'booking_id' => $request->booking_id,
            'montant' => $request->montant,
            'date_paiement' => $request->date_paiement,
            'methode_paiement' => $request->methode_paiement,
            'statut' => $request->statut,
        ]);

        return response()->json(['payment' => $payment], 201);
    }

    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return response()->json(['payment' => $payment], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'montant' => 'required',
            'date_paiement' => 'required|date',
            'methode_paiement' => 'required',
            'statut' => 'required|in:effectué,en attente',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update([
            'booking_id' => $request->booking_id,
            'montant' => $request->montant,
            'date_paiement' => $request->date_paiement,
            'methode_paiement' => $request->methode_paiement,
            'statut' => $request->statut,
        ]);

        return response()->json(['payment' => $payment], 200);
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return response()->json(['message' => 'Payment deleted successfully'], 200);
    }
}
