<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        {{-- <link rel="stylesheet" href="css/custom.css"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @can('admin')
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/matkul">Mata Kuliah</a>
        </li>
        @endcan
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/krs">KRS</a>
        </li>
        </ul>
    </div>
    <div class="d-flex" role="search">
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-success">Logout</button>
        </form>
        
    </div>
    </div>
</nav>
<div class="container mt-5">
   @yield('container')
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>