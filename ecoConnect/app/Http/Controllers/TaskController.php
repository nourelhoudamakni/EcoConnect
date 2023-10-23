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
        $task = new Tache;
        $task->titre = $request->input('titre');
        $task->description = $request->input('description');
        $task->date_debut = $request->input('start_date');
        $task->date_fin = $request->input('date_fin');
        $task->projet__environnemental_id = $projectId;
        $task->save();
        return redirect()->route('projetEnv')->with('success', 'La tache a été ajoutée avec succès.');
    }

    public function deleteTask($taskId)
    {
        $task = Tache::findOrFail($taskId);
        $task->delete();
        return redirect()->back()->with('success', 'Task deleted successfully');
    }

    public function updateTask(Request $request, $taskId)
    {
        $task = Tache::findOrFail($taskId);
        $task->titre = $request->input('titre');
        $task->description = $request->input('description');
        $task->date_debut = $request->input('start_date');
        $task->date_fin = $request->input('date_fin');
        $task->save();
        return redirect()->back()->with('success', 'Task updated successfully');
    }

    public function editTask($taskId)
    {
        $task = Tache::findOrFail($taskId);
        return view('frontOffice.editTask', ['task' => $task]);
    }
}
