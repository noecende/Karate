<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Mascotas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="Mascotas" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">

</head>

<body>
    
    <table class="table">
      <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Especie</th>
            <th scope="col">Raza</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col" class="center" colspan="2" >Acción</th>
          </tr>
      </thead>
        <tbody>
          @foreach($mascotas as $mascota)
          <tr>
           
                <th scope="row">{{$mascota->id}}</th>
                <td>{{$mascota->nombre}}</td>
                <td>{{$mascota->especie}}</td>
                <td>{{$mascota->raza}}</td>
                <td>{{$mascota->fecha_nacimiento}}</td>
                <td><form action="/mascotas/{{$mascota->id}}/edit" method="GET"> 
                <button type="submit" class="btn btn-primary m-1" >Editar</button></form></td>
                <td><form action="/mascotas/{{$mascota->id}}" method="POST"> @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger m-1" >Eliminar</button></form></td>
        
          </tr>
          @endforeach
        </tbody>
      </table>
    
    <!--
    <div class="form-group m-5 bg-light rounded-lg">
      <h1 class="text-dark p-3">{{$mascota->nombre}}</h1>
      <form action="/mascotas/{{$mascota->id}}" method="POST">
          @csrf
          @method('DELETE')
          <div class="form-row p-3">
            <div class="form-group col-md-4">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="{{$mascota->nombre}}">
            </div>
            <div class="form-group col-md-4">
              <label for="especie">Especie</label>
              <input type="text" class="form-control" id="especie" name="especie" value="{{$mascota->especie}}">
            </div>
            <div class="form-group col-md-4">
              <label for="raza">Raza</label>
              <input type="text" class="form-control" id="raza" name="raza" value="{{$mascota->raza}}">
            </div>
          </div>

          <div class="form-row p-3">
              <div class="form-group col-md-4">
                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$mascota->fecha_nacimiento}}">
              </div> 
          </div>
          <button type="submit" class="btn btn-primary m-3" >Eliminar</button>
          </div>
          
          
        </form>
    </div> -->


   <!--JQUERY de bootstrap-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>



</html>