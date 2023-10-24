<?php

namespace App\Http\Controllers;
use App\Models\Projet_Environnemental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetEnvController extends Controller
{
    // Enregistre un nouveau projet environnemental dans la base de données
    public function store(Request $request)
    {
        
        // Validation des données du formulaire
       $request->validate([
            'titre' => 'required|string',
            'description' => 'required',
            'objectif' => 'required|string|max:255',
            'ressources' => 'required|string|max:255',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'titre.required' => 'Titre obligatoire',
            'description.required' => 'Description est obligatoire',
            'objectif.required' => 'Lieu est obligatoire',
            'ressources.required' => 'Categorie est obligatoire',
            'image.required' => 'Categorie est obligatoire',
        ]);

      
        if ($image = $request->file('image')) {

            $destinationPath = 'upload/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);
        }
        $newProjet = new Projet_Environnemental([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'objectif' => $request->input('objectif'),
            'ressources' => $request->input('ressources'),
            'etat' => $request->input('etat'),
            'image' => $profileImage,
        ]);
        // Création du projet environnemental
        $newProjet->user_id = auth()->id();
        $newProjet->save();
        return redirect()->route('MyprojetEnv')->with('success', 'Le projet environnemental a été créé avec succès.');
    }

    //ShowProjectDetails
    public function showDetails($id)
    {
    $projet = Projet_Environnemental::findOrFail($id);
    $tasks = $projet->taches;
    return view('frontOffice/projetDetails', ['projet' => $projet, 'tasks' => $tasks]);
    }
    
    //show projects
    public function showProjects()
    {
        $projets = Projet_Environnemental::with('user')->get();
        return view('frontOffice/projetsEnv', ['projets' => $projets]);
    }
 
    //delete project
    public function supprimerProjet($id)
    {
        $projet = Projet_Environnemental::find($id);
        if ($projet) {
            $projet->delete();
        }
        return redirect()->route('MyprojetEnv');
    }

    public function  showMyproject()
    {
        $userId = auth()->id();
        $projets = Projet_Environnemental::where('user_id', $userId)->get();
        return view('frontOffice/projetEnv/projetenvUser', ['projets' => $projets]);
    }

   //Sauvegarder Modification Projet
    public function sauvegarderModificationProjet(Request $request, $id)
    {
        $projet = Projet_Environnemental::find($id);
        if ($projet) {
            // Valider les données du formulaire
            $validatedData = $request->validate([
                'titre' => 'required',
                'description' => 'required',
                'objectif'=>'required',
                'ressources'=>'required',
                'etat'=>'required'
            ]);

            // Mettre à jour les propriétés du projet avec les nouvelles valeurs
            $projet->titre = $validatedData['titre'];
            $projet->objectif = $validatedData['objectif'];
            $projet->description = $validatedData['description'];
            $projet->ressources = $validatedData['ressources'];
            $projet->etat = $validatedData['etat']; 
            
            // update picture
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                
                // Define the storage path (you can customize this as needed)
               $storagePath = 'upload/';

                if (!file_exists($storagePath)) {
                    mkdir($storagePath, 0755, true);
                }
            
                // Generate a unique filename for the uploaded image
                $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();
            
                // Move the uploaded image to the specified storage path with the unique filename
                $image->move($storagePath, $imageName);
            
                // Assign the image filename to the project model's property
                $projet->image = $imageName;
            }
            
            // Enregistrer les modifications
            $projet->save();
            // Rediriger vers la page des projets environnementaux après la modification
            return redirect()->route('MyprojetEnv')->with('success', 'Le projet environnemental a été modifier avec succès.');
        }

        // Rediriger vers une page d'erreur si le projet n'est pas trouvé
        return redirect()->back()->with('error', 'Le projet n\'existe pas.');
    }
    
    //Find The Project T oUpdate
    public function modifierProjet($id)
    {
        $projet = Projet_Environnemental::find($id);

        return view('frontOffice/projetEnv/formUpdateProject', ['projet' => $projet]);
    }

    //search
  


}
