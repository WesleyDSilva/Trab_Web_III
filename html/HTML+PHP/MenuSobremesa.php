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
    <link rel="stylesheet" href="css/MenuPizzas.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/MenuCard.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Space+Mono&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.ico">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sobremesas</title>

</head>

<body>

    

    <div class="Titulopg">

        <h1>Sobremesas</h1>


    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
             <div class="card col-md-3">
                 <img class="card-img-top text-center mx-auto" src="img/brotochoco.png" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">brotinho brigadeiro</h5>
                     <p class="card-text">Brotinho de brigadeiro com creme de baunilha ,brigadeiro de chocolate e granulado.</p>
                     <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                 </div>
             </div>

             <div class="card col-md-3">
                 <img class="card-img-top text-center mx-auto" src="img/brotoovo.png" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">brotinho Ovomaltine®</h5>
                     <p class="card-text">Brotinho recheada com creme de baunilha e creme de Ovomaltine® crocante.</p>
                     <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                 </div>
             </div>

             <div class="card col-md-3">
                 <img class="card-img-top text-center mx-auto" src="img/canelitoleite.png" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">Canela Bites Doce de Leite</h5>
                     <p class="card-text">Deliciosa sobremesa crocante com 16 pedaços de massa pan, envoltos em açúcar e canela, e cobertos com Doce de Leite.</p>
                     <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                 </div>
             </div>

             <div class="card col-md-3">
                 <img class="card-img-top text-center mx-auto" src="img/canelitochoco.png" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">Canela Bites Ovomaltine®</h5>
                     <p class="card-text">Deliciosa sobremesa crocante com 16 pedaços de massa pan, envoltos em açúcar e canela, e cobertos com creme de Ovomaltine®</p>
                     <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                 </div>
             </div>               
         </div>

         <footer style="margin-top: 210px">

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
                        <li><img src="img/whatsapp.svg" class="w3-text-orange" alt="Descrição da imagem SVG"
                                width="32" ; height="32">
    
                        </li>
                        <li><img src="img/telegram.svg" class="w3-text-orange" alt="Descrição da imagem SVG"
                                width="32" ; height="32"></li>
                        <li><img src="img/instagram.svg" class="w3-text-orange" alt="Descrição da imagem SVG"
                                width="32" ; height="32"></li>
                        <li><img src="img/facebook.svg" class="w3-text-orange" alt="Descrição da imagem SVG"
                                width="32" ; height="32"></li>
                        <li><img src="img/twitter.svg" class="w3-text-orange" alt="Descrição da imagem SVG" width="32"
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

</body>

</html>