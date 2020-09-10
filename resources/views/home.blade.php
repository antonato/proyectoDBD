@extends('layouts.app')

@section('content')

@if(session('status'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Excelente!</h4>
            <p>Completaste el registro exitosamente!!.</p>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">holi</div>

                <div class="card-body">
                    @if (Auth::check())
                        <div class="alert alert-success" role="alert">
                            {{ Auth::check() }}
                        </div>
                    @endif

                    Sección en construcción :(
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
