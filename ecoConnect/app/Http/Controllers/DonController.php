<?php

namespace App\Http\Controllers;
use App\Models\Demande_de_Don;
use App\Models\ActeVolontaire;

use Illuminate\Http\Request;

class DonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('frontOffice.Acte.Don.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDon(Request $request,$idActe)
    {
        $request->validate([
            'titre' => 'required|string',
            'typeDon' => 'required',
            'description' => 'required|string|max:255',
            'dateCreation' => 'required|date_format:d-m-Y',
            'dateFin' => 'required|date_format:d-m-Y',
            'status' => 'required',

        ]
        ,[
            'titre.required' => 'Titre obligatoire',

            'description.required' => 'Description est obligatoire',

            'typeDon.required' => 'TypeDon est obligatoire',

            'status.required' => 'Status est obligatoire'
        ]);

        $datecreation = \DateTime::createFromFormat('d-m-Y', $request->input('dateCreation'));
        $formattedDate1 = $datecreation->format('Y-m-d');


        $datefin = \DateTime::createFromFormat('d-m-Y', $request->input('dateFin'));
        $formattedDate2 = $datefin->format('Y-m-d');

        $newDon = new Demande_de_Don([
            'titre' => $request->input('titre'),
            'typeDon' => $request->input('typeDon'),
            'description' => $request->input('description'),
            'dateCreation' => $formattedDate1,
            'dateFin' => $formattedDate2,
            'status' => $request->input('status'),

        ]);
        $newDon->acte_volontaire_id=$idActe;
        $newDon->save();
        return redirect()->route('Acte.details', $idActe)->with('success', 'Ajout avec succés');

        //  return back()->with('success', 'Ajout avec succès');

        // $don = Demande_de_Don::create($request->all());

        // // Assuming 'on_volontaire_id' is the foreign key for the relationship
        // $acteVolontaire = ActeVolontaire::findOrFail($request->acte_volontaire_id);

        // // Associate the Don with the ActeVolontaire
        // $acteVolontaire->dons()->save($don);

        // return response()->json($don, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $don = Demande_de_Don::findOrFail($id);
        $don->update($request->all());

        return response()->json($don, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $don = Demande_de_Don::findOrFail($id);

        $don->delete();

        return response()->json(['message' => 'Don deleted successfully'], 200);
    }
}
