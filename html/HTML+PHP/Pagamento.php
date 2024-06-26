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

    <link rel="stylesheet" href="../css/header1.css">
    <link rel="stylesheet" href="../css/mainbody.css">
    <link rel="stylesheet" href="../css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Space+Mono&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/87a70953-c35f-456e-a9fe-7b012f7e7f2d.ico">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/logic.js"></script>

    <title>Pagamento</title>
</head>

<body>
    

    
    <div class="form-inline my-2 my-lg-0 d-flex justify-content-center tituloTela">
        <div style="text-align: center;">
            <h1>Pagamento</h1>
            <br>
            <img src="../img/pagar.png" alt="ilustracao-pizza">
        </div>
    </div>

    <form class="form-inline my-2 my-lg-0 d-flex justify-content-center">
        <div style="text-align: center;">


            <label class="labelPag" for="pagamento">Selecione sua forma de pagamento</label><br />
            <select id="tipoPag" name="pagamentos" class="comboBox" onchange="mudarLayout()">
                <option value="layoutCred">Crédito</option>
                <option value="layoutDeb">Débito</option>
                <option value="layoutPix">Pix</option>
            </select>

            <div class="layoutCred">
                <br>
                <input style="width: 250px;" placeholder="Nome do titular" class="inputForms placeholder" required><br><br>
                <input style="width: 250px;" type="number" placeholder="Número do cartão" class="inputForms placeholder" required><br><br>
                <input style="width: 250px;" type="text" placeholder="Validade" class="inputForms placeholder" required><br><br>
                <input style="width: 250px;" type="number" placeholder="Código de segurança" class="inputForms placeholder" required><br><br>
            </div>

            <div class="layoutDeb">
                <br>
                <label for="infoDeb" style="font-weight: bold; color: #FFFFFF;">O pagamento será feito na
                    entrega!</label>
            </div>

            <div class="layoutPix">
                <br>
                <label for="infoPix" style="font-weight: bold; color: #FFFFFF;" id="codPix">Clique no botão abaixo para
                    gerar o código pix</label>
                <br>
                <button type="button" class="btn-light" onclick="gerarPix()">Gerar código pix</button>
            </div>

            <div class="form-inline my-2 my-lg-0 d-flex justify-content-center">
                <button type="button" class="btnPagar" onclick="chamaTelaPreparacao()">Pagar</button>
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
                    <li><img src="../img/whatsapp.svg" class="teste w3-text-orange" alt="Descrição da imagem SVG"
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
        function mudarLayout() {

            console.log("Entrou no mudarLayout()")

            var select = document.getElementById("tipoPag");
            var selectedValue = select.value;

            console.log("Opção selecionada: " + selectedValue)

            //Ocultar tudo
            var elementos = document.querySelectorAll('.layoutCred, .layoutDeb, .layoutPix')
            for (var i = 0; i < elementos.length; i++) {

                elementos[i].style.display = 'none';
            }

            console.log("passou do for")

            //Exibir o elemento correspondente à opção selecionada
            var selectedElement = document.querySelector('.' + selectedValue);
            if (selectedElement) {

                selectedElement.style.display = 'block';
                console.log("validado")
            }
        }

        function gerarPix() {

            var codPix = document.getElementById("codPix");

            codPix.textContent = "AOUSHFH96UIYDASOJHD2L3JHDDJASDAOSIDJIAJSBD76ASDAHVSJDL12JH2DLJ1LJHBSDHASODH";
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