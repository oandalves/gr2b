<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';


if (!empty($_POST)) {
    $nome       = $_POST['nome'];
    $email      = $_POST['email'];
    $telefone   = $_POST['telefone'];
    $mensagem   = $_POST['mensagem'];
    $nomeArquivo = $_FILES["arquivo"]["name"];
    $target = __DIR__ . '/uploads/' . $nomeArquivo;
}
if (!empty($nomeArquivo)) {
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $target)) {
        $uploadedFile = $target;
    } else {
        $uploadStatus = 0;
        echo "Sorry, there was an error uploading your file.";
    }
}

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host             = 'mail.gr2b.com.br';
    $mail->SMTPAuth         = true;
    $mail->Username   = 'contato@gr2b.com.br';
    $mail->Password   = '@Plataforma2020';
    $mail->SMTPSecure = 'tls';
    $mail->setFrom($email, $name);

    $mail->addAddress('contato@gr2b.com.br', 'GR2B');

    $mail->isHTML(true);
    $mail->Subject = 'GR2B - Trabalhe conosco';
    $mail->Body = "<html><body>" .
        "<div style='color: white; background-color: #407BFF; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold; font-size; 26px'>GR2B</div><br/>" .
        "<b>Nome: </b>" . $nome . " <br/>" . " <b>Email: </b>" . $email . " <br/>" .
        "<b>Telefone: </b>" . $telefone . " <br/>" . "<b>Mensagem: </b>" . $mensagem . " <br/>" .
        "<br/><div style='color: white; background-color: #33ca99; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold;'></div></body></html>";
    $mail->addAttachment($uploadedFile);


    $mail->send();
    header("Location: trabalhe-conosco.php");

    exit;
} catch (Exception $e) {
    echo json_encode(['Erro']);
}
