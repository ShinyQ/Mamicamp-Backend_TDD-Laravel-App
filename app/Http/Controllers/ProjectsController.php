<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
      $projects = auth()->user()->projects;
      return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
      if(auth()->user()->isNot($project->owner)){
         abort(403);
      }

      return view('projects.show', compact('project'));
    }

    public function store()
    {
      auth()->user()->projects()->create(request()->validate([
          'title'=>'required',
          'description' => 'required'
      ]));

      return redirect('/projects');
    }
}
