function randomPago() {
  var procesoPago = [0, 1];
  // 1 = Pago correcto
  // 0 = Pago erroneo
  shuffle(procesoPago);
  console.log(procesoPago[0]);

  if (procesoPago[0] > 0) {
    Swal.fire({
      title: "Procesando pago...",
      timer: 2000,
      didOpen: () => {
        Swal.showLoading();
      },
      willClose: () => {
        Swal.fire({
          icon: "success",
          title: "¡Transacción exitosa!",
          text: "Se enviará el boleto a su correo registrado.",
        }).then(function () {
          window.location = "index.php";
        });
      },
    });
  } else {
    Swal.fire({
      title: "Procesando pago...",
      timer: 2000,
      didOpen: () => {
        Swal.showLoading();
      },
      willClose: () => {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text:
            "Hubo un error con tu proceso de pago. Por favor inténtalo nuevamente.",
        });
      },
    });
  }
}

function shuffle(array) {
  var j, x, i;
  for (i = array.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = array[i];
    array[i] = array[j];
    array[j] = x;
  }
}
