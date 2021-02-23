<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../gr2b/PHPMailer-master/src/Exception.php';
require '../gr2b/PHPMailer-master/src/PHPMailer.php';
require '../gr2b/PHPMailer-master/src/SMTP.php';

if ($_POST) {

    $nome      = $_POST['nome'];
    $email     = $_POST['email'];
    $telefone     = $_POST['telefone'];
    $mensagem  = $_POST['mensagem'];
    $arquivo   = $_FILES["arquivo"];
    
    $err = false;
    $msg = '';
    $email = '';

    if (array_key_exists('nome', $_POST)) {
        $nome = substr(strip_tags($_POST['nome']), 0, 255);
    } else {
        $nome = '';
        $msg .= 'Por gentileza, insira seu nome';
        $err = true;
    }

    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= 'Por gentileza, verifique o endereço de e-mail fornecido.';
        $err = true;
    }

    if (array_key_exists('telefone', $_POST)) {
        $telefone = substr(strip_tags($_POST['telefone']), 0, 255);
    } else {
        $telefone = '';
        $msg .= 'Por gentileza, insira um número de telefone válido';
        $err = true;
    }

    if (array_key_exists('mensagem', $_POST)) {
        $mensagem = substr(strip_tags($_POST['mensagem']), 0, 16384);
    } else {
        $mensagem = '';
        $msg = 'Por gentileza, insira o texto da sua mensagem.';
        $err = true;
    }

    if (!$err) {
        $corpoMSG = "<div style='color: white; background-color: #407BFF; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold; font-size; 26px'>GR2B - Vagas de Emprego</div>" .
        "<br><b>Nome: </b>" . $nome .
        "<br><b>Email: </b>" . $email .
        "<br><b>Telefone: </b>" . $telefone .
        "<br><b>Informações adicionais: </b>" . $mensagem .
        "<br><br><div style='color: white; background-color: #33ca99; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold;'></div>";

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host       = 'mail.gr2b.com.br';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'anderson@gr2b.com.br';
        $mail->Password   = '@Adele2021';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet = PHPMailer::CHARSET_UTF8;

        $mail->setFrom('comercial@gr2b.com.br', (empty($nome) ? 'Nome' : $nome));
        $mail->addAddress('comercial@gr2b.com.br');
        $mail->addReplyTo($email, $nome);

        $mail->isHTML(true);
        $mail->Subject = 'GR2B - Currículo para vagas disponíveis';
        $mail->MsgHTML($corpoMSG);

        $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

        if (!$mail->send()) {
            $msg .= 'Ops, apresentou um erro: ' . $mail->ErrorInfo;
        } else {
            $msg .= 'Sua mensagem foi enviada, em breve entraremos em contato.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>GR2B | Vagas</title>

    <?php include 'header1.php'?>
                <div class="row center">
                    <div class="header-titulo">Vagas</div>
                    <div class="header-subtitulo"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="container mx-auto py-5">
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <h3><?php if (empty($msg)) { ?></h3>
                <form method="POST" enctype="multipart/form-data">
                    <h2>Venha trabalhar conosco!</h2>
                    <p class="">Envie seus dados abaixo e entraremos em contato com você.</p>
                    <input class="form-control mb-2" type="text" name="nome" id="nome" placeholder="Seu nome" maxlength="255" required="">
                    <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Seu email" maxlength="255" required="">
                    <input class="form-control mb-2" type="text" name="telefone" id="telefone" placeholder="Telefone de contato" required="" onkeypress="$(this).mask('(00) 0000-00009')">
                    <input class="form-control mb-2" type="file" name="arquivo" id="arquivo" accept=".pdf,.docx" required="">
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 90px" name="mensagem" require=""></textarea>
                        <label for="floatingTextarea2">Conte-nos sobre você</label>
                    </div>
                    <button type="submit" class="btn btn-primary enviar-mensagem float-end">Enviar mensagem</button>
                </form>
                <h3>
                <?php } else {
                        echo $msg;
                    } ?>
                </h3>
            </div>
        </div>
    </section>
    <?php include 'footer.php'?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>