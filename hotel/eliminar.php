<?php
 require "conexion.php";
 $nombre = $_GET['nombre'];

 echo $nombre;

 $eliminar = "DELETE FROM reservaciones WHERE nombre ='$nombre'";
 $resultado = mysqli_query($conectar, $eliminar);

 if($resultado){
   header("location:registro.php");
 }
 else{
   echo "no se pudo eliminar el dato";
 }

?>