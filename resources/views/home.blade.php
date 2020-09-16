@extends('components.navbar')

@section('content')

@if($status ?? '' == 'Success!')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Excelente!</strong> Completaste el registro exitosamente!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<?php
$nav_last = '';
$nav_her = '';
$nav_in = '';
$nav_ve = '';
$nav_ar = '';
$nav_es = '';
if (Request::is('/'))
{
    $nav_last = 'active';
}
elseif (Request::is('home/Herramientas')) {
    $nav_her = 'active';
}
elseif (Request::is('home/Inmobiliaria')) {
    $nav_in = 'active';
}
elseif (Request::is('home/Vehiculos')) {
    $nav_ve = 'active';
}
elseif (Request::is('home/Articulos')) {
    $nav_ar = 'active';
}
elseif (Request::is('home/Espacios')) {
    $nav_es = 'active';
}
?>


 
<div class="d-flex justify-content-center w-100">
    <div class="flex-column w-75">
        <div id="navigation" class="mt-1 mb-2" alt="Barra de Navegación">
            <h5 alt="Barra de Navegación" id="text" class="ml-4 pt-2 pb-2">
                <a href="">Inicio</a>
            </h5>
        </div>

        <div alt="Contenido" id="content" class="p-2 d-flex h-100">

            <div id="category" alt="categoría" class="yellow w-25 h-100">
                <div id="group-category" class="d-flex flex-column">
                    <section class="mt-2 mr-2 ml-2 pt-2 pr-2 pl-2 p-0 mb-0 d-flex align-items-center justify-content-center">
                        <strong><h4 class="title-category">CATEGORÍAS</h4></strong>
                    </section>
                    <a href="{{ action('AnnouncementContr@index') }}" class="item_add {{$nav_last}}">
                    <div class="ind-category d-flex align-items-center">
                        <img class="mr-3 mb-0" src="{{ asset('assets\icons\new.svg') }}" alt="sección lo último" width="33px" height="33px" />
                        <h5>Lo Último</h5>
                    </div>
                    </a>
                    <a href="{{ action('AnnouncementContr@category', 'Herramientas') }}" class="item_add {{$nav_her}}">
                        <div class="ind-category d-flex align-items-center">
                            <img class="mr-3 mb-0" src="{{ asset('assets\icons\tools.svg') }}" alt="sección herramientas" width="33px" height="33px" />
                            <h5>Herramientas</h5>
                        </div>
                    </a>
                    <a href="{{ action('AnnouncementContr@category', 'Inmobiliaria') }}" class="item_add {{$nav_in}}">
                    <div class="ind-category d-flex align-items-center">
                        <img class="mr-3 mb-0" src="{{ asset('assets\icons\build.svg') }}" alt="sección Inmobiliaria" width="33px" height="33px" />
                        <h5>Inmobiliaria</h5>
                    </div>
                    </a>       
                    <a href="{{ action('AnnouncementContr@category', 'Vehiculos') }}" class="item_add {{$nav_ve}}">
                    <div class="ind-category d-flex align-items-center">
                        <img class="mr-3 mb-0" src="{{ asset('assets\icons\movil.svg') }}" alt="sección vehículos" width="33px" height="33px" />
                        <h5>Vehículos</h5>
                    </div>
                    </a>
                    <a href="{{ action('AnnouncementContr@category', 'Espacios') }}" class="item_add {{$nav_es}}">
                    <div class="ind-category d-flex align-items-center">
                        <img class="mr-3 mb-0" src="{{ asset('assets\icons\party.svg') }}" alt="sección espacios" width="33px" height="33px" />
                        <h5>Espacios</h5>
                    </div>
                    </a>
                    <a href="{{ action('AnnouncementContr@category', 'Articulos') }}" class="item_add {{$nav_ar}}">
                    <div class="ind-category d-flex align-items-center mb-4 round">
                        <img class="mr-3 mb-0" src="{{ asset('assets\icons\service.svg') }}" alt="sección artículos" width="33px" height="33px" />
                        <h5>Artículos</h5>
                    </div>
                    </a>
                </div>
            </div> 
            
            <div class="d-flex h-100 flex-column">
                <div class="h-100">
                    <div id="filter" class="p-2 ml-3 d-flex align-items-center">
                        <h5 class="mr-3">Ordenar Por </h5>
                        <a class="mr-2 mb-1" style="color: #095D6A !important" href="?OrderBy=PublishedTime"> Fecha</a>
                        <h6>|</h6>
                        <a class="ml-2 mb-1" style="color: #095D6A !important" href="?OrderBy=Price">Precio</a>
                    </div>
                    <div class="d-flex p-2 w-100">
                        <div class="flex-wrap w-100">
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
                                            <p class="mt-0 mb-0 ml-1" style="color: #095D6A; font-size: 10px; font-weight: 600;">Publicado: {{ $item->PublishedTime }}</p>
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
                </div>
                <div id="#pagination" class="w-100 d-flex justify-content-center align-self-end">
                    {{$announcement->links()}}
                </div>
            </div>

        </div>

    </div>
</div>









@endsection

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