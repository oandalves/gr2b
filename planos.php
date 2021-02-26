<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>GR2B | Planos</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css?v=704">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".bt1").addClass("btn");
        $("#industria").show();
        $("#representante").hide();
        $(".bt1").click(function() {
            $("#industria").show();
            $("#representante").hide();
            $(".bt1").addClass("btn");
            $(".bt2").removeClass("btn");
        });
        $(".bt2").click(function() {
            $("#industria").hide();
            $("#representante").show();
            $(".bt2").addClass("btn")
            $(".bt1").removeClass("btn");
        });
    });
    </script>
</head>

<body>
    <div id="header-site">
        <div class="header-site">
            <div class="container mx-auto">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="index.php">
                        <img src="./img/logo-gr2b.png" class="img-fluid" alt="Logo GR2B">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-xl-0">
                            <li class="nav-item dropdown link-menu">
                                <a class="nav-link dropdown-toggle" href="ecommerce.php" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    E-commerce B2B
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href="ecommerce.php?type=distribuidora">Distribuidoras</a></li>
                                    <li><a class="dropdown-item" href="ecommerce.php?type=industrias">Indústrias</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="ecommerce.php?type=representante">Representantes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item link-menu">
                                <a class="nav-link" href="sobre.php">Sobre a GR2B</a>
                            </li>
                            <li class="nav-item link-menu">
                                <a class="nav-link" href="planos.php">Planos</a>
                            </li>
                            <li class="nav-item link-menu">
                                <a class="nav-link" href="recursos.php">Recursos</a>
                            </li>
                            <li class="nav-item link-menu">
                                <a class="nav-link" href="clientes.php">Clientes</a>
                            </li>
                            <li class="nav-item link-menu">
                                <a class="nav-link" href="contato.php" role="button">
                                    Fale Conosco
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row center">
                    <div class="header-titulo">Planos e preços</div>
                    <div class="header-subtitulo"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="container mx-auto py-5">
        <div class="row menu-industria-representantes">
            <a class="industria-representantes bt1">Indústrias e Distribuidoras</a>
            <a class="industria-representantes bt2">Representantes</a>
        </div>
        <!-- Industria -->
        <div class="row mt-4" id="industria">
            <div class="col-md-2 shadow planos">
                <h2 class="plan-title">plano</h2>
                <h3>bronze</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li><s>Time de Sucesso do Cliente</s></li>
                    <li><s>Customização de Layout</s></li>
                    <li><s>Uso de template</s></li>
                    <li><s>Módulo Seja um Marketplace</s></li>
                    <li><s>Clube de Assinatura</s></li>
                    <li><s>Multi CD</s></li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">49</span>,99</h3>
                <p class="">por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
            <div class="col-md-2 shadow planos">
                <h2 class="plan-title">plano</h2>
                <h3>prata</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li>Time de Sucesso do Cliente</li>
                    <li>Customização de Layout</li>
                    <li><s>Uso de template</s></li>
                    <li><s>Módulo Seja um Marketplace</s></li>
                    <li><s>Clube de Assinatura</s></li>
                    <li><s>Multi CD</s></li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">69</span>,99</h3>
                <p class="">por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
            <div class="col-md-2 shadow planos">
                <h2 class="plan-title">plano</h2>
                <h3>ouro</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li>Time de Sucesso do Cliente</li>
                    <li>Customização de Layout</li>
                    <li>Uso de template</li>
                    <li>Módulo Seja um Marketplace</li>
                    <li><s>Clube de Assinatura</s></li>
                    <li><s>Multi CD</s></li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">89</span>,99</h3>
                <p>por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
            <div class="col-md-2 shadow planos diamant-plan">
                <h2 class="plan-title">plano</h2>
                <h3>diamante</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li>Time de Sucesso do Cliente</li>
                    <li>Customização de Layout</li>
                    <li>Uso de template</li>
                    <li>Módulo Seja um Marketplace</li>
                    <li>Clube de Assinatura</li>
                    <li>Multi CD</li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">219</span>,99</h3>
                <p class="">por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
        </div>
        <!-- Representantes -->
        <div class="row mt-4" id="representante">
            <div class="col-md-2 shadow planos">
                <h2 class="plan-title">plano</h2>
                <h3>básico</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li><s>Time de Sucesso do Cliente</s></li>
                    <li><s>Customização de Layout</s></li>
                    <li><s>Uso de template</s></li>
                    <li><s>Módulo Seja um Marketplace</s></li>
                    <li><s>Clube de Assinatura</s></li>
                    <li><s>Multi CD</s></li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">49</span>,99</h3>
                <p class="">por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
            <div class="col-md-2 shadow planos">
                <h2 class="plan-title">plano</h2>
                <h3>médio</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li>Time de Sucesso do Cliente</li>
                    <li>Customização de Layout</li>
                    <li><s>Uso de template</s></li>
                    <li><s>Módulo Seja um Marketplace</s></li>
                    <li><s>Clube de Assinatura</s></li>
                    <li><s>Multi CD</s></li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">69</span>,99</h3>
                <p class="">por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
            <div class="col-md-2 shadow planos">
                <h2 class="plan-title">plano</h2>
                <h3>intermediário</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li>Time de Sucesso do Cliente</li>
                    <li>Customização de Layout</li>
                    <li>Uso de template</li>
                    <li>Módulo Seja um Marketplace</li>
                    <li><s>Clube de Assinatura</s></li>
                    <li><s>Multi CD</s></li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">89</span>,99</h3>
                <p>por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
            <div class="col-md-2 shadow planos pro-plan">
                <p class="plan-title">plano</p>
                <h3>pro</h3>
                <ul>
                    <li>Sem limitações</li>
                    <li>Integração marketplaces</li>
                    <li>Integrações via API pública</li>
                    <li>Venda B2C e B2B</li>
                    <li>Checkout transparente</li>
                    <li>Suporte técnico especializado</li>
                    <li>Time de Onboarding</li>
                    <li>Time de Sucesso do Cliente</li>
                    <li>Customização de Layout</li>
                    <li>Uso de template</li>
                    <li>Módulo Seja um Marketplace</li>
                    <li>Clube de Assinatura</li>
                    <li>Multi CD</li>
                </ul>
                <h3 class="preco">R$<span class="blue-bold">219</span>,99</h3>
                <p class="">por usuário/mês</p>
                <div class="plans-center">
                    <a class="gostei-dessa shadow" href="gostei-dessa.php">Gostei dessa!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto py-5 transforme-sua-empresa">
        <div class="row-content">
            <div class=" informacao-empresa">
                <h2 class="">Transforme sua empresa: <br> venda mais e reduza custos.</h2>
                <p class="">Fale com um de nossos especialistas e saiba como utilizar a nossa tecnologia para
                    impulsionar os seus negócios.</p>
                <a class="fale-especialista" href="contato.php">
                    <strong>Fale com um Especialista</strong>
                </a>
            </div>
            <div class="img-transforme">
                <img src="./img/tela-sistema-gr2b.png" class="img-fluid" alt="Imagem de funcionamento do sistema GR2B">
            </div>

        </div>
    </section>
    <?php include 'footer.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>