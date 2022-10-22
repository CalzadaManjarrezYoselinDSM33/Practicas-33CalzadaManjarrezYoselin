<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">   
</head>
<body >
<nav class="navbar navbar-expand-lg " style="background-color: #66ff59;"  >
  <div class="container-fluid" >
  
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav" >
        <li class="nav-item">
        <img src="{{ asset('archivos/cuervo.jpg')}}" alt="UTVT" width="400"height="100">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lista_usuario')}}">Lista de Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lista_nivel')}}">Lista Nivel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lista_tiendas')}}">Lista Tiendas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lista_producto')}}">Lista de Productos</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
<br><br>

@yield('content')




</body>
</html>