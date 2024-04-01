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

    <link type="image/x-icon" rel="shortcut icon" href="../img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <script src="js/logic.js"></script>
    <title>Login</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
            <p><span class="logo-pizza" style="text-decoration-line:underline;color:#38a6a6;">Pizza</span></p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

            <div class="ml-auto">
                <ul class="navbar-nav" style="list-style-type: none">

                    <li style="padding-right: 15px; padding-top: 3px; padding-bottom: 5px">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle bg-transparent text-dark" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                MENU
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Cardápio</a>
                                <a class="dropdown-item" href="#">Promoções</a>
                                <a class="dropdown-item" href="#">Alguma coisa aqui</a>
                            </div>
                        </div>
                    </li>
                    <li style="padding-right: 15px; padding-bottom: 5px">
                        <button type="button" class="btn btn-light" onclick="chamaTelaCadastro()">Criar conta</button>
                    </li>
                    <li style="padding-right: 15px; padding-bottom: 5px">
                        <button type="button" class="btn btn-dark" onclick="chamaTelaLogin()">Entrar</button>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

    <img src="img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.jpg" alt="logo-pizzaria" id="img-logo"
        class="logo-pizzaria img-logo">

    <!--
    <form class="form-inline my-2 my-lg-0 d-flex justify-content-center">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    -->
    <div class="form-inline my-2 my-lg-0 d-flex justify-content-center tituloTela">
        <div style="text-align: center;">
            <h1>Login</h1>
            <br>
            <img src="img/homem-usuario.png" alt="ilustracao-pizza">
        </div>
    </div>

    <!--<form action="js/validacao.php" method="POST" class="form-inline my-2 my-lg-0 d-flex justify-content-center">-->
    <form action="autenticacao.php" method="post" class="form-inline my-2 my-lg-0 d-flex justify-content-center">
        <div>
            <input class="form-control mr-sm-2 inputForms placeholder" type="text" name="username" id="username" placeholder="Telefone" aria-label="Telefone" required>
            <br><br>
            <input class="form-control mr-sm-2 inputForms placeholder" type="text" name="password" id="password" placeholder="Senha" aria-label="Senha" required>
    
            <div class="forgotPwd">
                <a href="">Esqueceu a senha?</a>
            </div>
            
            
            

                <div class="form-inline my-2 my-lg-0 d-flex justify-content-center">
                    <button type="submit" class="btnConfirm">Confirmar</button>
                </div>
           
            
            
            
            
            
        </div>
    </form>

    <footer style="margin-top: 100px">

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script src="js/conexaoTeste.php"></script>
        <script src="js/validacao.php"></script>

  


</body>

</html>