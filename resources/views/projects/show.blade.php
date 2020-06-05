@extends('layouts.app')

@section('content')
  <header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
      <p class="text-grey text-sm font-normal">
        <a href="/projects" class="text-grey text-sm font-normal no-underline hover:underline">My Projects</a> / {{ $project->title }}
      </p>
      <a href="/projects/create" class="button">New Project</a>
    </div>
  </header>

  <main>
    <div class="lg:flex -mx-3">
      <div class="lg:w-3/4 px-3 mb-6">
        <div class="mb-8">
          <h2 class="text-lg text-grey font-normal mb-3">Tasks</h2>
          @foreach ($project->tasks as $task)
            <div class="mb-3 rounded overflow-hidden shadow bg-white px-6 py-4">
                  {{ $task->body }}
            </div>
          @endforeach
        </div>

        <div class="">
          <h2 class="text-lg text-grey font-normal mb-3">General Notes</h2>
          <textarea style="min-height:200px" class="w-full rounded overflow-hidden shadow bg-white px-6 py-4">Lorem Ipsum</textarea>
        </div>
      </div>

      <div class="lg:w-1/4 px-3 lg:py-8">
        @include('projects.card')
      </div>
    </div>
  </main>
@endsection
