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



<body id="register">
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Registro uwu
            </div>
                
            <form class="needs-validation" novalidate> 
                <div class="form-group">
                    <input type="username" class="form-control" id="username" placeholder="Nombre de usuario" required>
                    <div class="invalid-feedback">
                        Utiliza un nombre de usuario de 6 a 8 caracteres
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" required>
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido" required>
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                        <div class="invalid-feedback">
                            Dirección de correo inválida
                        </div>
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Contraseña" required>
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
                <a href="{{  route('login')  }}"> Ir a login </a>
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
