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
        <form method="POST" action="enviar.php">
            <p class="contato-p">Quer enviar uma mensagem, tirar alguma dúvida ou bater um papo?</p>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control mb-2" type="text" name="nome" id="nome" placeholder="Seu nome" maxlength="255" required>
                    <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Seu email" maxlength="255" required>
                    <input class="form-control mb-2" type="text" name="telefone" id="telefone" placeholder="Telefone de contato" onkeypress="$(this).mask('(00) 0000-00009')" required>
                    <input class="form-control mb-2" type="text" name="cargo" id="cargo" placeholder="Seu cargo" maxlength="50" required>
                    <input class="form-control mb-2" type="text" name="empresa" id="empresa" placeholder="Nome da empresa" maxlength="50" required>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="interesse" id="interesse" required>
                            <option selected>Qual sua área de interesse?</option>
                            <option value="Distribuidora">Distribuidora</option>
                            <option value="Indústria">Indústria</option>
                            <option value="Representante">Representante</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="faturamento" id="faturamento" required>
                            <option selected>Qual a sua média de faturamento?</option>
                            <option value="Até 2 Milhões">Até 2 Milhões por ano</option>
                            <option value="Entre 2 e 10 Milhões">Entre 2 e 10 Milhões por ano</option>
                            <option value="Entre 10 e 100 Milhões">Entre 10 e 100 Milhões por ano</option>
                            <option value="Mais de 100 Milhões">Mais de 100 Milhões por ano</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="funcionarios" id="funcionarios" required>
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