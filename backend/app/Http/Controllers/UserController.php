<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json(['users' => $users], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users,email',
            'mot_de_passe' => 'required',
            'type_utilisateur' => 'required|in:client,chauffeur,propriétaire de voiture,admin',
            'date_creation' => 'required|date',
            'telephone' => 'nullable',
            'adresse' => 'nullable',
            'derniere_connexion' => 'nullable|date',
            'verified' => 'nullable',
            'photo' => 'nullable',
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'mot_de_passe' => $request->mot_de_passe,
            'type_utilisateur' => $request->type_utilisateur,
            'date_creation' => $request->date_creation,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'derniere_connexion' => $request->derniere_connexion,
            'verified' => $request->verified,
            'photo' => $request->photo,
        ]);

        return response()->json(['user' => $user], 201);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['user' => $user], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'mot_de_passe' => 'required',
            'type_utilisateur' => 'required|in:client,chauffeur,propriétaire de voiture,admin',
            'date_creation' => 'required|date',
            'telephone' => 'nullable',
            'adresse' => 'nullable',
            'derniere_connexion' => 'nullable|date',
            'verified' => 'nullable',
            'photo' => 'nullable',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'mot_de_passe' => $request->mot_de_passe,
            'type_utilisateur' => $request->type_utilisateur,
            'date_creation' => $request->date_creation,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'derniere_connexion' => $request->derniere_connexion,
            'verified' => $request->verified,
            'photo' => $request->photo,
        ]);

        return response()->json(['user' => $user], 200);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
