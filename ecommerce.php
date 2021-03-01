<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>GR2B | Ecommerce GR2B</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css?v=803">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        const params = new URLSearchParams(location.search);
        $type = params.get('type');
        console.log($type);

        if ($type == 'distribuidora') {
            $("#distribuidora").show();
            $("#industria").hide();
            $("#representante").hide();
            $(".distribuidora").addClass("area-ativa")
            $(".industria").removeClass("area-ativa")
            $(".representante").removeClass("area-ativa")
            console.log('oi');
        } else if ($type == 'industria') {
            $("#distribuidora").hide();
            $("#industria").show();
            $("#representante").hide();
            $(".distribuidora").removeClass("area-ativa")
            $(".industria").addClass("area-ativa")
            $(".representante").removeClass("area-ativa")
            console.log('oi1');
        } else {
            $("#distribuidora").hide();
            $("#industria").hide();
            $("#representante").show();
            $(".distribuidora").removeClass("area-ativa")
            $(".industria").removeClass("area-ativa")
            $(".representante").addClass("area-ativa")
            console.log('oi2');
        }

        $(".distribuidora").click(function() {
            $("#distribuidora").show();
            $("#industria").hide();
            $("#representante").hide();
            $(".distribuidora").addClass("area-ativa")
            $(".industria").removeClass("area-ativa")
            $(".representante").removeClass("area-ativa")
        });

        $(".industria").click(function() {
            $("#distribuidora").hide();
            $("#industria").show();
            $("#representante").hide();
            $(".distribuidora").removeClass("area-ativa")
            $(".industria").addClass("area-ativa")
            $(".representante").removeClass("area-ativa")
        });

        $(".representante").click(function() {
            $("#distribuidora").hide();
            $("#industria").hide();
            $("#representante").show();
            $(".distribuidora").removeClass("area-ativa")
            $(".industria").removeClass("area-ativa")
            $(".representante").addClass("area-ativa")
        });
    });
    </script>
</head>

<body>
    <div id="header-site">
    <div class="header-site">
            <div class="container mx-auto">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="./img/logo-gr2b.png" class="img-fluid" alt="Logo GR2B">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                            </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav ms-auto mb-2">
                                <li class="link-menu dropdown">
                                    <a class="nav-link dropdown-toggle" href="ecommerce.php" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        E-commerce B2B
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="ecommerce.php?type=distribuidora">Distribuidoras</a></li>
                                        <li><a class="dropdown-item" href="ecommerce.php?type=industrias">Indústrias</a>
                                        </li>
                                        <li><a class="dropdown-item" href="ecommerce.php?type=representante">Representantes</a></li>
                                    </ul>
                                </li>

                                <li class=" link-menu">
                                    <a class="nav-link" href="sobre.php">Sobre a GR2B</a>
                                </li>
                                <li class=" link-menu">
                                    <a class="nav-link" href="planos.php">Planos</a>
                                </li>
                                <li class=" link-menu">
                                    <a class="nav-link" href="recursos.php">Recursos</a>
                                </li>
                                <li class=" link-menu">
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
                    <div class="header-titulo">E-commerce B2B</div>
                    <div class="header-subtitulo">Evoluímos com nossos clientes a cada dia para que eles vendam a cada
                        minuto</div>
                </div>
            </div>
        </div>
    </div>
    <section class="container mx-auto">
        <div class="row ecommerce-title">
            <div class="col-md-6">Qual sua área de interesse?</div>
            <div class="col-md-6 menu-ecommerce">
                <a class="distribuidora ecommerce-link">Distribuidoras</a>
                <a class="industria ecommerce-link">Indústria</a>
                <a class="representante ecommerce-link">Representantes</a>
            </div>
        </div>
        <div class="linha-cinza"></div>
    </section>
    <section class="container mx-auto ecommerce" id="distribuidora">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h3>Fortificar laços entre vendedor e representates</h3>
                    <p>Seu representante obterá as informações mais recentes sobre seus produtos, clientes e políticas
                        comerciais para melhorar a qualidade e flexibilidade.

                    </p>
                </div>
                <div>
                    <h3>Potencializar o Gerente de Negócios</h3>
                    <p>Os gerentes e coordenadores de vendas terão uma visão clara e em tempo real do que está
                        acontecendo com os clientes e suas equipes de vendas.

                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./img/distribuidoras.png" alt="E-commerce B2B Distribuídoras" class="img-fluid img-ecommerce"
                    width="80%">
            </div>
        </div>
    </section>
    <section class="container mx-auto ecommerce" id="industria">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h3>Reforçar sua equipe de apoio</h3>
                    <p>A equipe interna não precisará mais perder tempo digitando pedidos, corrigindo erros e executando
                        operações que não aumentarão os negócios.

                    </p>
                </div>
                <div>
                    <h3>Estimular seu cliente</h3>
                    <p>Seus clientes terão acesso exclusivo para navegar pelos produtos do seu computador ou celular,
                        solicitar cotações e fazer pedidos pela Internet 24 horas por dia.

                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./img/industria.png" alt="E-commerce B2B Distribuídoras" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="container mx-auto ecommerce" id="representante">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h3>Potenciar você e seus produtos</h3>
                    <p>As últimas informações sobre produtos e clientes são vendidas com maior qualidade e agilidade.

                    </p>
                </div>
                <div>
                    <h3>Fortalecer sua gestão</h3>
                    <p>Você pode ver tudo o que está acontecendo com clientes, agentes e comissões de forma clara e em
                        tempo real.

                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./img/representantes.png" alt="E-commerce B2B Distribuídoras" class="img-fluid" width="85%">
            </div>
        </div>
    </section>
    <section class="container-fluid bgcolor-bege" style="height:30em; margin-bottom: 5em; margin-top: 5em;">
        <div class="container mx-auto">
            <div class="row ecommerce-bege">
                <div class="col-md-6">
                    <img src="./img/tela-sistema-gr2b.png" alt="" class="img-fluid ecommerce-image-01">
                    <img src="./img/tela-sistema-gr2b-produtos.png" alt="" class="img-fluid ecommerce-image-02">
                </div>
                <div class="col-md-6 ecommerce-bege-text">
                    <div>
                        <h3 class="text-green-ecommerce">A plataforma GR2B</h3>
                        <p>Descubra o número de visitas recebidas e converta essas visitas em pedidos, compare com as
                            vendas de um ano e meses anteriores, acompanhe a quantidade de produtos vendidos e a
                            previsão dos resultados do mês, ou o valor do e-commerce B2B vendas a cada dia, Saiba se a
                            meta definida é atingida, explore quantos clientes fazem pedidos naquele dia, e verifique o
                            desempenho dos grupos de clientes ou regiões e as atividades recentes de sua empresa, de
                            forma a saber o melhor momento para a operação ganhar escala.

                        </p>
                    </div>
                    <div>
                        <h3 class="text-green-ecommerce">Tenha o controle da sua empresa</h3>
                        <p>Somente clientes com login e senha podem acessar seu catálogo e preços, exiba ou oculte
                            categorias de produtos de acordo com cada cliente, região ou segmento, defina listas de
                            preços e políticas de negócios de acordo com cada cliente, região ou segmento. Além disso,
                            personalize seu e-commerce.net da forma que desejar.

                        </p>
                    </div>
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