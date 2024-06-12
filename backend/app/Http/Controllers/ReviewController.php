<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return response()->json(['reviews' => $reviews], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'driver_id' => 'required|exists:drivers,id',
            'note' => 'required|numeric|min:1|max:5',
            'commentaire' => 'nullable',
            // Assuming date_commentaire is automatically set in the database
        ]);

        $review = Review::create([
            'user_id' => $request->user_id,
            'driver_id' => $request->driver_id,
            'note' => $request->note,
            'commentaire' => $request->commentaire,
        ]);

        return response()->json(['review' => $review], 201);
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return response()->json(['review' => $review], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'driver_id' => 'required|exists:drivers,id',
            'note' => 'required|numeric|min:1|max:5',
            'commentaire' => 'nullable',
            // Assuming date_commentaire is automatically set in the database
        ]);

        $review = Review::findOrFail($id);
        $review->update([
            'user_id' => $request->user_id,
            'driver_id' => $request->driver_id,
            'note' => $request->note,
            'commentaire' => $request->commentaire,
        ]);

        return response()->json(['review' => $review], 200);
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return response()->json(['message' => 'Review deleted successfully'], 200);
    }
}

