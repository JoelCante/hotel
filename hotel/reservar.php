<link rel="stylesheet" href="estilos.css">
<title>Reservar - Flor de Agua Hotel</title>
<header>
<?php
include "cabecera.php";
?>
</header>

<section>

<div class="cuadro_Img texto_Fondo">
  
        <div  class="texto_Fondo ancho">
    <h1>Reserva tu habitación ahora</h1>
    <figure>
    <img src="imagenes/rectangulo.png" alt="">
    </figure>
    </div >
</div>


     <div>
     <div id="formulario_Uno">
        <div class="formulario_reservar ancho">
            <br>
          <br>
                <form action="enviar.php" method="POST" class="ancho">
                    <label for="">Sus Datos</label>
                    <input class="entrada" name="nombre" type="text" placeholder="Nombre completo*" required>
                    <input class="entrada" name="correo" type="text" placeholder="Correo*" required>
                    <input class="entrada" name="telefono" type="text" placeholder="Teléfono*" required>
                    <label for="">Fecha de llegada y Salida</label>
                    <div class="fechas">
                    <input class="entrada" name="llegada" type="date" placeholder="llegada" required>
                    <input class="entrada" name="salida" type="date" placeholder="Salida" required>
                    </div>
                    <label for="">Detalles de Reservación</label>

                    <select name="personas" required class="entrada" >
                    <option value="">Cantidad de personas*</option>
                    <option value="1">1 persona</option>
                    <option value="2">2 personas</option>
                    <option value="3">3 personas</option>
                    <option value="4">4 personas</option>
                    <option value="5">5 personas</option>
                    </select>
    
                    <select name="habitacion" required class="entrada" >
                    <option value="">Selecciona tipo de habitación*</option>
                    <option value="DoubleSuite">Double Suite</option>
                    <option value="MasterSuite">Máster Suite</option>
                    <option value="HabitacionJunior">Habitación Junior</option>
                    <option value="AkbalSuite">Akbal Suite</option>
                    <option value="YaaxSuite">Yaax Suite</option>
                    </select>
         
                    <select name="spa" class="entrada" >
                    <option value="">Selecciona Servicio de SPA</option>
                    <option value="Masajes">Masajes</option>
                    <option value="Terapias">Terapias</option>
                    <option value="Tratamientos">Tratamientos especiales</option>
                    <option value="Basico">Básico**</option>
                    </select>
                    <button type="submit" class="btn_rojo"> Reservar </button>
                    <br>
                  </form>
                <p>**Todas las reservaciones incluyen el servicio de Spa Básico</p>
        </div>
     </div>
        
   

        <div class="cuadro_verde texto_Fondo">
        <h1>Aceptamos pagos con Tarjeta</h1>
    </div>

        <div class="ancho" id="politicas">
        <div>
        <h2>Politicas de Reservación</h2>
        <br>
        <p>
        Bienvenidos al Hotel Flor de Agua, una experiencia única. 
        </p>

        <ol>
            <li>Nuestras tarifas son en pesos mexicanos MXN, por habitación por noche.</li>
            <li> El Check-in es a las 15:00 horas</li>
            <li>El Check-out es a las 12:00 horas</li>
            <li>No se efectuaran reembolsos ni se emitirá ningún tipo de crédito por causa de mal clima, huracanes,
                 tormentas tropicales, incluyendo cualquier inconveniente o complicación que pudiera surgir por el impacto directo,
                 o alerta de huracán en la zona. Los huracanes son impredecibles por naturaleza. Lo invitamos a adquirir un seguro
                  de viaje que lo proteja de estos inconvenientes.</li>
        </ol>

        <br><br>

        <h2>Políticas de Cancelación</h2>
        <br>
        <ol>
            <li>Al confirmar su reservación con su depósito, PayPal o su tarjeta de crédito, usted estará aceptando los términos y
                 condiciones de nuestras políticas de cancelación.</li>
            <li>
            Cualquier cancelación hecha entre 30 y 15 días antes de su llegada recibirá un reembolso del 100%* de su depósito o un 
            crédito valido por un año desde la fecha de cancelación *(siempre y cuando su depósito haya sido a través de medios bancarios
             o transferencias, de lo contrario usted se somete a las comisiones bancarias por pago con tarjetas)
            </li>
            <li>Las cancelaciones hechas menos de 14 días antes de la fecha de llegada no tendrán reembolso alguno</li>
        </ol>

    </div>

        </div>
      
        <a href="login.php">Ver reservaciones(sólo Acceso Autorizado))</a>

</section>

<footer>
<?php
include "pie.php";
?>
</footer>
