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
        <form method="post" action="form-contato.php">

            <p class="contato-p">Quer enviar uma mensagem, tirar alguma dúvida ou bater um papo?</p>
            <div class="row">
                <div class="col">
                    <input class="form-control mb-2" type="text" name="nome" placeholder="Seu nome">
                    <input class="form-control mb-2" type="text" name="email" placeholder="Seu email">
                    <input class="form-control mb-2" type="text" name="telefone" placeholder="Telefone de contato">
                    <input class="form-control mb-2" type="text" name="cargo" placeholder="Seu cargo">
                    <input class="form-control mb-2" type="text" name="empresa" placeholder="Nome da empresa">
                </div>
                <div class="col">
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="select-area">
                            <option selected>Qual sua área de interesse?</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="select-media">
                            <option selected>Qual a sua média de faturamento?</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select class="form-select" aria-label="Default select example" name="select-funcionarios">
                            <option selected>Número de funcionários?</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 90px" name="message"></textarea>
                        <label for="floatingTextarea2" >Sua mensagem</label>
                    </div>
                    <button type="submit" class="btn btn-primary enviar-mensagem float-end">Enviar mensagem</button>
                </div>
            </div>
        </form>
        <div class="row">
            <p class="py-3">Também estamos nas redes sociais</p>
            <div class="d-flex flex-row ">
                <a href="#" target="_blank"><i class="fab fa-facebook fa-2x" style="color: #336a99;"></i></a>
                <a href="#" target="_blank" style="margin-right: 2em; margin-left: 2em;"><i class="fab fa-instagram fa-2x" style="color: #336a99;"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube fa-2x" style="color: #336a99;"></i></a>
                <a href="# " target="_blank "><i class="fab fa-linkedin fa-2x " style="color: #336a99; margin-left: 1em; "></i></a>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>