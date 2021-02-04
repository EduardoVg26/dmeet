<!-- Linea para poner header -->
<?php include_once 'includes/templates/header.php'; ?>
<?php
  $mensajeSesion = '';
  if(!$_SESSION['user_id']){
    header('Location: registroUsuario.php');
    $mensajeSesion = 'Por favor inicia sesión para poder comprar.';
  }
?>
  <div class="contenedorPago">
    <div class="row  text-center">
        <div class="col-sm"><h2>Datos personales y producto</h2></div>
        <div class="col-sm"><h2>Opciones de pago</h2></div>
        <div class="col-sm"><h2>Procesamiento de pago</h2></div>
    </div>
    <div class="row">
        <div class="col-sm datosUsuarioPago">

          <div class="row g-3">
            <div class="col-auto">
              <p>Correo</p>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-auto text-center">
              <p class="datosPago"><?= $user['email']?></p>
            </div>
          </div>
          <div class="row g-3">
            <div class="col-auto">
              <p>Nombre del evento</p>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-auto text-center">
              <p class="datosPago">Emprendimiento en jovenes</p>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <a href="https://www.paypal.com/mx/home/" target="_blank">
            <img src="img/Paypal.png" width="350" height="250" HSPACE="10" VSPACE="10">
          </a>
          <div class="creditCardForm">
            <div class="heading">
                <h4 class="text-center">Tarjeta de Crédito o Débito</h4 >
            </div>
            <div class="payment">
              <form>
                <div class="form-group owner">
                    <label for="owner">Nombre</label>
                    <input type="text" class="form-control" id="owner" placeholder="Nombre de la tarjeta">
                </div>
                <div class="form-group" id="card-number-field">
                    <label for="cardNumber">Número de Tarjeta</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="16 dígitos">
                </div>
                <div class="form-group" id="expiration-date">
                  <label>Fecha de expiración</label>
                  <select>
                    <option value="01">Enero</option>
                    <option value="02">Febrero </option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                  </select>
                  <select>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                    <option value="16"> 2022</option>
                    <option value="17"> 2023</option>
                    <option value="16"> 2024</option>
                    <option value="17"> 2025</option>
                  </select>
                </div>
                <div class="form-group CVV">
                  <label for="cvv">CVV</label>
                  <input type="text" class="form-control" id="cvv">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm totalPago">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <p>Total a pagar:</p>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-auto text-center" id="dineroTotal">
              <p >$1099</p>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary btn-lg btn-block" type="button" id="pagar" onclick="randomPago();" >Pagar</button>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Linea para footer	 -->
<?php include_once 'includes/templates/footer.php'; ?>
