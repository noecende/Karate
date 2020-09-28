@extends('layouts.app')

@section('title', 'Registrar dojo')

@section('content')

<body>
    <div class="form-group m-5 bg-light rounded-lg">
      <h1 class="text-dark p-3">Registrar dojo</h1>
      <form action="/dojos" method="POST">
          @csrf
          <div class="form-row p-3">
            <div class="form-group col-md-4">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group col-md-4">
              <label for="estado">Estado</label>
              <input type="text" class="form-control" id="estado" name="estado">
            </div>
            <div class="form-group col-md-4">
              <label for="titular">Titular</label>
              <input type="text" class="form-control" id="titular" name="titular">
            </div>
          </div>
          <button type="submit" class="btn btn-primary m-3" >Registrar</button>
          </div>
        </form>
    </div>

    <div> 

    @if($errors->count()>0)
        <div class="alert alert-danger" role="alert">
                  {{$errors->first()}}
          
        </div>
    @endIf
    

    </div>

@endSection