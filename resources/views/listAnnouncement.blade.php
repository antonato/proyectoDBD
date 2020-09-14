<html lang="es">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/listA.css')}}"/>
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

    <div class="d-flex justify-content-center w-100">

        <div class="flex-column w-75">
            <div id="navigation" class="mt-2 mb-2" alt="Barra de Navegación">
                <h5 alt="Barra de Navegación" id="text" class="ml-4 pt-2 pb-2">
                    <a href="">Inicio</a>
                </h5>
            </div>

            <div alt="Contenido" id="content" class="p-2 d-flex">

                <div id="category" alt="categoría" class="yellow w-25 h-75">
                    <div id="group-category" class="d-flex flex-column">
                        <section class="mt-2 mr-2 ml-2 pt-2 pr-2 pl-2 p-0 mb-0 d-flex align-items-center justify-content-center">
                            <strong><h4 class="title-category">CATEGORÍAS</h4></strong>
                        </section>
                        <a href="{{ action('AnnouncementContr@index') }}" class="item_add">
                        <div class="ind-category d-flex align-items-center">
                            <img class="mr-3 mb-0" src="{{ asset('assets\icons\new.svg') }}" alt="sección lo último" width="33px" height="33px" />
                            <h5>Lo Último</h5>
                        </div>
                        </a>
                        <a href="{{ action('AnnouncementContr@category', 'Herramientas') }}" class="item_add">
                            <div class="ind-category d-flex align-items-center">
                                <img class="mr-3 mb-0" src="{{ asset('assets\icons\tools.svg') }}" alt="sección herramientas" width="33px" height="33px" />
                                <h5>Herramientas</h5>
                            </div>
                        </a>
                        <a href="{{ action('AnnouncementContr@category', 'Inmobiliaria') }}" class="item_add">
                        <div class="ind-category d-flex align-items-center">
                            <img class="mr-3 mb-0" src="{{ asset('assets\icons\build.svg') }}" alt="sección Inmobiliaria" width="33px" height="33px" />
                            <h5>Inmobiliaria</h5>
                        </div>
                        </a>      
                        <a href="{{ action('AnnouncementContr@category', 'Vehiculos') }}" class="item_add">
                        <div class="ind-category d-flex align-items-center">
                            <img class="mr-3 mb-0" src="{{ asset('assets\icons\movil.svg') }}" alt="sección vehículos" width="33px" height="33px" />
                            <h5>Vehículos</h5>
                        </div>
                        </a>
                        <a href="{{ action('AnnouncementContr@category', 'Espacios') }}" class="item_add">
                        <div class="ind-category d-flex align-items-center">
                            <img class="mr-3 mb-0" src="{{ asset('assets\icons\party.svg') }}" alt="sección espacios" width="33px" height="33px" />
                            <h5>Espacios</h5>
                        </div>
                        </a>
                        <a href="{{ action('AnnouncementContr@category', 'Articulos') }}" class="item_add">
                        <div class="ind-category d-flex align-items-center mb-4 round">
                            <img class="mr-3 mb-0" src="{{ asset('assets\icons\service.svg') }}" alt="sección artículos" width="33px" height="33px" />
                            <h5>Artículos</h5>
                        </div>
                        </a>
                    </div>
                </div>
                
                <div>
                    <div id="filter" class="p-2 ml-3 d-flex align-items-center">
                        <h5>Ordenar Por</h5>
                        <select name="Ordenar" id="sort" class="ml-3">
                            <option value="" alt="fecha">Fecha</option>
                            <option value="" alt="precio">Precio</option>
                            <option value="" alt="lugar">Lugar</option>
                        </select>
                    </div>
                    <div class="d-flex p-2">
                        <div class="flex-wrap">
                            @foreach ($announcement as $item)
                                <hr class="m-0">
                                <div class="d-flex mt-2 mb-2 announcement justify-content-between w-100 align-items-center">
                                    <div class="d-flex">
                                        <div class="col-3">
                                            <img class="w-100" src="{{$item->ImageFormat}}" alt="Imagen pequeña del anuncio">
                                        </div>
                                        <div>
                                            <h6 alt="{{$item->NameProduct}}">{{$item->NameProduct}}</h6>
                                            <h5 class="price" alt="{{$item->Price}}">${{$item->Price}}</h5>
                                            <div class="d-flex align-items-center">
                                                <img class="mt-0" src="{{ asset('assets\icons\place.svg') }}" alt="" width="10px" height="10px"/>
                                                <p class="mt-0 mb-0 ml-1" style="color: #095D6A; font-size: 10px; font-weight: 600;">
                                                    @php
                                                        echo \App\Http\Controllers\AnnouncementContr::region($item->id);
                                                    @endphp
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mr-3 col-2">
                                        <div class="button mt-2 justify-content-center w-75">
                                            <a href="/announcement/{{ $item->id }}">
                                                <button alt="botón ver">Ver</button>
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{$announcement ?? ''->links()}}
                </div>

            </div>

        </div>
    </div>

    {{-- {!! $announcement ?? ''->render() !!} --}}

</html>

