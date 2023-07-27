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
   <link rel="stylesheet" href="{{asset('css/pruebas.css')}}">
   
  
</head>
<body>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <header>
    <nav class="navbar container">
          <h1 class="titulo">Registrar Categoria</h1>        
   </header>
   
   <a href="{{url('/leerCat')}}" class="button-23" role="button">🡢</a>
   <a href="{{url('/index')}}" class="button-24" role="button">🡠</a>
        
<form action="" method="post">
@csrf
  <div class="mb-3row">
    <label for="inputName" class="col-sm-2 col-form-label">Nombre de la categoria</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="categoria" id="categoria" maxlength="30" required="">
    </div>
  </div>

 

  <button type="submit" class="btn btn-primary">Registrar</button>   

  </form>
  <br>
  <a href="{{url('/leerCat')}}" class="btn btn-primary">Consultar categorias</a>  
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