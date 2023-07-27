<!-- <!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>CRUD Query Builder</title>    
  </head>
  <body>
  <div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
        <form action="" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text"  id="nombre" class="form control" "> 
            </div>
            <div class="mb-3">
                <label for="appat" class="form-label"> Apellido Paterno</label>
                <input type="text"  id="appat" class="form control" > 
            </div>
            <div class="mb-3">
                <label for="apmat" class="form-label">Apellido Materno</label>
                <input type="text"  id="apmat" class="form control" > 
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="number"  id="telefono" class="form control" maxlength="10" > 
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>  
        @if (session()->has('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
        @endif  
        </div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
  </body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <title>Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/edita.css')}}">
   
  
</head>
<body>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <header>
    <nav class="navbar container">   
       <h1 class="titulo">Actualización de Clientes</h1>  
    </nav> 
   </header>
   <a href="{{url('/leerC')}}" class="button-23" role="button">🡠</a>

   <form action="" method="post">
    @csrf
    @method('PUT')
      <div class="mb-3row">
        <label for="inputName" class="col-sm-2 col-form-label">Nombre del cliente</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nombre" id="inputPassword" maxlength="45" required="" value="{{$cliente->nombre_client}}">
        </div>
      </div>

      <div class="mb-3row">
        <label for="inputLastname" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="appat" id="inputLastname" maxlength="45" required="" value="{{$cliente->appat_client}}">
        </div>
      </div>

      <div class="mb-3row">
        <label for="inputLastname2" class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="apmat" id="inputLastname2" maxlength="45" required="" value="{{$cliente->apmat_client}}">
        </div>
      </div>

      <div class="mb-3row">
        <label for="inputLastname2" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="telefono" id="inputLastname2" maxlength="10" required="" value="{{$cliente->telefono_client}}">
        </div>
      </div>




      <button type="submit" class="btn btn-primary">Actualizar</button>
   </form>

   @if (session()->has('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
        @endif 
   

</body>
</html>