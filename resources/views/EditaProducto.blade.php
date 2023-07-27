<!DOCTYPE html>
<html>
<head>
  <title>Productos</title>
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
          <h1 class="titulo">Actualizar Producto</h1>        
   </header>
   <a href="{{url('/leerP')}}" class="button-23" role="button">🡠</a>

   <form action="" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3row">
            <label for="inputName" class="col-sm-2 col-form-label">Nombre del producto</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nomprod" id="inputPassword" maxlength="50" required="" value="{{$producto->nom_prod}}">
            </div>
        </div>

        <div class="mb-3row">
            <label for="inputLastname" class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nommarca" id="inputLastname" maxlength="50" required="" value="{{$producto->marca_prod}}">
            </div>
        </div>

        <div class="mb-3row">
            <label for="inputLastname2" class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="modelo" id="inputLastname2" maxlength="50" required="" value="{{$producto->modelo_prod}}">
            </div>
        </div>

        <div class="mb-3row">
            <label for="inputLastname2" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="precio" id="inputLastname2" required="" value="{{$producto->precio_prod}}">
            </div>
        </div>

        <div class="mb-3row">   
      

        <label for="inputLastname2" class="col-sm-2 col-form-label">Categoría</label>
        <br>
            <select name="categoria" class="form-select" aria-label="Default select example" id="categoria">
            <option value="">-Seleccione una categoria-</option>
                @foreach($categorias as $id => $categoria)
                <option value="{{$id}}">{{$categoria}}</option>
                @endforeach
            </select>
        
        </div>


        <button type="submit" class="btn btn-primary">Actualizar</button>
   </form>
    @if(session()->has('status'))
    <div>
        <div class="alert alert-success">
        {{session('status')}}
        </div>
    </div> 
    @endif
</body>
</html>
