<!-- Linea para poner header -->
<?php include_once 'includes/templates/header.php'; ?>

    <div id="img-empleados">
      <div class="container">
        <div class="row align-self-center">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col loginEmpleado" align="right">
            <h3 style="color: #fff;">Inicia Sesión</h3>
            <form>
              <div class="mb-3">
                <label for="InputEmail" class="form-label">ID Empleado</label>
                <input
                  type="email"
                  class="form-control"
                  id="InputEmail"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="Password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="Password" />
              </div>
              <div align="right">
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!---------Footer------------------------------------------>
      <!-- Copyright -->
      <div
        class="text-center p-3"
        style="background-color: #315599; color: #fff"
      >
        © 2020 Copyright: DMeet
      </div>
      <!-- Copyright -->
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
