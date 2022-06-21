<?php
  require "sesion.php";
  session_start();
  session_destroy();
  echo '
    <script> 
      alert("Ha cerrado Sesión");
      location.href = "login.php";
    </script>
   ';

   ?>