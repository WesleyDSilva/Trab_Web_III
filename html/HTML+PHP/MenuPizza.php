<?php

include('protect.php');

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
    <link rel="stylesheet" href="css/MenuCard.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Space+Mono&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.ico">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Pizzas</title>

</head>

<body>

        <h1 class="logo-pizza textColor" style="padding-top: 30px">Pizzas</h1>

        <div class="container-fluid">
           <div class="row justify-content-around">
                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div>

                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div>

                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div>

                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div>               
            </div>

            <div class="row justify-content-around">
                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div> 

                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div> 

                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div> 

                <div class="card col-md-3">
                    <img class="card-img-top text-center mx-auto" src="img/calabresa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Calabresa, cebola e azeitonas pretas</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Peça agora</a>                    
                    </div>
                </div>               
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do pedido</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class=" container row justify-content-around">
                        <div class="form-check buttonRadio" onclick="selectRadioButton('exampleRadios1')">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Inteira - R$ 60,00
                            </label>
                        </div>

                        <div class="form-check buttonRadio" onclick="selectRadioButton('exampleRadios2')">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                Meia - R$ 30,00
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Observação:</label>
                      <textarea class="form-control mw-100" id="message-text"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Enviar pedido</button>
                </div>
              </div>
            </div>
          </div>
         
        

        
    


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

    <script>
        function selectRadioButton(radioButtonId) {
            // Obter a referência para o botão de opção
            var radioButton = document.getElementById(radioButtonId);
        
            // Alterar o estado do botão de opção
            radioButton.checked = true;
        }
    </script>

</body>

</html>