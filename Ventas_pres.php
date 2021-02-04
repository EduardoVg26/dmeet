<?php include_once 'includes/templates/header.php'; ?>

<div id="img-contacto">
  <img src="img/tea.jpg" alt="" style="width: 100%; height: 350px"/>
  <div class="titulo">
    <h2>Emprendimiento en jovenes</h2>
  </div>
</div>

<div class="container vistaPresencial">
  <div class="row">
  <div class="col" id="mapaPres">
    <img
      src="https://s3-eu-west-1.amazonaws.com/statictb.net/esquema/9348.svg"
      alt="02"
    />
  </div>
  <div class="col" id="segundo">
  <div class="form-group" id="expiration-date">
    <label>Selecciona el área:  </label>
      <select>
         <option value="01">Platino</option>
         <option value="02">Verde A</option>
         <option value="03">Naranja A</option>
         <option value="04">General A</option>
         <option value="05">Verde B</option>
         <option value="06">Naranja B</option>
         <option value="07">General B</option>
         <option value="08">Verde C</option>
         <option value="09">Naranja C</option>
         
      </select>
    </div>  

    <div class="form-group" id="expiration-date">
          <label>Cantidad de boletos:  </label>
          <select>
            <option value="01">1</option>
            <option value="02">2 </option>
            <option value="03">3</option>
            <option value="04">4</option>
            <option value="05">5</option>
          </select>
        </div>

    <h2 id="totalVentaEnLinea" class="text-center">Total: $1232</h2>
    <a href="pago.php">
      <button type="button" class="btn btn-lg btn-primary btn-block">
        Pagar
      </button>
    </a>
  </div>  <!-- Cierre div segundo -->
  </div>
</div>

<!-- Footer -->
<?php include_once 'includes/templates/footer.php'; ?>
