<?php
    session_start();

    if (!isset($_SESSION["autenticado"]) || !$_SESSION["autenticado"]) {
        header("Location: login.php");
        exit();
    }
    $_SESSION['InfoAleatoria'] = 'abcdef';
?>

<?php include 'Template_Header_User.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/header1.css">
    <link rel="stylesheet" href="css/mainbody.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Space+Mono&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.ico">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/logic.js"></script>
    <title>Pizzaria</title>

</head>

<body>

    
    <form class="form-inline my-2 my-lg-0 d-flex justify-content-center">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    
    <div class="row d-flex justify-content-center mh-50" style="height: 235px">
        <div class="teste">
            <div id="carouselExampleIndicators" class="carousel slide col-md-7 d-flex justify-content-center mw-100"
                data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/promocaoPizza.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/promocaopizzaria2.png" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/promocaoPizza3.jpg" alt="Terceiro Slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <img src="img/promocaopizzaria3.png" class="img-fluid img-promocaopequena3 d-flex justify-content-center col-md-7  mw-100" alt="Imagem responsiva" style="margin-top: 10px">
            </div>
                <div class ="img-promocao col-md-3" style="margin-bottom: 500">                   
                    
                    <img src="img/promocaomenorpizza.png" class="img-fluid img-promocaopequena" alt="Imagem responsiva">
                    <img src="img/promocaobebida.png" class="img-fluid img-promocaopequena2" alt="Imagem responsiva">
                    
                
                </div>

        </div>

    </div>


    <footer style="margin-top: 450px">

        <div class="row">
            <div id="Divfooter1" class="col-lg-3 w-100">
                <ul class="Ulfooter">
                    <li>Quem somos</li>
                    <li>Nossa história</li>
                </ul>
            </div>
            <div id="Divfooter2" class="col-lg-3 w-100">
                <ul class="Ulfooter">
                    <li>Atendimento ao cliente</li>
                    <li>Fale conosco</li>
                    <li>Pesquisa de satisfação</li>
                </ul>
            </div>
            <div id="Divfooter3" class="col-lg-3 w-100">
                <ul class="Ulfooter">
                    <li>Termos</li>
                    <li>Política de privacidade</li>
                    <li>Adendo à Política de Privacidade</li>
                    <li>Política de cookies e anúncios</li>
                    <li>Termos de uso</li>
                </ul>
            </div>
            <div id="Divfooter4" style="padding-left: 50px" class="col-lg-3 w-100">

                <ul class="UlfooterSocial w-auto p-3">
                    <li>Conecte-se com PIZZA</li>
                    <li><img src="img/whatsapp.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG"
                            width="32" ; height="32">

                    </li>
                    <li><img src="img/telegram.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG"
                            width="32" ; height="32"></li>
                    <li><img src="img/instagram.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG"
                            width="32" ; height="32"></li>
                    <li><img src="img/facebook.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG"
                            width="32" ; height="32"></li>
                    <li><img src="img/twitter.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG" width="32"
                            ; height="32"></li>
                </ul>

            </div>
        </div>

    </footer>
    <script>
        function chamaTelaCadastro() {
            // Redireciona para a página CadastroCli.html
            window.location.href = 'CadastroCli.html';
        }

        function chamaTelaLogin() {
            // Redireciona para a página CadastroCli.html
            window.location.href = 'LoginCli.html';
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>