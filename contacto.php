<?php include_once 'includes/templates/header.php'; ?>

<div id="img-contacto">
  <img src="img/contacto.jpg" alt="" />
  <div class="titulo">
    <h2>Contáctanos</h2>
  </div>
</div>

<section>
  <div class="container contacto">
    <div class="row">
      <div class="col-md-6 offset-md-0">
        <p><span>Teléfono:</span> 55 5555 5555</p>
        <p><span>Correo:</span> contacto@dmeet.com</p>
        <iframe
          width="520"
          height="400"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"
          id="gmap_canvas"
          src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=aluminio%20+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        ></iframe>
        <a href="http://maps-generator.com/es" style="color: #fff;">Maps-Generator.com</a>
        <script
          type="text/javascript"
          src="https://embedmaps.com/google-maps-authorization/script.js?id=1b32c66dac7ae32026866ab1fab6abd86541db78"
        ></script>
        <ul class="list-unstyled contacto-redes">
          <li>
            <a href="" id="facebook"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="" id="twitter"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="" id="youtube"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="" id="instagram"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>

      <div class="col-md-6 offset-md-0">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo Electrónico</label>
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="correo@dominio.com"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Número</label>
            <input
              type="number"
              class="form-control"
              id="exampleInputPassword1"
              placeholder="55 1122 3344"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mensaje</label>
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
          </div>
          <button type="submit" class="btn btn-secondary float-right btn-lg">
            Enviar
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>
