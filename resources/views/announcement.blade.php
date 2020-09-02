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
    <title>A-Riendo</title>
</head>

<body>

    <x-navbar login=true></x-navbar>

    {{-- <h1>Anuncio {{$data[0]}} </h1> --}}

    <div class="d-flex justify-content-center w-100">

        <div class="flex-column w-75">

            <div id="navigation" class="mt-2 mb-2">
                <h5 id="text" class="ml-4 pt-2 pb-2">Aquí va la navegación</h5>
            </div>


            <div id="content" class="h-100 p-2">

                <div  class="d-flex flex-wrap mt-4 mb-2 justify-content-between justify-content-sm-center">
                    
                    <div class="col-7 m-0 p-0">
                        <div class="w-100 h-100 d-flex flex-wrap">
                            <div class="bg-success order-1 w-75">
                                Imagen grande
                            </div>
                            <div class="bg-dark order-0 mr-2 w-15">
                                Imagen pequeña
                            </div>
                        </div>
                    </div>
        
                    <div class="orange col-md-4 col-sm-12 m-0">
                        <div class="d-flex align-items-center">
                            <img class="mt-2" src="{{ asset('assets\icons\place.svg') }}" alt="" width="20px" height="20px"/>
                            <p class="mt-2 mb-0 ml-1">{{$data[2]->region}}</p>
                        </div>
                        <h1>{{$data[0]->NameProduct}} </h1>
                        <p>{{$data[0]->Description}}</p>
                        <p class="mb-0">Precio</p>
                        <p id="price" class="mt-0 mb-0">${{$data[0]->Price}}</p>
                        <div>
                            <p>Icon</p>
                            <p>Arrendado por</p>
                            <p>{{$data[1]->name}} {{$data[1]->surname}}</p>
                            <p>Calificación</p> 
                            <p>Generar ovejas</p>    
                        </div>
                    </div>

                </div>
            
                <div class="d-flex w-100 justify-content-center">
                    <div class="order-1 button col-md-4 mt-2 justify-content-center">
                        <button>Arrienda</button>
                    </div>
                    <div id="comments" class="order-0 col-md-7 orange mt-2 p-0">
                        <div class="d-flex align-items-center">
                            <strong><p class="ml-3 mt-2">Comentarios</p></strong>
                            <img class="mb-2 ml-1" src="{{ asset('assets\icons\comment.svg') }}" alt="" width="20px" height="20px" />
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div id="footer">
    
        </div>
    </div>
    

</body>

</html>

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