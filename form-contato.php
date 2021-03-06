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
    $mail->Username   = 'contato@gr2b.com.br';
    $mail->Password   = '@Plataforma2020';
    $mail->SMTPSecure = 'tls';
    $mail->setFrom($email, $name);

    $mail->addAddress('contato@gr2b.com.br', 'GR2B');

    $mail->isHTML(true);
    $mail->Subject = 'GR2B Formulario - Fale Conosco';

    $mail->Body = "<html><body>" .
        "<div style='color: white; background-color: #407BFF; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold; font-size; 26px'>GR2B</div><br/>" .
        "<b>Nome: </b>" . $name . " <br/>" . " <b>Email: </b>" . $email . " <br/>" .
        "<b>Telefone: </b>" . $telefone . " <br/>" . "<b>Mensagem: </b>" . $message . " <br/>" . "<b>Aera de Interesse: </b>" . $select1 . " <br/>" . "<b>Media de faturamento: </b>" . $select2 . " <br/>" . "<b>Qnt Funcionarios: </b>" . $select3 . " <br/>" .
        "<br/><div style='color: white; background-color: #33ca99; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold;'></div></body></html>";

    $mail->send();
    echo json_encode(['teste1']);
    exit;
} catch (Exception $e) {
    echo "<script type='javascript'>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');";
}
