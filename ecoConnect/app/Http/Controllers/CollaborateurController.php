<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Collaborateur;
use App\Models\User;

class CollaborateurController extends Controller
{
    public function create()
    {
        return view('frontOffice.MarketPlace.AddNewCollaborateur');
    }

    public function createCollab()
    {
        return view('frontOffice.MarketPlace.AddCollab');
    }

    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'adresse' => 'required|string',
        'nom' => 'required|string',
        'siteWeb' => 'nullable|url',
    ], [
        'email.required' => 'Email is required',
        'adresse.required' => 'Address is required',
        'nom.required' => 'Name is required',
    ]);

    // Get the currently authenticated user
    $user = Auth::user();

    // Check if a collaborateur with the same email or site web already exists for the user
    $existingCollaborateur = $user->collaborateurs() 
        ->where('email', $request->input('email'))
        ->orWhere('siteWeb', $request->input('siteWeb'))
        ->first();

    if ($existingCollaborateur) {
        return back()->with('error', 'Collaborateur existe deja');
    }

    // Create the collaborateur and assign it to the logged-in user
    $collaborateur = new Collaborateur([
        'email' => $request->input('email'),
        'adresse' => $request->input('adresse'),
        'nom' => $request->input('nom'),
        'siteWeb' => $request->input('siteWeb'),
    ]);

    // Save the collaborateur with the relationship to the user
    $user->collaborateurs()->save($collaborateur);

    return back()->with('success', 'Collaborator ajouté avec succes');
}

public function showCollaborateurs()
{
    $user = auth()->user();
    $collaborateurs = $user->collaborateurs;
    return view('frontOffice/MarketPlace/MyCollaborateurs', ['collaborateurs' => $collaborateurs]);
}


public function destroy(Collaborateur $Collaborateur)
{
    $Collaborateur->users()->detach();

    $Collaborateur->delete();

    return back()->with('success', 'Suppression avec succès');
}





public function edit(Collaborateur $Collaborateur)
{
    return view('frontOffice.MarketPlace.UpdateCollaborateur', compact('Collaborateur'));
}

public function update(Request $request, Collaborateur $Collaborateur)
{
    $request->validate([
        'nom' => 'required|string',
        'adresse' => 'required|string',
        'email' => 'required|email',
        'siteWeb' => 'nullable|url',
    ], [
        'email.required' => 'Email is required',
        'adresse.required' => 'Address is required',
        'nom.required' => 'Name is required',
    ]);

    $data = $request->all();

    // Update the collaborateur data
    $Collaborateur->update($data);

    return back()->with('success', 'Collaborateur updated successfully');
}





}
