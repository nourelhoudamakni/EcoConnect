<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Projet_Environnemental;
use App\Enums\EtatProjetEnum;
class AdminProjetController extends Controller

{
    public function showDetails($id)
    {
    $projet = Projet_Environnemental::findOrFail($id);
    $tasks = $projet->taches;
    return view('backOffice/AdminProjetEnvDetails', ['projet' => $projet, 'tasks' => $tasks]);
    }

    public function showAllProject()
    {
        $projects = Projet_Environnemental::with('user')->get();
        return view('backOffice/tables-basic', ['projects' => $projects]);
    }

    public function destroy(Projet_Environnemental $project)
    {
        $project->delete();
        $projects = Projet_Environnemental::with('user')->get();
        return view('backOffice/tables-basic', ['projects' => $projects])->with('success', 'Le projet a été supprimé avec succès.');
    }
    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $projects = Projet_Environnemental::where('titre', 'like', '%'.$search.'%')->get();
        return view('backOffice/tables-basic', ['projects' => $projects]);
    }
}
