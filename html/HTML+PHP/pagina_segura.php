<?php
    session_start();

    if (!isset($_SESSION["autenticado"]) || !$_SESSION["autenticado"]) {
        header("Location: login.php");
        exit();
    }
    $_SESSION['InfoAleatoria'] = 'abcdef';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/headerTemplateLogin.css">
  <link rel="stylesheet" href="../css/mainbody.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="icon" type="image/x-icon" href="../img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.ico">


  <title>Document</title>


</head>

<body>
  <img src="../img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.jpg" alt="logo-pizzaria" id="img-logo"
    class="logo-pizzaria img-logo">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Template_Header_User.html">
      <p><span class="logo-pizza" style="text-decoration-line:underline;color:#38a6a6;">Pizza</span></p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">

        </li>


      </ul>
      <div class="ms-auto">
        <ul class="navbar-nav" style="float: left; list-style-type: none">
          <li style="padding-right: 50px">
            <a class="nav-item nav-link text-dark" href="#">Bem Vindo! Fulano</a>
          </li>

          <li style="padding-right: 50px; padding-top: 2px">
            <img class="img-carrinho img-carrinho-container" src="../img/notification-bell.svg" alt="carrinho">
          </li>

          <li style="padding-right: 15px; padding-top: 2px">
            <a href="Carrinho.html">
              <img class="img-carrinho img-carrinho-container" src="../img/carrinho.svg" alt="carrinho">
            </a>
          </li>
          <li style="padding-right: 15px; padding-top: 2px">
            <div class="dropdown" style="margin-right: 0px">
              <button class="btn btn-secondary dropdown-toggle bg-transparent text-dark" type="button"
                id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MENU
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button" href="Menu.html">Cardápio</button>
                <button class="dropdown-item" type="button">Promoções</button>
                <button class="dropdown-item" type="button">Something else here</button>
              </div>
            </div>
          </li>
          <li style="padding-right: 15px">
            <button type="button" class="btn btn-dark d-flex align-items-center" style="display: inline">SAIR</button>
          </li>
        </ul>

      </div>
    </div>

  </nav>

  <footer class="container-fluid" style="margin-top: 450px; bottom: 0; position: sticky">

    <div class="row">
      <div id="Divfooter1" class="col-lg-3">
        <ul class="Ulfooter">
          <li>Quem somos</li>
          <li>Nossa história</li>
        </ul>
      </div>
      <div id="Divfooter2" class="col-lg-3">
        <ul class="Ulfooter">
          <li>Atendimento ao cliente</li>
          <li>Fale conosco</li>
          <li>Pesquisa de satisfação</li>
        </ul>
      </div>
      <div id="Divfooter3" class="col-lg-3">
        <ul class="Ulfooter">
          <li>Termos</li>
          <li>Política de privacidade</li>
          <li>Adendo à Política de Privacidade</li>
          <li>Política de cookies e anúncios</li>
          <li>Termos de uso</li>
        </ul>
      </div>
      <div id="Divfooter4" style="padding-left: 50px" class="col-lg-3">

        <ul class="UlfooterSocial w-auto p-3">
          <li>Conecte-se com PIZZA</li>
          <li><img src="../img/whatsapp.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG" width="32" ;
              height="32">

          </li>
          <li><img src="../img/telegram.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG" width="32" ;
              height="32"></li>
          <li><img src="../img/instagram.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG" width="32" ;
              height="32"></li>
          <li><img src="../img/facebook.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG" width="32" ;
              height="32"></li>
          <li><img src="../img/twitter.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG" width="32" ;
              height="32"></li>
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
</body>

</html>
