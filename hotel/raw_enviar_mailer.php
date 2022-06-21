<?php

include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'jcantepat@gmail.com';   
$mail->Password = 'B3t3lg3us3';  

$mail->setFrom('jcantepat@gmail.com', 'NOMBRE DESDE DONDE VA A SALIR EL CORREO');
$mail->addAddress('jcanpat@outlook.com', 'NOMBRE DE LA PERSONA A LA QUE LE LLEGA EL CORREO');     // Add a recipient
$mail->addReplyTo('jcantepat@gmail.com', 'NOMBRE DESDE DONDE VA A SALIR EL CORREO');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por'.$_POST['nombre'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['nombre'].'<br><b>Correo: </b>'.$_POST['correo'].'<br><b>Celular: </b>'.$_POST['telefono'].'<br><b>Comentarios: </b>'.$_POST['comentario'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="index.php";
    </script>
  ';
    echo 'Gracias '.$_POST['nombre'].' por contactarnos, nosotros nos comumnicamos contigo a la brevedad.';
}

?>