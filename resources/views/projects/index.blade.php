@extends('layouts.app')

@section('content')
  <div class="flex items-center">
    <h1 class="mr-auto">BirdBoard</h1>
    <a href="/projects/create">New Project</a>
  </div>
  <ul>
    @forelse($projects as $project)
      <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
    @empty
      <li>No Data Yet</li>
    @endforelse
  </ul>
@endsection
