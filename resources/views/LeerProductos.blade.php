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
   <link rel="stylesheet" href="{{asset('css/leer.css')}}">
</head>
<body>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <header>
    <nav class="navbar container"> 
        <form action="" class="form">
        <input  class="input1" placeholder="buscar registros" type="search" required >
        <i class="fa fa-search"></i>
        </form> 
    </nav>  
   </header>

   <a href="{{url('/producto')}}" class="button-24" role="button">🡠</a>


   <article class="main">
    <div class="col-sm-6">
            <h1 class="titulo">Consulta de registros de Productos</h1>   
        </div>
        <div class="col-sm-6">
                <table class="table table-hover table-dark">
                <thead >
                    <tr>
                        <th scope="col">Folio </th>
                        <th scope="col">Nombre Del producto </th>
                        <th scope="col">Marca Del producto </th>
                        <th scope="col">Modelo Del producto </th>
                        <th scope="col">Precio Del producto </th>
                        <th scope="col">Nombre de la categoria </th>

                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($producto as $product)
                    <tr>
                        <th>{{$product->idprod}}</th>
                        <td>{{$product->nom_prod}}</td>
                        <td>{{$product->marca_prod}}</td>
                        <td>{{$product->modelo_prod}}</td>
                        <td>{{$product->precio_prod}}</td>
                        <td>{{$product->nom_categorias}}</td>
                        <td>
                            <a href="{{url('/editP', $product->idprod)}}" class="btn btn-info btn-sm">Editar</a>
                        </td>
                        <td>
                        <a href="{{url('/deleteP', $product->idprod)}}" class="btn btn-info btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table> 
            </div>
    </article>
</body>
</html>