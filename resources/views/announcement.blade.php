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
                        <img class="mt-2" src="{{ asset('assets\icons\place.svg') }}" alt="" width="15px" height="15px"/>
                        <p class="mt-2 mb-0 ml-1" style="color: #095D6A; font-size: 12px; font-weight: 600;">{{$data[2]->region}}</p>
                    </div>
                    <h3>{{$data[0]->NameProduct}} </h3>
                    <strong><p class="mb-0 reduce-font">Descripción</p></strong>
                    <p class="m-0" style="font-size: 15px">{{$data[0]->Description}}</p>
                    <strong><p class="mb-0 reduce-font">Precio</p></strong>
                    <h1 id="price" class="mt-0 mb-0">${{$data[0]->Price}}</h1>
                    <div class="d-flex flex-wrap">
                        <div class="mb-2 mr-1">
                            <svg height="40" width="40">
                                <circle cx="20" cy="20" r="20" stroke-width="3" fill="red" />
                            </svg> 
                        </div>                            
                        <div>
                            <div class="d-flex">
                                <p class="m-0" style="font-size:12px;">Arriendo por </p>
                                <p class="ml-1 m-0" style="font-size:12px;"> {{$data[1]->name}} {{$data[1]->surname}}</p>
                            </div>
                            <div>
                                <strong>
                                    <p class="m-0 reduce-font">Calificación</p>
                                </strong> 
                            </div>  
                        </div>  
                    </div>
                </div>

            </div>
        
            <div class="d-flex w-100 justify-content-center">
                <div class="order-1 button col-md-4 mt-2 justify-content-center w-25">
                    <button>Arrienda</button>
                </div>
                <div id="comments" class="order-0 col-md-7 orange mt-2 p-0">
                    <div class="d-flex align-items-center">
                        <strong><p class="ml-3 mt-2">Comentarios</p></strong>
                        <img class="mb-2 ml-1" src="{{ asset('assets\icons\comment.svg') }}" alt="" width="20px" height="20px" />
                    </div>

                    @foreach ($data[3] as $comment)
                        <hr class="m-0"color="black">
                        
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
                            <div class="ml-1 d-flex align-items-center">
                                <img class="mb-2 ml-1" src="{{ asset('assets\icons\comment.svg') }}" alt="" width="30px" height="30px" />
                            </div>

                        </div>
                    @endforeach

                </div>  
            </div>
        </div>