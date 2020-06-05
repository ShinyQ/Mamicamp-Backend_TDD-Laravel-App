@extends('layouts.app')

@section('content')
<form class="container" action="/projects" method="POST" style="padding-top: 40px">
  @csrf
  <h1>Create A Project</h1>
  <div class="heading is-1">
    <label class="label" for="">title</label>
    <div class="control">
      <input type="text" class="input" name="title" value="" placeholder="Title">
    </div>
  </div>

  <div class="field">
    <label class="label" for="">Description</label>
    <div class="control">
      <textarea name="description" class="textarea"></textarea>
    </div>
  </div>

  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link" name="button">Create Project</button>
      <a href="/projects">Back</a>
    </div>
  </div>
</form>
@endsection
