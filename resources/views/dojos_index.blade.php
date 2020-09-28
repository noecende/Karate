@extends('layouts.app')

@section('title', 'Dojos')

@section('content')
<h1 class="display-4 text-center">Dojos registrados</h1>




<div class="container mt-5">
    
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Titular</th>
                      <th scope="col" colspan=3>Acción</th>
                    </tr>
                </thead>
                  <tbody>
                    @foreach($dojos as $dojo)
                    <tr>
                          <th scope="row">{{$dojo->id}}</th>
                          <td>{{$dojo->nombre}}</td>
                          <td>{{$dojo->estado}}</td>
                          <td>{{$dojo->titular}}</td>
                          <td><form action="/dojos/{{$dojo->id}}/edit" method="GET"> 
                          <button type="submit" class="btn btn-outline-primary" >Editar</button></form></td>
                          <td><form action="/dojos/{{$dojo->id}}" method="POST"> @CSRF @method('DELETE')
                          <button type="submit" class="btn btn-outline-danger" >Eliminar</button></form></td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
    <div class="row">
            <form class="col-md-2" action="/dojos/create" method="GET">
                      <button type="submit" class="btn btn-primary" >Crear dojo</button>
            </form>      
    </div>  

      
</div>




@endSection
