<?php

namespace App\Http\Controllers;

use App\Models\ActeVolontaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Enums\CategorieActeEnum;
use Illuminate\Support\Facades\Auth;

class ActeVolontaireController extends Controller
{
    // public function index()
    // {
    //     $acteVolontaires = ActeVolontaire::all();
    //     return view('frontOffice.Acte.show', compact('acteVolontaires'));
    // }
    public function show()
    {
        $userId = auth()->id();

    // Retrieve ActeVolontaire records where the organizer_id is NOT the authenticated user's ID
    $actes = ActeVolontaire::where('organizer_id', '!=', $userId)->get();

    return view('frontOffice/Acte/show', ['actes' => $actes]);
    }

    public function showMesActes()
    {
        $userid=auth()->id();
        $actes = ActeVolontaire::where('organizer_id', $userid)->get();
        return view('frontOffice/Acte/mesActes', ['actes' => $actes]);
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
        'image' => 'required',
        'lieu' => 'required|string',
    ]
    ,[
        'titre.required' => 'Titre obligatoire',

        'description.required' => 'Description est obligatoire',

        'lieu.required' => 'Lieu est obligatoires',

        'image.required' => 'Image est obligatoire',

        'categorie.required' => 'Categorie est obligatoire'
    ]);

    $date = \DateTime::createFromFormat('d-m-Y', $request->input('date'));
    $formattedDate = $date->format('Y-m-d');


    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Define the storage path (you can customize this as needed)
        $storagePath = 'public/images';

        // Generate a unique filename for the uploaded image
        $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();

        // Move the uploaded image to the specified storage path with the unique filename
        $image->move($storagePath, $imageName);

        // Save the image's filename (or full path, depending on your needs) in your data array

    } else {
        // Handle the case where no file was uploaded
    }

    $newActe = new ActeVolontaire([
        'titre' => $request->input('titre'),
        'categorie' => $request->input('categorie'),
        'description' => $request->input('description'),
        'heure' => $request->input('heure'),
        'lieu' => $request->input('lieu'),
        'image' => $imageName,
        'date' => $formattedDate,

    ]);


    // Create the model with all the data
    $newActe->organizer_id = auth()->id();
        $newActe->save();

    return back()->with('success', 'Ajout avec succès');
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

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Define the storage path (you can customize this as needed)
        $storagePath = 'public/images';

        // Generate a unique filename for the uploaded image
        $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();

        // Move the uploaded image to the specified storage path with the unique filename
        $image->move($storagePath, $imageName);

        // Save the image's filename (or full path, depending on your needs) in your data array
        $data['image'] = $imageName;
    } else {
        // Handle the case where no file was uploaded
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

public function detailsActe($id)
    {
        $acte = ActeVolontaire::find($id);
        $dons=$acte->dons;
        return view('frontOffice.Acte.detailsActe',['acte' => $acte,'dons' => $dons]);    }

}
