<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,700;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <title>A-Riendo - Login</title>
</head>

<body id="login">
    <div class="d-flex align-items-center pt-5 ml-5 mb-4">
        <img src="{{ asset('assets\img\logoA-Riendo.png') }}" alt="" width="100px" />
        <div class="title">
            <h1>Compra lo que necesites,</h1>
            <h1>arriéndalo todo</h1>
        </div>
    </div>
    <div class="flex-column col-10">
        <div class="d-flex justify-content-center">
            <svg id="Capa_1" data-name="Capa 1" width="90px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 90">
                <title>circles</title>
                <circle cx="37" cy="48" r="13" fill="#095d6a" />
                <circle cx="81" cy="48" r="13" fill="#f57b51" />
                <circle cx="124" cy="48" r="13" fill="#fbbc58" />
            </svg>
        </div>
        
        <div class="d-flex justify-content-center">
            <div class="card loginback" style="width: 14rem;">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-1 mb-2">
                        <h5>Login</h5>
                    </div>
                    <form action="/pepe" method="get">
                        <div class="form-group d-flex flex-column">
                            <input type="email" class="form-input mt-2 mb-4" id="email"
                                aria-describedby="emailHelp" placeholder="Correo electrónico">
                            <input type="password" class="form-input" id="password" aria-describedby="emailHelp"
                                placeholder="Contraseña">

                            <small id="emailHelp" class="form-text text-muted">
                                <a href="{{  route('auth.register')  }}" style="font-size: 10px" >¿No tienes una cuenta?</a>
                            </small>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>