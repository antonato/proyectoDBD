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
    <title>Registro</title>
</head>





<body id="register">
    <div class="flex-column col-10">
        <div class="d-flex justify-content-center">
            <h1>Registrar usuario</h1>
        </div>
        <div class="d-flex justify-content-center">
            <form method="POST" action="{{ route('user.store') }}">
                <div class="d-flex flex-column justify-content-center">
                    <input type="text" name="username" placeholder="Nombre de usuario"><br>
                    <input type="text" name="name" placeholder="Nombre"><br>
                    <input type="text" name="surname" placeholder="Apellido"><br>
                    <input type="text" name="password" placeholder="Contraseña"><br>
                    <input type="text" name="password" placeholder="Repetir Contraseña"><br>
                    <input type="text" name="email" placeholder="Email"><br>
                </div>

                <div class="d-flex justify-content-center">
                    <button>¡Registrarse!</button>
                </div>
                
    
            </form>
        </div>
    </div>
</body>
