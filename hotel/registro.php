<?php
require "sesion.php";
$usuario = $_SESSION['username'];
?>

<link rel="stylesheet" href="estilos.css">
<title>Registro - Flor de Agua Hotel</title>

<header>
<?php
include "cabecera_A.php";
?>
</header>

<section>
<div class="contenedor_inicio ancho">

      <div class="ancho" >
        <h2>Mostrar Datos</h1>
        <br>
      </div>
      <table>
       <tr>
    
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Fecha llegada</th>
        <th>Fecha Salida</th>
        <th>Cantidad huespedes</th>
        <th>Tipo Habitación</th>
        <th>Servicio Spa</th>
        <th>Editar</th>
       </tr>
      
      <?php
        include "conexion.php";
        $info= "SELECT * FROM reservaciones";
        $resultado = mysqli_query($conectar, $info);
        while ($row = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
          <td><?php echo $row["nombre"]; ?></td>
          <td><?php echo $row["correo"]; ?></td>
          <td><?php echo $row["telefono"]; ?></td>
          <td><?php echo $row["llegada"]; ?></td>
          <td><?php echo $row["salida"]; ?></td>
          <td><?php echo $row["persona"];?> personas</td>
          <td><?php echo $row["habitacion"]; ?></td>
          <td><?php echo $row["spa"]; ?></td>
          <td>
          <a href="#" onClick="validar('eliminar.php?nombre=<?php echo $row["nombre"]; ?>')"><img id="borrar" src="imagenes/borrar.png" alt=""></a>
          </tr>
        <?php 
          }
          mysqli_free_result($resultado);
        ?>
    </table>
    <br>
    </div>
    <script>
        function validar(url)
        {
          var eliminar = confirm("¿Está seguro que quiere eliminar los datos del registro?");
            if (eliminar == true){
              window.location=url;
            }
        }
      </script>


</div>



</section>

<footer>
<?php
include "pie.php"
?>
</footer>