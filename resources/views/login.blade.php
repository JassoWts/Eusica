<!DOCTYPE html>
<html><head>
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilo-login.css')}}">
    
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="form">
       
        <div class="title">Bienvenido</div>
        <div class="subtitle">Identificate</div>
        <div class="input-container ic1">
          <input id="firstname" class="input"  name="usuario" type="text" placeholder=" " maxlength="20" required/>
          <div class="cut"></div>
          <label for="firstname" class="placeholder">Usuario</label>
        </div>
        <div class="input-container ic2">
          <input id="firstname" class="input" name="correo" type="email" placeholder=" "  required/>
          <div class="cut"></div>
          <label for="firstname" class="placeholder">correo</label>
        </div>
        <div class="input-container ic3">
          <input id="lastname" class="input" name="contraseña" type="password" placeholder=" " maxlength="10" required="" />
          <div class="cut"></div>
          <label for="lastname" class="placeholder">Contraseña</label>
        </div>
        
        <button type="text" class="submit"> <a href="{{url('/acceso')}}" class="acceso">Iniciar sesion</a> </button>
<div class="singin">
        <a href="{{url('/singin')}}" class="secondarylink">Registrate</a>
</div>
      </div>
    </body>
</html>












		