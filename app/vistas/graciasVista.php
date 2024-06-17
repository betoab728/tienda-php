<?php include_once("encabezado.php"); ?>
<div class="card" id="contenedor">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
      <li class="breadcrumb-item"><a href="#">Datos de envío</a></li>
      <li class="breadcrumb-item"><a href="#">Forma de pago</a></li>
      <li class="breadcrumb-item">Verifica datos</li>
    </ol>
  </nav>
  <h2><?php print $datos["data"]["nombre"]; ?>:</h2>
  <h3>¡Gracias por vistarnos y hacer su compra! Estamos contentos de que haya encontrado lo que buscaba. Nuestro objetivo es que siempre esté satisfecho, así qvísenos de su nivel de satisfacción. Esperamos volver a verle pronto. ¡Que tenga un gran día!</h3>
  <br>
  <h3>Atentamente:</h3>
  <br>
  <h3>Sus amigos de (nombre de supágina)</h3>
  <br>
  <div class="form-group text-left">
    <label for="enviar"></label>
    <a href="<?php print RUTA; ?>tienda" class="btn btn-success" role="button">Regresar a la tienda</a>
  </div>
</div>
<?php include_once("piepagina.php"); ?>