<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
  </head>
  <body>
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
        </div>
      </div>
    </form>
  </body>
</html>
