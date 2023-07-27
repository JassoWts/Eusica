<!DOCTYPE html>
<html>
<head>
	<title>Pagina de inicio</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

</head>
<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <header>
   	<nav class="navbar container">
      
   		<ul class="nav-list">
           
            <li class="nav-item">
               <a href="{{url('/producto')}}" class="nav-link">Productos</a>
             </li>  

             <li class="nav-item">
               <a href="{{url('/venta')}}" class="nav-link">Ventas</a>
             </li>  

             <li class="nav-item">
               <a href="{{url('/cliente')}}" class="nav-link">Clientes</a>

             </li> 

             </li> 
             <li class="nav-item">
               <a href="{{url('/categoria')}}" class="nav-link">Categorias</a>
             </li> 

             <li class="nav-item">
               <a href="{{url('/conocenos')}}" class="nav-link">Conocenos</a>
             </li>  

            

             

            <div class="active"></div>
   							
   		</ul>
   	</nav>
   </header>

             <div class="notification">
  <p>Bienvenido de vuelta!🥰</p>
  <span class="notification_progress"></span>
</div>

<div class="logoimage">
<img src="{{asset('imagenes/logoeusica.png')}}" height="">
</div>

</body>
</html>
