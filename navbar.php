<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">TIENDA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="camisa">Camisas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="estatuilla">Figuras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="poster">Posters</a>
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
      <a class="nav-link dropdown-toggle" href="carrito.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" onmouseover="miFuncion()">
        <img src="SERVER/img/carrito.png" width="30px" />
      </a>
      <div id="poep" class="dropdown-menu" aria-labelledby="navbarDropdown">

        <!--
<div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Articulo 1</a>
      -->

        <form id="emptyf" method="post">

          <button id="confirma_compra" type="button" class="btn btn-secondary mt-2 mx-auto d-flex">Confirmar</button>
        </form>
      </div>

    </div>

    <a href="" class="mx-2" data-toggle="modal" data-target="#Busqueda"><img src="SERVER/img/lupanav.png" width="30px" /></a>
    <a href="" class="nav-link" style="color: white; font-size: 17px" data-toggle="modal" data-target="#Sesion" id="btnInicio" onclick="document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'">Iniciar Sesión</a>

  </div>
</nav>