<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborateur;

class CollaborateurController extends Controller
{
    //
    public function create()
    {
        return view('collaborateurs.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'adresse' => 'required|string',
        'nom' => 'required|string',
        'siteWeb' => 'nullable|url',
    ], [
        'email.required' => 'Email obligatoire',
        'adresse.required' => 'Adresse est obligatoire',
        'nom.required' => 'Nom est obligatoire',
    ]);

    Collaborateur::create($request->all());

    return back()->with('success', 'Collaborateur ajouté avec succès');
}

}
