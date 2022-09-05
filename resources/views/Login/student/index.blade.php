<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <main>
        <section class="loginContainer mx-auto shadow-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 px-4 py-4">
                        <header>
                        </header>
                        <form class="mt-3" method="POST" action="/insertLogin/student">
                            @csrf
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">nim</label>
                                <input type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                                    <span class="input-group-text">
                                        <i id="togglePassword" class="bi bi-eye-slash-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-success" name="employes-auth">Masuk</button>
                        </form>
                    </div>
                    <div class="col-md-6 px-4 py-4 d-none d-sm-block bgPrimary">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>