
<link rel="stylesheet" href="estilos.css">
<title>Iniciar - Flor de Agua Hotel</title>
<header>
<?php
include "cabecera_A.php";
?>
</header>

<section>
<div id="formulario_Uno">
        <div class="formulario_reservar ancho">
            <div>
                <h2>Acceder</h2>
            </div>
            <br>
          <br>
                <form action="autorizar.php" method="POST" class="ancho">
                  <?php
                   $erroruser = isset($_GET["erroruser"]);
                   if ($erroruser == "SI") {
                       echo '<h4 class="alerta">Datos Incorrectos</h4></font><br>';
                   }
                  ?>

                    <label for="">Inicie Sesión</label>
                    <input class="entrada" name="usuario" type="text" placeholder="Usuario*" required>
                    <input class="entrada" name="contrasena" type="text" placeholder="Contraseña*" required>
                
                    <button type="submit" class="btn_rojo"> Entrar </button>
                    <br>
                  </form>
        </div>
     </div>
</section>