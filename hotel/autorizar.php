<?php
require "conexion.php";

$user = $_POST['usuario'];
$pass = $_POST['contrasena'];


$verificar = "SELECT * FROM usuarios WHERE nombre_us='$user' AND contrasena='$pass' ";

$res = mysqli_query($conectar, $verificar);

if (mysqli_num_rows($res) > 0 ) {

    session_start();
    $_SESSION['username'] = $user;
    $_SESSION["auntetificado"] = "SI";
    header("Location: registro.php");

}
 else{
    echo '
    <script>
      alert("Error de Acceso. Inténtelo de nuevo.");
      location.href="login.php?erroruser=SI";
    </script>
  
  ';
}


?>