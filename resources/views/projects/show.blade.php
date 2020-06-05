@extends('layouts.app')

@section('content')
  <header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-center w-full">
      <p class="text-grey text-sm font-normal">
        <a href="/projects" class="text-grey text-sm font-normal no-underline">My Projects</a> / {{ $project->title }}
      </p>

      <a href="/projects/create" class="button">New Project</a>
    </div>
  </header>

  <main>
    <div class="lg:flex -mx-3">
      <div class="lg:w-3/4 px-3 mb-6">
        <div class="mb-8">
          <h2 class="text-lg text-grey font-normal mb-3">Tasks</h2>

          <div class="mb-3 rounded overflow-hidden shadow bg-white px-6 py-4">
                Lorem Ipsum
          </div>
          <div class="mb-3 rounded overflow-hidden shadow bg-white px-6 py-4">
                Lorem Ipsum
          </div>
          <div class="mb-3 rounded overflow-hidden shadow bg-white px-6 py-4">
                Lorem Ipsum
          </div>
          <div class="rounded overflow-hidden shadow bg-white px-6 py-4">
                Lorem Ipsum
          </div>

        </div>

        <div class="">
          <h2 class="text-lg text-grey font-normal mb-3">General Notes</h2>
          <textarea style="min-height:200px" class="w-full rounded overflow-hidden shadow bg-white px-6 py-4">Lorem Ipsum</textarea>
        </div>
      </div>

      <div class="lg:w-1/4 px-3">
        @include('projects.card')
      </div>
    </div>
  </main>
@endsection
