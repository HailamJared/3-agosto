<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:yellow;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history">HISTORY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="photos">PHOTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="song">SONG</a> <div class="btn-group">
  <button class="btn btn-secondary btn-lg" type="button">
    buscar
  </button>
  <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<hr>
<!-- end navbar -->
<div class="container">
    <div class="row">
        <div class="col-md-3" style="background-color: red">
        <br><br>
        <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    METALLICA
    <span class="badge bg-primary rounded-pill">25</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    SLIPKNOT
    <span class="badge bg-primary rounded-pill">18</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    IRON MAIDEN
    <span class="badge bg-primary rounded-pill">15</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    KRAKEN
    <span class="badge bg-primary rounded-pill">12</span>
  </li>
</ul>
<br><br>
        </div>
        <div class="col-md-9", style="background-color:indigo">
            @yield ('contenido')
        </div>
    </div>
</div>
<br/>
<hr>
<footer style="background-color:dimgrey">
<p aling='center'>
 Todos los derechos reservados (@)
</p>
</footer>
</body>
</html>
