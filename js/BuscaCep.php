<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Processar os dados do formulário
        $cep = $_POST['cep'];
        
        // Verificar se o CEP é válido
        if (strlen($cep) === 8) {
            // Fazer a requisição à API ViaCEP
            $url = 'http://viacep.com.br/ws/' . $cep . '/json/';
            $response = file_get_contents($url);
            $endereco = json_decode($response, true);

            // Preencher os campos do endereço se a requisição foi bem-sucedida
            if (isset($endereco['erro'])) {
                exibirMensagem("CEP não encontrado");
            } else {
                preencherFormulario($endereco);
            }
        } else {
            exibirMensagem("CEP fora dos padrões corretos");
        }
    }

    function preencherFormulario($endereco) {
        echo '
            <script>
                document.getElementById("logra").value = "' . $endereco['logradouro'] . '";
                document.getElementById("cidade").value = "' . $endereco['localidade'] . '";
                document.getElementById("bairro").value = "' . $endereco['bairro'] . '";
            </script>';
    }

    function exibirMensagem($mensagem) {
        echo '
            <script>
                document.getElementById("logra").value = "' . $mensagem . '";
            </script>';
    }
?>


