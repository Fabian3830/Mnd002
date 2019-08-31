 <!-- MODAL BUSQUEDA-->
 <div class="modal fade" tabindex="-1" role="dialog" id="Busqueda" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="border-radius: none;">
      <div class="modal-content">
        <form class="form-inline form-row">
          <div class="col-11">
            <input type="password" id="inputBuscar" placeholder="Buscar">
          </div>
          <div class="col-1">
            <input type="image" src="SERVER/img/lupa.png" alt="Submit Form" />
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
            <input type="email" name="InputEmail" class="inputInicioSesion" id="InputEmail" aria-describedby="emailHelp">
          </div>
          <div class="form-group mt-2">
            <label for="InputPassword" style="font-size: 20px">Contraseña</label>
            <input type="password" name="InputPassword" class="inputInicioSesion" id="InputPassword">
          </div>
          <div class="row mt-5">
            <div class="col-auto">
              <label class="mb-0" style="font-size: 14px">No te has registrado aún?</label><br />
              <button type="button" class="btn btn-link text-danger btn-sm p-0" id="Registro" onclick="document.getElementById('titulo').innerHTML = 'Formulario de Registro'">Registrate!</button>
            </div>
            <div class="col-auto ml-auto">
              <button type="submit" class="btn btn-primary my-auto" style="width: 80px; height: 47px" id="BtnEntrar" >
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
              <input type="text" name="REGnombre" id="nombre" tabindex="1" class="inputRegistro mb-1" value="">
            </div>
            <div class="col pl-1">
              <label class="mb-0" for="apellido">Apellido</label>
              <input type="text" name="REGapellido" id="apellido" tabindex="1" class="inputRegistro mb-1" value="">
            </div>
          </div>
          <div class="form-group mb-1">
            <label class="mb-0" for="email">Correo electrónico</label>
            <input type="email" name="REGemail" id="email" tabindex="1" class="inputRegistro mb-1" value="">
          </div>
          <div class="form-group mb-1">
            <label class="mb-0" for="password">Contraseña</label>
            <input type="password" name="REGpassword" id="password" tabindex="2" class="inputRegistro mb-1">
          </div>
          <div class="form-group mb-1">
            <label class="mb-0" for="confirm-password">Repite tu contraseña</label>
            <input type="password" name="REGconfirm-password" id="confirm-password" tabindex="2" class="inputRegistro mb-1">
          </div>
          <div class="form-group mb-1">
            <div class="row mt-1">
              <div class="col-auto">
                <label class="mb-0" style="font-size: 14px">Ya tienes cuenta?</label><br />
                <button type="button" class="btn btn-link text-danger btn-sm p-0 mb-2" id="btnSesion" onclick="document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'">Inicia sesión!</button>
              </div>
              <div class="col-auto ml-auto">
                <button type="submit" class="btn btn-primary my-auto" style="width: 80px; height: 47px" id="BtnRegisrtar">
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