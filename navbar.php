<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">TIENDA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Camisas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Figuras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Posters</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Más
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Artistas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sobre Nosotros</a>
          <a class="dropdown-item" href="#">Misión</a>
          <a class="dropdown-item" href="#">Visión</a>
          <a class="dropdown-item" href="#">Contáctanos</a>
        </div>
      </li>
    </ul>


    <div class="nav-item dropleft">
      <a class="nav-link dropdown-toggle" href="carrito.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="img/carrito.png" width="30px" onmouseover=" miFuncion()"/>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Articulo 1</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Articulo 2</a>

        <button type="button" class="btn btn-secondary mt-2 mx-auto d-flex">Confirmar</button>

      </div>

    </div>

    <a href="" class="mx-2" data-toggle="modal" data-target="#Busqueda"><img src="img/lupanav.png" width="30px" /></a>
    <a href="" class="nav-link" style="color: white; font-size: 17px" data-toggle="modal" data-target="#Sesion" id="btnInicio" onclick="document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'">Iniciar Sesión</a>

  </div>
</nav>