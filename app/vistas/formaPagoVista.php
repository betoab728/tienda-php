<?php include_once("encabezado.php"); ?>
<div class="card" id="contenedor">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
      <li class="breadcrumb-item"><a href="#">Datos de envío</a></li>
      <li class="breadcrumb-item">Forma de pago</li>
      <li class="breadcrumb-item"><a href="#">Verifica datos</a></li>
    </ol>
  </nav>
  <h2>Forma de pago</h2>
  <form action="<?php print RUTA; ?>carrito/verificar" method="POST">
    <div class="radio">
      <label><input type="radio" name="pago" value="tc1">Tarjeta de crédito MasterCard</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="pago" value="tc2">Tarjeta de crédito Visa</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="pago" value="td">Tarjeta de débito</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="pago" value="efectivo">Efectivo</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="pago" value="bitcoins">Bitcoins</label>
    </div>
    <div class="form-group text-left">
      <label for="enviar"></label>
      <input type="submit" name="enviar" value="enviar" class="btn btn-success" role="button"/>
    </div>
  </form>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="6U5J69UDQNQNL">
  <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
  </form>
</div>
<?php include_once("piepagina.php"); ?>