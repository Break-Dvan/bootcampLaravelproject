<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($project_id = null)
    {
        if (!$project_id) {
            echo 'Helaas, dit gaat niet werken!';
        }
        else {
            $project = Project::find($project_id);
            return view('tasks.create', ['project_id'=>$project_id]);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'days' => 'required',
            'hours' => 'required',
            'project_id' => 'required'
        ]);

        Task::create($request->all());

        $project_id = $request->project_id;
        // terug naar het project vanwaar de taak is aangemaakt.
        return redirect()->route('projects.show', $project_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
