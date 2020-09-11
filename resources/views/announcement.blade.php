<html>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
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

   {{-- <h1>Anuncio {{$data[0]->Category}} </h1> --}}

    <div class="d-flex justify-content-center w-100">

        <div class="flex-column w-75">

            <div id="navigation" class="mt-2 mb-2" alt="Barra de Navegación">
                <h5 alt="Barra de Navegación" id="text" class="ml-4 pt-2 pb-2">
                    <a href="">Inicio</a>
                    >
                    <a href="">{{$data[0]->Category}}</a> 
                    > 
                    <a href="">{{$data[0]->NameProduct}}</a>
                </h5>
            </div>


            <div id="content" class="h-100 p-2" alt="Contenido">

                <div  class="d-flex flex-wrap mt-4 mb-2 justify-content-between justify-content-sm-center">
                    
                    <div class="container d-flex">
                        <div class="col-2 p-0">
                            <img class="w-100 mb-2 selected" src="{{$data[0]->ImageFormat}}" alt="Imagen grande del anuncio">
                        </div>
    
                        <div class="col-6">
                            <img class="w-100" src="{{$data[0]->ImageFormat}}" alt="Imagen grande del anuncio">
                            <div id="comments" class="order-0 w-100 orange mt-2 p-0">
                                <div class="d-flex align-items-center">
                                    <strong><p class="ml-3 mt-2">Comentarios</p></strong>
                                    <img class="mb-2 ml-1" src="{{ asset('assets\icons\comment.svg') }}" alt="" width="20px" height="20px" />
                                </div>
        
                                @foreach ($data[3] as $comment)
                                    
                                    <hr class="m-0">
                                    
                                    <div class="d-flex ml-3 mt-2 mb-2 align-content-center">
                                        <div class="d-flex align-items-center">
                                            <svg height="40" width="40">
                                                <circle cx="20" cy="20" r="20" stroke-width="3" fill="red" />
                                            </svg> 
                                        </div>
                                        <div class="ml-1 w-75">
                                            <strong><p class="mb-0" style="font-size:10px">{{$comment->user_id}}</p></strong>
                                            <p class="m-0" style="font-size:10px">{{$comment->content}}</p>
                                        </div>
                                        <div class="ml-2 mr-2">
                                            <strong><p style="font-size: 10px; margin:0">Calificación</p></strong>
                                            <div class="ml-1 d-flex align-items-center">
                                                <h1 class="m-0" style="color: #F57B51">{{$comment->qualification}}</h1>
                                                <img src="{{ asset('assets\icons\oveja.svg') }}" alt="" width="33px" height="33px" />
                                            </div>
                                        </div>
        
                                    </div>
                                @endforeach
        
                            </div> 
                        </div>

                        <div class="col-md-4 col-sm-12 p-0">
                            <div class="orange w-100 pl-3 pr-3 pb-3">
                                <div class="d-flex align-items-center">
                                    <img class="mt-2" src="{{ asset('assets\icons\place.svg') }}" alt="" width="15px" height="15px"/>
                                    <p class="mt-2 mb-0 ml-1" style="color: #095D6A; font-size: 12px; font-weight: 600;">{{$data[2]->region}}</p>
                                </div>
                                <h3 alt="Título Anuncio">{{$data[0]->NameProduct}} </h3>
                                <strong><p alt="Descripción" class="mb-0 reduce-font">Descripción</p></strong>
                                <p class="m-0" style="font-size: 15px">{{$data[0]->Description}}</p>
                                <strong><p alt="Precio" class="mb-0 mt-2 reduce-font">Precio</p></strong>
                                <h1 id="price" class="mt-0 mb-0">${{$data[0]->Price}}</h1>
                                <div class="d-flex flex-wrap mt-2">
                                    <div alt="Icono Arrendador" class="mb-2 mr-1">
                                        <svg height="40" width="40">
                                            <circle cx="20" cy="20" r="20" stroke-width="3" fill="red" />
                                        </svg> 
                                    </div>                            
                                    <div>
                                        <div class="d-flex">
                                            <p class="m-0" style="font-size:12px;">Arriendo por </p>
                                            <p class="ml-1 m-0" style="font-size:12px;"> {{$data[1]->name}} {{$data[1]->surname}}</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <strong>
                                                <p alt="Texto Calificación" class="m-0 reduce-font pr-2">Calificación</p>
                                            </strong> 
                                            {{-- <p>{{$data[0]->QualificationAverage}}</p> --}}
                                            @for ($i = 1; $i <= $data[0]->QualificationAverage; $i++)
                                                <img alt="ovejita" class="mr-1" src="{{ asset('assets\icons\oveja.svg') }}" alt="" width="20px" height="20px" />
                                            @endfor
                                            @for ($i = 1; $i <= (5-$data[0]->QualificationAverage); $i++)
                                                <img alt="ovejita" class="mr-1" src="{{ asset('assets\icons\ovejaG.svg') }}" alt="" width="20px" height="20px"/>
                                            @endfor
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                            <div class="d-flex w-100 justify-content-center">
                                <div class="button mt-2 justify-content-center w-100">
                                    <button>Arrienda</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>             
            </div>

            @section('scripts')

            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                  //Slick slider initialize
                    $('.slider').slick({
                    arrows:false, dots: false, infinite:true, speed:500,
                    autoplay:false, slidesToShow:1, slidesToScroll:1
                    });
                    //On click of slider-nav childern,
                    //Slick slider navigate to the respective index.
                    $('.slider-nav > div').click(function() {
                        $('.slider').slick('slickGoTo',$(this).index());
                    })
                });
              </script>
            <script src="{{ asset('js/app.js') }}"></script>
            
            @endsection
            
    </body>

</html>

