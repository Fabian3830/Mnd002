<!DOCTYPE html>
<html lang="en">

<?php include("header.php") ?>

<body>

  <!-- Navigation -->

  <?php include("navbar.php") ?>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row mx-auto">

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item One</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item Two</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item Three</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item Four</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item Five</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item Six</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row CARDS-->

    </div>
    <!-- /.row CONTENIDOS-->

  </div>
  <!-- /.container -->

  <!-- Footer -->

  <?php include("footer.php") ?>

  <!-- Footer -->

  <!-- MODAL BUSQUEDA-->
  <div class="modal fade" tabindex="-1" role="dialog" id="Busqueda" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="border-radius: none;">
      <div class="modal-content">
        <form class="form-inline form-row">
          <div class="col-11">
            <input type="password" id="inputBuscar" placeholder="Buscar">
          </div>
          <div class="col-1">
            <input type="image" src="img/lupa.png" alt="Submit Form" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /MODAL BUSQUEDA-->
  <!-- MODAL SESION/REGISTRO-->
  <div class="modal fade" tabindex="-1" role="dialog" id="Sesion" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="height: 390px">
        <div class="modal-header py-0">
          <h2 class="font-weight-bold mx-auto" style="font-size: 22px;" id="titulo">Inicia tu sesión!</h2>
        </div>
        <form style="width:100%" class="mx-auto my-auto px-4" id="login-form">
          <div class="form-group">
            <label for="InputEmail" style="font-size: 20px">Correo electrónico</label>
            <input type="email" class="inputInicioSesion" id="InputEmail" aria-describedby="emailHelp">
          </div>
          <div class="form-group mt-2">
            <label for="InputPassword" style="font-size: 20px">Contraseña</label>
            <input type="password" class="inputInicioSesion" id="InputPassword">
          </div>
          <div class="row mt-5">
            <div class="col-auto">
              <label class="mb-0" style="font-size: 14px">No te has registrado aún?</label><br/>
              <button type="button" class="btn btn-link text-danger btn-sm p-0" id="Registro" onclick="document.getElementById('titulo').innerHTML = 'Formulario de Registro'">Registrate!</button>
            </div>
            <div class="col-auto ml-auto">
              <button type="submit" class="btn btn-primary my-auto" style="width: 80px; height: 47px">
                <label class="mb-0" style="font-size: 18px">Entrar</label>
              </button>
            </div>
          </div>
        </form>
        <!-- FORM REGISTRO -->
        <form id="register-form" method="post" role="form" style="display: none; width:100%;" class="mx-auto my-auto px-4">
          <div class="row form-group mb-1">
            <div class="col pr-1">
              <label class="mb-0" for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" tabindex="1" class="inputRegistro mb-1" value="">
            </div>
            <div class="col pl-1">
              <label class="mb-0" for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" tabindex="1" class="inputRegistro mb-1" value="">
            </div>
          </div>
          <div class="form-group mb-1">
            <label class="mb-0" for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" tabindex="1" class="inputRegistro mb-1" value="">
          </div>
          <div class="form-group mb-1">
            <label class="mb-0" for="password">Contraseña</label>
            <input type="password" name="password" id="password" tabindex="2" class="inputRegistro mb-1">
          </div>
          <div class="form-group mb-1">
            <label class="mb-0" for="confirm-password">Repite tu contraseña</label>
            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="inputRegistro mb-1">
          </div>
          <div class="form-group mb-1">
            <div class="row mt-1">
              <div class="col-auto">
                <label class="mb-0" style="font-size: 14px">Ya tienes cuenta?</label><br />
                <button type="button" class="btn btn-link text-danger btn-sm p-0 mb-2" id="btnSesion" onclick="document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'">Inicia sesión!</button>
              </div>
              <div class="col-auto ml-auto">
                <button type="submit" class="btn btn-primary my-auto" style="width: 80px; height: 47px">
                  <label class="mb-0" style="font-size: 18px">Entrar</label>
                </button>
              </div>
            </div>
          </div>
      </div>
    </div>
    </form>
  </div>
  </div>
  </div>
  <!-- /MODAL SESION-->

</body>

</html>