<?php

namespace App\Http\Controllers;

use App\Models\ActeVolontaire;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Enums\CategorieActeEnum;

class ActeVolontaireController extends Controller
{
    public function index()
    {
        $acteVolontaires = ActeVolontaire::all();
        return view('frontOffice.Acte.acteVolontaire', compact('acteVolontaires'));
    }

    public function create()
    {
        return view('frontOffice.Acte.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'titre' => 'required|string',
        'categorie' => 'required',
        'description' => 'required|string|max:255',
        'date' => 'required|date_format:d-m-Y',
        'heure' => 'required',
        'images' => 'required|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Make sure 'images' is an array
        'lieu' => 'required|string',
    ]
    ,[
        'titre.required' => 'Titre obligatoire',

        'description.required' => 'Description est obligatoire',

        'lieu.required' => 'Lieu est obligatoires',

        'images.required' => 'Image est obligatoire',

        'categorie.required' => 'Categorie est obligatoire'
    ]);

    $date = \DateTime::createFromFormat('d-m-Y', $request->input('date'));
    $formattedDate = $date->format('Y-m-d');

    $data = $request->all(); // Get all form data

    $images = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . rand(1, 99) . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $images[] = $imageName;
        }
    }

    $data['images'] = json_encode($images);
    $data['date'] = $formattedDate;
    // Create the model with all the data
    $newActe = ActeVolontaire::create($data);

    return back()->with('success', 'Ajout avec succès');
}

public function show(ActeVolontaire $acteVolontaire)
{
    return view('frontOffice.Acte.show', compact('acteVolontaire'));
}

public function edit(ActeVolontaire $acteVolontaire)
{
    return view('frontOffice.Acte.edit', compact('acteVolontaire'));
}

public function update(Request $request, ActeVolontaire $acteVolontaire)
{
    $request->validate([
        'titre' => 'required|string',
        'categorie' => 'required',
        'description' => 'required|string|max:255',
        'date' => 'required|date_format:d-m-Y',
        'heure' => 'required',
        'lieu' => 'required|string',
    ], [
        'titre.required' => 'Titre obligatoire',
        'description.required' => 'Description est obligatoire',
        'lieu.required' => 'Lieu est obligatoire',
        'categorie.required' => 'Categorie est obligatoire',
    ]);

    $date = \DateTime::createFromFormat('d-m-Y', $request->input('date'));
    $formattedDate = $date->format('Y-m-d');

    $data = $request->all();

    if ($request->hasFile('images')) {
        $images = [];
        foreach ($request->file('images') as $image) {
            $imageName = time() . rand(1, 99) . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $images[] = $imageName;
        }
        $data['images'] = json_encode($images);
    }

    $data['date'] = $formattedDate;

    $acteVolontaire->update($data);

    return back()->with('success', 'Mise à jour avec succès');
}

public function destroy(ActeVolontaire $acteVolontaire)
{
    $acteVolontaire->delete();

    return back()->with('success', 'Suppression avec succès');
}

}
