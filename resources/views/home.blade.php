@extends('layouts.app')
@section('content')
    <section class="bg-home">
        <div class="container">

            <div class="row align-item center justify-content-end ">
                <form method="POST" action="{{route('mensaje')}}" class="bg-white my-5 p-5 mx-2 rounded-lg" novalidate>
                  @csrf  
                  <h4>Reserva tu cita gratis</h4>
                    <div class="form-group">
                      <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" placeholder="nombre del paciente">
                      @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="lastname">Apellido</label>
                      <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{old('lastname')}}" id="lastname" placeholder="Apellido del paciente">
                      @error('lastname')
                      <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>     
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="number" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{old('telefono')}}" id="telefono" placeholder="Teléfono de contacto">
                        @error('telefono')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                          </span>     
                      @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="correo electrónico">
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                          </span>     
                      @enderror
                      </div>
                    <button type="submit" class="btn bgc-primary text-white">Enviar</button>
                  </form>
            </div>
        </div>
        <div class="row flex-column bgc-primary p-3 ml-3 rounded-lg">
            <h1 class="text-white">Clinica Dental el Mellado</h1>
            <h2 class="text-white">Nos preocupamos por tu sonrisa</h2>

        </div>
    </section>
    
@endsection