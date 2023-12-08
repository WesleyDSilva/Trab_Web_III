<?php
$host = "devweb2sql.mysql.dbaas.com.br";
$usuario = "devweb2sql";
$senha = "g2023_FaTEC#$";
$nome_do_banco = "devweb2sql";

$conexao = new mysqli($host, $usuario, $senha, $nome_do_banco);

if ($conexao->connect_error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Require_once deve incluir o arquivo de conexão atual, não o "conexaoTeste.php"
    require_once("conexaoTeste.php");

    $login = $_POST["TELEFONE_CLI"];
    $senha = $_POST["SENHA_CLI"];

    $login = $conexao->real_escape_string($login);
    $senha = $conexao->real_escape_string($senha);

    $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["NOME_CLI"] = $usuario["NOME_CLI"];
        header("Location: index.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}

?>
