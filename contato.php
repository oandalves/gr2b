<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../gr2b/PHPMailer-master/src/Exception.php';
require '../gr2b/PHPMailer-master/src/PHPMailer.php';
require '../gr2b/PHPMailer-master/src/SMTP.php';

if (array_key_exists('email', $_POST)) {
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

    if (array_key_exists('cargo', $_POST)) {
        $cargo = substr(strip_tags($_POST['cargo']), 0, 255);
    } else {
        $cargo = '';
        $msg .= 'Por gentileza, insira seu cargo na empresa';
        $err = true;
    }

    if (array_key_exists('empresa', $_POST)) {
        $empresa = substr(strip_tags($_POST['empresa']), 0, 255);
    } else {
        $empresa = '';
        $msg .= 'Por gentileza, vinsira o nome da empresa que trabalha';
        $err = true;
    }

    if (array_key_exists('interesse', $_POST)) {
        $interesse = substr(strip_tags($_POST['interesse']), 0, 255);
    } else {
        $interesse = '';
        $msg .= 'Por gentileza, insira a área de interesse';
        $err = true;
    }

    if (array_key_exists('faturamento', $_POST)) {
        $faturamento = substr(strip_tags($_POST['faturamento']), 0, 255);
    } else {
        $faturamento = '';
        $msg .= 'Por gentileza, insira a média de faturamento.';
        $err = true;
    }

    if (array_key_exists('funcionarios', $_POST)) {
        $funcionarios = substr(strip_tags($_POST['funcionarios']), 0, 255);
    } else {
        $funcionarios = '';
        $msg .= 'Por gentileza, insira a quantidade de funcionários';
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
        $mail->Subject = 'GR2B - Formulário de contato';
        $mail->Body = "<div style='color: white; background-color: #407BFF; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold; font-size; 26px'>GR2B</div>" .
            "<br><b>Nome: </b>" . $nome .
            "<br><b>Email: </b>" . $email .
            "<br><b>Telefone: </b>" . $telefone .
            "<br><b>Cargo: </b>" . $cargo .
            "<br><b>Empresa: </b>" . $empresa .
            "<br><b>Área de interesse: </b>" . $interesse .
            "<br><b>Média de faturamento: </b>" . $faturamento .
            "<br><b>Número de funcionários: </b>" . $funcionarios .
            "<br><b>Mensagem: </b><br>" . $mensagem .
            "<br><br><div style='color: white; background-color: #33ca99; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; font-weight: bold;'></div>";

        if (!$mail->send()) {
            $msg .= 'Ops, apresentou um erro: ' . $mail->ErrorInfo;
        } else {
            $msg .= 'Sua mensagem foi enviada, em breve entraremos em contato.';
        }
    }
} ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>GR2B | Fale Conosco</title>
    <?php include 'header2.php';?>
                <div class="row center">
                    <div class="header-titulo">Fale Conosco</div>
                    <div class="header-subtitulo"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="container mx-auto py-5">
        <h3><?php if (empty($msg)) { ?></h3>
        <form method="POST">
            <p class="contato-p">Quer enviar uma mensagem, tirar alguma dúvida ou bater um papo?</p>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control mb-2" type="text" name="nome" id="nome" placeholder="Seu nome" maxlength="255">
                    <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Seu email" maxlength="255">
                    <input class="form-control mb-2" type="text" name="telefone" id="telefone" placeholder="Telefone de contato" onkeypress="$(this).mask('(00) 0000-00009')">
                    <input class="form-control mb-2" type="text" name="cargo" id="cargo" placeholder="Seu cargo" maxlength="50">
                    <input class="form-control mb-2" type="text" name="empresa" id="empresa" placeholder="Nome da empresa" maxlength="50">
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="interesse" id="interesse">
                            <option selected>Qual sua área de interesse?</option>
                            <option value="Distribuidora">Distribuidora</option>
                            <option value="Indústria">Indústria</option>
                            <option value="Representante">Representante</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="faturamento" id="faturamento">
                            <option selected>Qual a sua média de faturamento?</option>
                            <option value="Até 2 Milhões">Até 2 Milhões por ano</option>
                            <option value="Entre 2 e 10 Milhões">Entre 2 e 10 Milhões por ano</option>
                            <option value="Entre 10 e 100 Milhões">Entre 10 e 100 Milhões por ano</option>
                            <option value="Mais de 100 Milhões">Mais de 100 Milhões por ano</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="funcionarios" id="funcionarios">
                            <option selected>Número de funcionários?</option>
                            <option value="De 1 a 30 funcionários">De 1 a 30 funcionários</option>
                            <option value="De 30 a 100 funcionários">De 30 a 100 funcionários</option>
                            <option value="De 100 a 500 funcionários">De 100 a 500 funcionários</option>
                            <option value="Mais de 500 funcionários">Mais de 500 funcionários</option>
                        </select>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 90px" name="mensagem"></textarea>
                        <label for="floatingTextarea2">Sua mensagem</label>
                    </div>
                    <button type="submit" class="btn btn-primary enviar-mensagem float-end">Enviar mensagem</button>
                </div>
            </div>
        </form>
        <h3>
        <?php } else {
                echo $msg;
            } ?>
        </h3>
        <div class="row">
            <p class="py-3">Também estamos nas redes sociais</p>
            <div class="d-flex flex-row ">
                <a href="#" target="_blank"><i class="fab fa-facebook fa-2x" style="color: #336a99;"></i></a>
                <a href="#" target="_blank" style="margin-right: 2em; margin-left: 2em;"><i class="fab fa-instagram fa-2x" style="color: #336a99;"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube fa-2x" style="color: #336a99;"></i></a>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php' ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>