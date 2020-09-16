@extends('layouts.app')

@section('content')

<body id="register">

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger pt-2" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <div class="container d-flex justify-content-center mt-5">
        <div class="content d-flex p-5">
            <div class="p-3 mr-3">
                <center>
                <img src="{{ asset('assets\img\logoA-Riendo.png') }}" alt="logotipo de página" width="150px"/><br>
                <div class="register-title register-m-b-md" alt="Únete a nosotros">
                    <h1 class="title mt-3">¡Únete a nosotros!
                    </h1>
                </div>
                </center>
            </div>
            <form id="validationForm" action="{{ route('register')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                <h3 class="mb-4">Registra tus datos</h3>
                <div class="row">
                    <div class="col">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" alt="Sección Nombre personal" required>
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" name ="surname" class="form-control" id="surname" placeholder="Apellido" alt="Sección Apellido personal" required>
                        <div class="invalid-feedback">
                            Panel vacío
                        </div>
                    </div>
                </div>
                <br>
                <div class="register-form-group">
                    <input type="text" name = "userName" class="form-control" id="username" placeholder="Nombre de usuario" alt="Sección Nombre de usuario" required>
                    <div class="invalid-feedback">
                        Utiliza un nombre de usuario de 6 a 30 caracteres
                    </div>
                </div>
                <br>
                <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" alt="Sección Correo electrónico" required>
                <div class="invalid-feedback">
                    Dirección de correo inválida
                </div>
                <br>
                <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" alt="Sección Contraseña" required>
                <div class="invalid-feedback">
                    Utiliza una contraseña de 6 a 15 caracteres
                </div>
                <br>
                <div class="custom-file mb-3">

                    <input type="file" accept='image/*' class="custom-file-input" id="customFileLang" lang="es" name="userImage" >
                    <label style="border-radius: 30px 10px 10px 30px;" class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Registrarse" alt="Sección Registrarse">
                </div>
                
              </form>
        </div>
    </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script>
    bsCustomFileInput.init()

    var btn = document.getElementById('btnResetForm')
    var form = document.querySelector('form')
    btn.addEventListener('click', function () {
    form.reset()
    })
</script>
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

@endsection



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

