<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet_Environnemental;
use App\Models\Tache;



class TaskController extends Controller
{
    
    public function create($project)
    {
        return view('frontOffice/addTache', ['project' => $project]);
    }

    public function store(Request $request, $projectId)
{
    $validatedData = $request->validate([
        'titre' => 'required',
        'description' => 'required',
        'date_debut' => 'required|date',
        'date_fin' => 'required|date|after:date_debut',
    ]);

    $task = new Tache;
    $task->titre = $validatedData['titre'];
    $task->description =$validatedData['description'];
    $task->date_debut = $validatedData['date_debut'];
    $task->date_fin =$validatedData['date_fin'];
    $task->projet__environnemental_id = $projectId;
    $task->save();

    return redirect()->route('projet.details', ['id' => $task->projet__environnemental_id])->with('success', 'Le task environnemental a été ajoutée avec succès.');
}

    public function deleteTask($taskId)
    {
        $task = Tache::findOrFail($taskId);
        $task->delete();
        return redirect()->back()->with('success', 'Task deleted successfully');
    }

    public function updateTask(Request $request, $taskId)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);
    
        $task = Tache::findOrFail($taskId);
        $task->titre = $request->input('titre');
        $task->description = $request->input('description');
        $task->date_debut = $request->input('date_debut');
        $task->date_fin = $request->input('date_fin');
        $task->save();
    
        return redirect()->route('projet.details', ['id' => $task->projet__environnemental_id])->with('success', 'Le task environnemental a été modifié avec succès.');
    }


    public function editTask($taskId)
    {
        $task = Tache::findOrFail($taskId);
        return view('frontOffice.editTask', ['task' => $task]);
    }
}
