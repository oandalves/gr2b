<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>GR2B | Fale Conosco</title>
    <?php include 'header2.php'; ?>
    <div class="row center">
        <div class="header-titulo">Fale Conosco</div>
        <div class="header-subtitulo"></div>
    </div>
    </div>
    </div>
    </div>

    <section class="container mx-auto py-5">
        <form method="post" action="form-contato.php">

            <p class="contato-p">Quer enviar uma mensagem, tirar alguma dúvida ou bater um papo?</p>
            <div class="row">
                <div class="col">
                    <input class="form-control mb-2" type="text" name="nome" placeholder="Seu nome">
                    <input class="form-control mb-2" type="text" name="email" placeholder="Seu email">
                    <input class="form-control mb-2" type="text" name="telefone" id="telefone" placeholder="Telefone de contato" required="" onkeypress="$(this).mask('(00) 0000-00009')">
                    <input class="form-control mb-2" type="text" name="cargo" placeholder="Seu cargo">
                    <input class="form-control mb-2" type="text" name="empresa" placeholder="Nome da empresa">
                </div>
                <div class="col">
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="select-area" required>
                            <option selected>Qual sua área de interesse?</option>
                            <option value="Distribuidora">Distribuidora</option>
                            <option value="Indústria">Indústria</option>
                            <option value="Representante">Representante</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="select-media" required>
                            <option selected>Qual a sua média de faturamento?</option>
                            <option value="Até 2 milhões por ano">Até 2 milhões por ano</option>
                            <option value="Entre 2 e 10 milhões">Entre 2 e 10 milhões por ano</option>
                            <option value="Entre 10 e 100 milhões">Entre 10 e 100 milhões por ano</option>
                            <option value="Mais de 100 milhões">Mais de 100 milhões por ano</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="select-funcionarios" required>
                            <option selected>Número de funcionários?</option>
                            <option value="De 1 a 30 funcionários">De 1 a 30 funcionários</option>
                            <option value="De 30 a 100 funcionários">De 30 a 100 funcionários</option>
                            <option value="De 100 a 500 funcionários">De 100 a 500 funcionários</option>
                            <option value="Mais de 500 funcionários">Mais de 500 funcionários</option>
                        </select>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 90px" name="message" required></textarea>
                        <label for="floatingTextarea2">Sua mensagem</label>
                    </div>
                    <button type="submit" class="btn btn-primary enviar-mensagem float-end">Enviar mensagem <img id="modal" src="./img/ajax-loader.gif"></button>

                </div>
                <div class="form-result">
                    <p>Mensagem enviada!</p>
                </div>

            </div>
            <div id="modal"> </div>
        </form>
        <div class="row">
            <p class="py-3">Também estamos nas redes sociais</p>
            <div class="d-flex flex-row ">
                <a href="https://facebook.com/gr2business/" target="_blank"><i class="fab fa-facebook fa-2x" style="color: #336a99;"></i></a>
                <a href="https://instagram.com/gr2business/" target="_blank" style="margin-right: 2em; margin-left: 2em;"><i class="fab fa-instagram fa-2x" style="color: #336a99;"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube fa-2x" style="color: #336a99;"></i></a>
                <a href="# " target="_blank "><i class="fab fa-linkedin fa-2x " style="color: #336a99; margin-left: 1em; "></i></a>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $('form').submit(function(e) {
            e.preventDefault();

            let $form = $(this);
            const action = $form.attr('action');
            const data = $form.serialize();
            $('#modal').css('visibility', 'visible');

            $.post({
                data: data,
                url: action,
                success: function(result) {
                    $('#modal').css('visibility', 'hidden');
                    $('.form-result').css('visibility', 'visible');
                    const data = JSON.parse(result);
                    console.log(data['']);
                    setTimeout(function() {
                        location.reload(true);
                    }, 2000);

                },
            });
        });
    </script>

    </body>

</html>