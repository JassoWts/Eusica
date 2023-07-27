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
  <link rel="stylesheet" type="text/css" href="{{asset('css/pruebas.css')}}">
   
  
</head>
<body>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <header>
    <nav class="navbar container">
          <h1 class="titulo">Registrar Cliente</h1>        
   </header>
   
   <a href="{{url('/leerC')}}" class="button-23" role="button">🡢</a>
   <a href="{{url('/index')}}" class="button-24" role="button">🡠</a>
        
   <form action="" method="post">
        @csrf
        <div class="mb-3row">
            <label for="inputName" class="col-sm-2 col-form-label">Nombre del cliente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" id="inputPassword" maxlength="15" required="">
                </div>
        </div>

        <div class="mb-3row">
            <label for="inputLastname" class="col-sm-2 col-form-label">Apellido Paterno</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="appat" id="inputLastname" maxlength="15" required="">
                </div>
        </div>

        <div class="mb-3row">
            <label for="inputLastname2" class="col-sm-2 col-form-label">Apellido Materno</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="apmat" id="inputLastname2" maxlength="15" required="">
                </div>
        </div>

        <div class="mb-3row">
                <label for="inputLastname2" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefono" id="inputLastname2" maxlength="10" required="" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                    </div>
        </div>
  
  <button type="submit" class="btn btn-primary">Registrar</button>   
  </form>
<br>
  <a href="{{url('/leerC')}}" class="btn btn-primary">Consultar Clientes</a>  
<br><br><br>
    @if(session()->has('status'))
    <div>
        <div class="alert alert-success">
        {{session('status')}}
        </div>
    </div> 
    @endif

</body>
</html>
