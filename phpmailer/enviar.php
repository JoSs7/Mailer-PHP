<?php
    include("Mailer/src/PHPMailer.php");
    include("Mailer/src/SMTP.php");
    include("Mailer/src/Exception.php");

    try {
        //Email
        $emailTo = $_POST["correo"];
        //Asunto
        $subject = $_POST["asunto"];
        //Mensaje
        $bodyEmail = $_POST["mensaje"];

        //DATOS DE REMITENTE
        //Correo
        $fromEmail = "correo@hotmail.com";
        //Nombre
        $fromName = "Nombre";
        //Host
        $host = "smtp.live.com";
        //
        $port = "587";
        $SMTPauth = "login";
        $_SMTPSecure = "tls";
        //Contraseña
        $password = "contraseña";

        //Para muchos emails
        // if (is_array($emailTo)) {
        //     foreach ($emailTo as $key => $value) {
        //         $mail->addAddress($value);
        //     }
        // } else {
        //     $mail->addAddress($emailTo);
        // }

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();

        $mail->SMTPDebug = 2;
        $mail->Host = $host;
        $mail->Port = $port;
        $mail->SMTPAuth = $SMTPauth;
        //Options es para https
        // $mail->SMTPOptions = $array(
        //     'ssl' => array(
        //         'verify_peer' => false,
        //         'verify_peer_name' => false,
        //         'allow_self_signed' => true
        //     )
        // );
        $mail->Username = $fromName;
        $mail->Password = $password;

        $mail->setFrom($fromEmail, $fromName);

        $mail->addAddress($emailTo);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $bodyEmail;

        if(!$mail->send()) {
            var_dump("No se pudo enviar el correo!"); die();
        } else {
            var_dump("Correo enviado con exito!"); die();
        }

    } catch (Exception $e) {
        var_dump($e);
    }
?>