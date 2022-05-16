<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'emailprueba@gmail.com';                     //SMTP username
    $mail->Password   = '225555';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $emailTo=$_POST["nuevoEmail"];
    $mail->setFrom('emailprueba@gmail.com', 'Mailer');
    $mail->addAddress($emailTo, 'Joe User');     //Add a recipient

    //Optional name

    //Content
    $miConsulta = $_POST["consulta"];
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Esta es una prueba de correo';
    $mail->Body    = "$miConsulta <b>in bold!</b>";

    $mail->send();
    echo 'Mensaje Enviado :D';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
