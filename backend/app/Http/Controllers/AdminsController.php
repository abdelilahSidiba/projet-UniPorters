<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;


class AdminsController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return response()->json(['admins' => $admins], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role' => 'required',
            'photo' => 'nullable',
        ]);

        $admin = Admin::create([
            'user_id' => $request->user_id,
            'role' => $request->role,
            'photo' => $request->photo,
        ]);

        return response()->json(['admin' => $admin], 201);
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return response()->json(['admin' => $admin], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role' => 'required',
            'photo' => 'nullable',
        ]);

        $admin = Admin::findOrFail($id);
        $admin->update([
            'user_id' => $request->user_id,
            'role' => $request->role,
            'photo' => $request->photo,
        ]);

        return response()->json(['admin' => $admin], 200);
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return response()->json(['message' => 'Admin deleted successfully'], 200);
    }
}
