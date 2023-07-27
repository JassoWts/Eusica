<!DOCTYPE html>
<html>
<head>
	<title>Conocenos</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('css/conocenos.css')}}">

</head>
<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <header>
   	<nav class="navbar container" id="titulo">
      
      
      <a href="{{url('/index')}}"><img src="{{asset('imagenes/logoeusica.png')}}" height=""></a>
      <h1>Conoce a Eusica </h1>	
   </nav>
   </header>
<br>
   <div class="container">
        <div class="row">
                <div class="col-sm-5">
                  <img src="{{asset('imagenes/11.png')}}" width="500" height="500">
               </div>
               <div class="col-sm-6" id="texto1">
                     <p>
                              Cuando se fundó esta tienda en 1982 nos conocían bajo el nombre de Disk Jockey,
                              un lugar donde la gente podía comprar equipo de audio de alta fidelidad como audio 
                              profesional y productos para Dj. Nuestras mixers y tornamesas estaban en las manos 
                              de los mejores Dj´s de las legendarias Discoteques de la ciudad de México. 
                              Crecimos y cambiamos nuestro nombre a Equipos y Cintas y nuestro objetivo se convirtió 
                              en vender productos magnéticos, cintas y productos de alta fidelidad así como equipo 
                              profesional de audio.
                        <br>
                              Eusica Music Store ha sido nombrada Distribuidor Top 100 por la Asociación Nacional
                              de Comerciantes de Música (NAMM), la asociación global de productos de música y 
                              minoristas de música. El premio honra a los comerciantes minoristas de música que 
                              demuestran un compromiso excepcional con sus tiendas, vecindarios y clientes, y comparten
                              una visión para crear un mundo más musical a través de sus comunidades locales.
                        <br>   
                     </p>

               </div>
        </div>
   </div>
<br> <br><br>
   <div class="container">
         <div class="row">
               <div class="col-sm-6" id="texto2">
                  <p>   Los tiempos cambiaron y nosotros también. 
                        Durante años acompañamos la historia de la música
                        y estuvimos en las manos de sus creadores y en los
                        oídos de los audiófilos mexicanos pero había llegado el momento
                        de evolucionar.
                    <br>
                        En 2017 nace Eusica cuyo nombre significa “El bien del alma”. 
                        Con ese cambio llegó la idea de dedicarnos por completo a generar esa magia,
                        esa energía, ese momento único de enamorarte de un instrumento para toda tu vida.
                    <br>    
                        Eusica Music Store ha sido nombrada Distribuidor 
                        Top 100 por la Asociación Nacional de Comerciantes de Música (NAMM), 
                        la asociación global de productos de música y minoristas de música. 
                        El premio honra a los comerciantes minoristas de música que demuestran 
                        un compromiso excepcional con sus tiendas, vecindarios y clientes, y 
                        comparten una visión para crear un mundo más musical a través de sus 
                        comunidades locales.  
                  </p>
               </div>
               <div class="col-sm-6" id="imagen2">
                  <img src="{{asset('imagenes/13.png')}}" width="500" height="500">
               </div>
         </div>
   </div>
<br><br><br>
   <div class="container">
         <div class="row">
            <video src="{{asset('imagenes/musicadeindios.mp4')}}" controls></video>
         </div>
   </div>
   <br><br><br>
<footer class="foot">
      <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <p class="textof">visita nuestras redes sociales de nuestra banda!!</p>
                  
                  <a href="https://open.spotify.com/artist/1bfyTlkzD6TDIvUVGepCq4?si=55cgpv_6Sna0z00CicabVQ"><img src="{{asset('imagenes/spotify.png')}}" width="50" height="50" ></a> 
                  <a href="https://www.facebook.com/feralmx?mibextid=LQQJ4d "><img src="{{asset('imagenes/facebook.png')}}" width="50" height="50" ></a>
                  <a href="https://instagram.com/feraloficial?igshid=MzRlODBiNWFlZA=="><img src="{{asset('imagenes/instagram.png')}}" width="50" height="50" ></a>
                  
               </div>
            </div>
      </div>
</footer>
</body>
</html>