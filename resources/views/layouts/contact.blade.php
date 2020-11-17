@extends('layouts.app')
@section('content')

<div class="container-fluid bg-contact p-5">
    
<form method="POST" action="{{route('nuevoContacto')}}" class="bg-white col-lg-4 px-2 py-5">
            @csrf
            <h1 class="p-2">Contacta con nosotros</h1>
            <div class="form-group">
                <label for="nameContact">Nombre</label>
                <input type="text" name="nameContac" class="form-control" id="nameContact">
              </div>
            <div class="form-group">
              <label for="mailContact">Correo</label>
              <input type="email" name="mailContact" class="form-control" id="mailContact" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="text">Que nos quieres contar</label>
                <textarea class="form-control" name="text" id="text" rows="3"></textarea>
              </div>
            <button type="submit" class="btn bgc-primary text-white">Enviar</button>
          </form>
</div>
@endsection