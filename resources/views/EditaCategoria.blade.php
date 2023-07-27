<!DOCTYPE html>
<html>
<head>
  <title>Categorias</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/edita.css')}}">
</head>
<body>

   <header>
    <nav class="navbar container">   
       <h1 class="titulo">Actualización de categoría</h1>  
    </nav> 
   </header>
   <a href="{{url('/leerCat')}}" class="button-23" role="button">🡠</a>  <form action="" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3row">
    <label for="inputName" class="col-sm-2 col-form-label">Nombre de la categoría</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="categoria" maxlength="30" required="" value="{{$categoria->nom_categorias}}">
    </div>
  </div>

 

  <button type="submit" class="btn btn-primary">Actualizar</button>

  </form>
  @if (session()->has('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
        @endif 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

</body>
</html>