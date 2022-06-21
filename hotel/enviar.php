<?php
require "conexion.php";
 
//creamos variables en donde se guaradaran
// los valores enviados por POST
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $llegada = $_POST['llegada'];
  $salida = $_POST['salida'];
  $persona = $_POST['personas'];
  $habitacion  = $_POST['habitacion'];
  $spa = $_POST['spa'];

  echo $nombre;

  $insertar = "INSERT INTO reservaciones (nombre,correo, telefono,llegada,salida,persona,habitacion,spa) VALUES ('$nombre','$correo','$telefono','$llegada','$salida','$persona','$habitacion','$spa')";
   
  //creamos variables en donde se guardaran las consultas para comparar
  $in = "SELECT * FROM reservaciones WHERE llegada = '$llegada'";
  $out = "SELECT * FROM reservaciones WHERE salida = '$salida'";
  $hab = "SELECT * FROM reservaciones WHERE habitacion = '$habitacion'";



if($llegada > $salida){
  echo '
  <script>
    alert("No se puede reservar la habitación. La Fecha de Entrada es mayor a la de Salida.");
    location.href="reservar.php";
  </script>
';
}
/*
$resultadoUno = mysqli_query($conectar, $in);
$resultadoDos = mysqli_query($conectar, $out);
$resultadoTres = mysqli_query($conectar, $hab);




if($resultadoUno && $resultadoDos && $resultadoTres){
  echo '
  <script>
    alert("La habitación ya se encuentra ocupada en la fechas que seleccionó");
    location.href="reservar.php";
  </script>
';
}
else{
  echo '
  <script>
    alert("Su reservación se ha relizado con ÉXITO");
    location.href="habitaciones.php";
  </script>
';
exit;

}
*/
$query = mysqli_query($conectar, $insertar);

if($query){
    echo '
      <script>
        alert("Su reservación se ha relizado con ÉXITO");
        location.href="habitaciones.php";
      </script>
    ';
    exit;
  }
  else{
    echo '
      <script>
        alert("Hubo un problema al guardar. Inténtelo de nuevo.");
        location.href="reservar.php";
      </script>
    
    ';
  }

?>