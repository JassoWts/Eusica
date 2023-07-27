<!DOCTYPE html>
<html>
<head>
  <title>Ventas</title>
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
          <h1 class="titulo">Actualizar Ventas</h1>        
   </header>

   <a href="{{url('/leerV')}}" class="button-23" role="button">🡠</a>

   <form action="" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3row">                         
            <label for="inputName" class="col-sm-2 col-form-label">Fecha de la venta</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" name="fventa" id="inputPassword" required="" value="{{$ventas->fecha_vta}}">
            </div>
        </div>

        <div class="mb-3row">
            <label for="inputIDProducto" class="col-sm-2 col-form-label">Producto</label>
            <div class="col-sm-10">
                <select name="producto" class="form-select" aria-label="Default select example" id="producto">
                    @foreach($productos as $idprod => $producto)
                    <option value="{{$idprod}}">{{$producto}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="mb-3row">
            <label for="inputIDProducto" class="col-sm-2 col-form-label">Cliente</label>
            <div class="col-sm-10">
                <select name="cliente" class="form-select" aria-label="Default select example" id="cliente">
                    @foreach($clientes as $id => $cliente)
                    <option value="{{$id}}">{{$cliente}}</option>
                    @endforeach
                </select>
            </div>
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