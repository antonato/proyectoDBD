<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,700;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <title>A-Riendo - Login</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre Anuncio</label>
            <input class="form-control" id="exampleFormControlInput1" placeholder="¿Qué arriendas?">
        </div>
        <div class="form-group" id="Categoria">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Inmuebles</option>
            <option>Muebles</option>
            <option>Herramientas</option>
            <option>Vehículos</option>
            <option>Artículos</option>
            </select>
            <div class="form-row">
                <div class="col-7">
                <label for="exampleFormControlSelect1">Precio</label>
                <input type="text" class="form-control" placeholder="Precio">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCurrency">Divisa</label>
                    <select id="inputCurrency" class="form-control">
                        <option selected>Elegir...</option>
                        <option>CLP</option>
                        <option>USD</option>
                        <option>EUR</option>
                    </select>
                </div>
                <div class="col-7">
                <label for="exampleFormControlSelect1">Tiempo por precio</label>
                <input type="text" class="form-control" placeholder="Tiempo por precio">
                </div>
            </div>


        <div class="form-group" id="Descripción">
            <label for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02">Escoger Imagen</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text" id="">Subir</span>
            </div>
            </div>
        <div>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
        </form>
    </div>
    
</body>


</html>