@extends('layouts.app')
@section('content')



<div class="container-fluid">
    <div class="row">
        @foreach ($mensajes as $mensaje)
        <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header"></div>
            <div class="card-body">
            <h5 class="card-title">{{$mensaje['name']}}</h5>
              <p class="card-title">{{$mensaje['lastname']}}</p>
              <p>{{$mensaje['lastname']}}</p>
              <p>{{$mensaje['telefono']}}</p>
              <p>{{$mensaje['email']}}</p>
            </div>
          </div>
          @endforeach
    </div>
</div>


@endsection