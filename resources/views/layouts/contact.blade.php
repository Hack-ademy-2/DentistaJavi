@extends('layouts.app')
@section('content')

<div class="container-fluid bg-contact p-5">
    
<form method="POST" action="" class="bg-white col-lg-4 px-2 py-5">
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
                <label for="exampleFormControlTextarea1">Que nos quieres contar</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <div class="form-group form-check">
              <input type="checkbox" name="checkcontrol" class="form-check-input" id="checkboxContact">
              <label class="form-check-label" for="checkboxContact">No soy un robot</label>
            </div>
            <button type="submit" class="btn bgc-primary text-white">Enviar</button>
          </form>
</div>
@endsection