@extends('layouts.app')

@section('content')
<header class="flex items-center mb-3 py-4">
  <div class="flex justify-between items-center w-full">
    <h2 class="text-grey text-sm font-normal">My Project</h2>
    <a href="/projects/create" class="button">New Project</a>
  </div>
</header>

<main class="lg:flex lg:flex-wrap -mx-3">
    @forelse($projects as $project)
      <div class="lg:w-1/3 px-3 pb-6">
        @include('projects.card')
      </div>
    @empty
      <div>No Project Yet</div>
    @endforelse
</main>
@endsection
