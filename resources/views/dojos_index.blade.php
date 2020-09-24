<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dojos</title>
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
            <th scope="col">Estado</th>
            <th scope="col">Titular</th>
            <th scope="col" rowspan=2>Acción</th>
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
                <button type="submit" class="btn btn-primary m-3" >Editar</button></form></td>
                <td><form action="/dojos/{{$dojo->id}}" method="POST"> @CSRF @method('DELETE')
                <button type="submit" class="btn btn-danger m-3" >Eliminar</button></form></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <form action="/dojos/create" method="GET"><button type="submit" class="btn btn-primary m-3" >Nuevo</button></form>



   <!--JQUERY de bootstrap-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>