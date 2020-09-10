<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registro</title>
    <style>
        .m-b-md {
                margin-bottom: 30px;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 60px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

</head>

@extends('layouts.app')
@section('content')
<body id="register">
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Registro uwu
            </div>
            <form action="{{ action('UserContr@store')}}" method="post">
                <div class="form-group">
                    <input type="text" name = "userName" class="form-control" id="username" placeholder="Nombre de usuario">
                    <div class="invalid-feedback">
                        Utiliza un nombre de usuario de 6 a 8 caracteres
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" name ="surname" class="form-control" id="surName" placeholder="Apellido">
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico">
                        <div class="invalid-feedback">
                            Dirección de correo inválida
                        </div>
                    </div>
                    <div class="col">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                        <div class="invalid-feedback">
                            Utiliza una contraseña de 6 a 15 digitos
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center"> 
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
              </form>
            <div class="flex-center flex-column">
                <a href="{{  route('auth.login')  }}"> Ir a login </a>
                <a href="{{  route('announcement')  }}"> Ir a publicación </a>
            </div>
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