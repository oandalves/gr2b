<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';


if (!empty($_POST)) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $telefone = $_POST['telefone'];
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    $select1 = $_POST['select-area'];
    $select2 = $_POST['select-media'];
    $select3 = $_POST['select-funcionarios'];
    
}

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'mail.gr2b.com.br';
    $mail->SMTPAuth = true;
    $mail->Username   = 'barbara@gr2b.com.br';
    $mail->Password   = '@Allstar2021';
    $mail->SMTPSecure = 'tls';
    $mail->setFrom($email, $name);

    $mail->addAddress('barbara@gr2b.com.br', 'GR2B');

    $mail->isHTML(true);
    $mail->Subject = '*Resposta do Formulario*';
    $mail->Body = "Resposta do formulario <br/><br/>" . 
    "Nome: " . $name . " <br/><br/>" . " Email:  " . $email . " <br/><br/>" . 
    "Telefone: " . $telefone . " <br/><br/>" . "Cargo:" . $cargo . " <br/><br/>". "Empresa:" . $empresa ."<br/><br/>" . "Mensagem: " . $message . " <br/><br/>" . "Area:" . $select1 . " <br/><br/>" . "Media:" . $select2 . " <br/><br/>" . "Numero de Funcionarios:" . $select3 . " <br/><br/>";
   

    $mail->send();
    echo 'A mensagem foi enviada!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
