@extends('layouts.app')
@section('content')
<div class="bg-light h-100">
    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col12">
            <h1 class="mt-5 mb-2">Nuestro equipo</h1>
            <p class="py-4">Conseguimos personalizar los tratamientos en base a las necesidades de cada paciente. Creemos en nuestra energia y en las de nuestros pacientes, aliviar, mejorar y proteger; mediante nuestro equipo que trabaja cada día para ofrecer el mejor servicio odontológico integral a nuestros pacientes.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4 mb-5">
                  <div class="card h-100">
                    <img class="card-img-top" src="img/doctor1.jpg" alt="">
                    <div class="card-body">
                      <h4 class="card-title">Javier García</h4>
                      <p class="card-text">Especialista en endodoncias y blanqueamiento bucodental</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card h-100">
                    <img class="card-img-top" src="img/doctor2.jpg" alt="">
                    <div class="card-body">
                      <h4 class="card-title">Carlos Alcantara</h4>
                      <p class="card-text">Mas de 30 años de experiencia en el mundo bucodental. Especilidad en reconstrucción y cirugia maxilofacial.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card h-100">
                    <img class="card-img-top" src="img/doctora.jpg" alt="">
                    <div class="card-body">
                      <h4 class="card-title">Isabel Pantoja</h4>
                      <p class="card-text">No canta pero arregla bocas que da gusto.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection