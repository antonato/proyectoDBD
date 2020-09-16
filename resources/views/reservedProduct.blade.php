@section('content')


<body id="reservedProduct">
     <div class="flex-column">
        <div class="d-flex justify-content-center">
            <svg id="Capa_1" data-name="Capa 1" width="90px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 90">
                <title>circles</title>
                <circle cx="37" cy="48" r="13" fill="#095d6a" />
                <circle cx="81" cy="48" r="13" fill="#f57b51" />
                <circle cx="124" cy="48" r="13" fill="#fbbc58" />
            </svg>
        </div>

    
    <div class="d-flex justify-content-center">
            <div class="card loginback" style="width: 30rem;">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-1 mb-2">
                        <h5>¡Tu producto ha sido reservado!</h5>
                    </div>
                       <a href="{{ action('AnnouncementContr@index')}}"  class="d-flex justify-content-center">
                            <input type="button" class="btn btn-info btn-md" value="Seguir buscando" action="home">
                       <a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</body>
    

@endsection

