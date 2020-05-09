<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BirdBoard</title>
  </head>
  <body>
    <ul>
      @foreach($projects as $project)
        <li>{{ $project->title }}</li>
        <li>{{ $project->description }}</li>
      @endforeach
    </ul>
  </body>
</html>
