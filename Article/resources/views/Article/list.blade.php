<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="row">
    <div class="col s12">
    <h1>liste article</h1>
    <a  href="/ajouter" class="btn btn-primary"></a>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($Articals as $artical)
    <tr>
      <th scope="row"></th>
      <td>{{ $artical->id }}</td>
      <td>{{ $artical->title }}</td>
      <td>{{ $artical->description }}</td>
      <td>
        <a href="" class="btn btn-info">modifier</a>
        <a href="" class="btn btn-danger">supprimer</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>