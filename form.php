<?php
if($_POST['submit'] == "submit"){

  if(!$_POST['name']){
    $error .= "</br> Porfavor Ingrese Su Nombre";
  }else{
    $nombre = $_POST['name'];
  }

  if(!$_POST['email']){
    $error .= "</br> Porfavor Ingrese Su Correo";
  }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $error .= "</br> Porfavor Ingrese Un Correo Valido";
  }else{
    $correo = $_POST['email'];
  }

  if(!$error){
    $asunto = $_POST['subject'];
    $mensaje = $_POST['mensaje'];
    $emisor = "joedhernandez95@hotmail.com";

     $to= $emisor;
     $subject=$asunto;
     $from = $correo;
     $body= $mensaje;

     $headers = "From: " .($from) . "\r\n";
     $headers .= "Reply-To: ".($from) . "\r\n";
     $headers .= "Return-Path: ".($from) . "\r\n";;
     $headers .= "MIME-Version: 1.0\r\n";
     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
     $headers .= "X-Priority: 3\r\n";
     $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
     if(mail($to,$subject,$body,$headers)){
       $success = 1;
     }else{
       $success = 2;
     }
  }
}
?>
