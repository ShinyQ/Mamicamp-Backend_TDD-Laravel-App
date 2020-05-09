<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BirdBoard</title>
  </head>
  <body>
    <ul>
      <h1>BirdBoard</h1>
      @forelse($projects as $project)
        <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
        <br>
      @empty
        <li>No Data Yet</li>
      @endforelse
    </ul>
  </body>
</html>
