<?php
session_start();
if ($_SESSION["auntetificado"] != "SI") {
    header("Location: login.php");
    exit();
}



?>