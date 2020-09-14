<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registro</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,700;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<x-navbar login=true></x-navbar>
<body id="register">

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <div class="container flex-center position-ref register-full-height">
        <div class="content">
            <center>
            <img src="{{ asset('assets\img\logoA-Riendo.png') }}" alt="logotipo de página" width="150px"/><br>
            </center>
            <div class="register-title register-m-b-md ">
                ¡Únete a nosotros!
            </div>
            <form id="validationForm" action="{{ action('UserContr@store')}}" method="post" class="needs-validation" novalidate>
                <div class="register-form-group">
                    <input type="text" name = "userName" class="form-control" id="username" placeholder="Nombre de usuario" required>
                    <div class="invalid-feedback">
                        Utiliza un nombre de usuario de 6 a 30 caracteres
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" name ="surname" class="form-control" id="surname" placeholder="Apellido" required>
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                </div>
                <br>
                <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                <div class="invalid-feedback">
                    Dirección de correo inválida
                </div>
                <br>
                <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>
                <div class="invalid-feedback">
                    Utiliza una contraseña de 6 a 15 caracteres
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Registrarse">
                </div>
              </form>
        </div>
    </div>
    
</body>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>