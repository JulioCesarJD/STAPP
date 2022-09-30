<?php

    //$destinatario = 'info@stapp.com.do';
    $destinatario = 'carlosjalmonte1980@gmail.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $header = "Enviado desde la página Web: Stapp.com.do";
    $mensajeCompleto = $message . "\nAtentamente: " . $nombre;

    $correo = mail($destinatario, $subject, $mensajeCompleto, $header);

    if ($correo) {

        echo "<script>alert('Correo enviado exitosamente')</script>";
        echo "<script> setTimeout(\"location.href='index.htm'\", 1000)</script>";
        
    }else{

        echo "<script>alert('Error al enviar el correo')</script>";
        echo "<script> setTimeout(\"location.href='index.htm'\", 1000)</script>";
    }

   

?>