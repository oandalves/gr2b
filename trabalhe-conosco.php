<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>GR2B | Trabalhe conosco</title>

    <?php include 'header1.php'?>
                <div class="row center">
                    <div class="header-titulo">Trabalhe conosco</div>
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