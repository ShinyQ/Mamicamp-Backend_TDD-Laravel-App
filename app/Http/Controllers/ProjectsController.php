<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
      $projects = Project::all();
      return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
      return view('projects.show', compact('project'));
    }

    public function store()
    {
        auth()->user()->projects()->create(request()->validate([
            'title'=>'required',
            'description' => 'required'
        ]));

      // Redirect
      return redirect('/projects');
    }
}
