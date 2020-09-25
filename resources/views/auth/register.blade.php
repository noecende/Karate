<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="Ejemplo vue.js" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">


</head>

<body>

    
    <div class="form-group m-5 bg-light rounded-lg">
      <h1 class="text-dark p-3">Registro</h1>
      <form action = "{{ route('register')}}" method="POST" >
          @csrf
          <div class="form-row p-3">
            <div class="form-group col-md-4">
              <label for="nombre">Nombre(s)</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group col-md-4">
              <label for="apellido_paterno">Apellido Paterno</label>
              <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
            </div>
            <div class="form-group col-md-4">
              <label for="materno">Apellido Materno</label>
              <input type="text" class="form-control" id="materno" name="apellido_materno">
            </div>
          </div>

          <div class="form-row p-3">
              <div class="form-group col-md-4">
                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
              </div> 
              <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>    
          </div>
          
          <div class="form-row p-3">
            <div class="form-group col-md-4">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
             
            <div class="form-group col-md-4">
              <label for="password_confirmation">Confirme su contraseña</label>
              <input type="password" class="form-control" id="password_confirmation" 
              name="password_confirmation">
            </div>    

            <input name="dojo_id" type="hidden" value="1">
        </div>
        <button type="submit" class="btn btn-primary m-3">Registrar</button>
          </div>
         
        </form>
    </div>
     
    @if($errors)
        <div class="alert alert-danger" role="alert">
                  {{$errors->first()}}
          
        </div>
    @endIf
    







   <!--JQUERY de bootstrap-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>



</html>