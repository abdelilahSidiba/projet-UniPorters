<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return response()->json(['notifications' => $notifications], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'message' => 'required',
        ]);

        $notification = Notification::create([
            'user_id' => $request->user_id,
            'message' => $request->message,
            'date_notification' => now(),
            'vu' => $request->vu,
        ]);

        return response()->json(['notification' => $notification], 201);
    }

    public function show($id)
    {
        $notification = Notification::findOrFail($id);
        return response()->json(['notification' => $notification], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'message' => 'required',
        ]);

        $notification = Notification::findOrFail($id);
        $notification->update([
            'user_id' => $request->user_id,
            'message' => $request->message,
            'date_notification' => now(),
            'vu' => $request->vu,
        ]);

        return response()->json(['notification' => $notification], 200);
    }

    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();
        return response()->json(['message' => 'Notification deleted successfully'], 200);
    }
}
