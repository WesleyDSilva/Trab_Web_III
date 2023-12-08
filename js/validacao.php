<?php
session_start();

$host = "devweb2sql.mysql.dbaas.com.br";
$usuario = "devweb2sql";
$senha = "g2023_FaTEC#$";
$nome_do_banco = "devweb2sql";

$conexao = new mysqli($host, $usuario, $senha, $nome_do_banco);

// Verifique se há falha na conexão
if ($conexao->connect_error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];

    // Use prepared statements para evitar SQL injection
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE telefone = ? AND senha = ?");
    
    // Verifique se a preparação foi bem-sucedida
    if ($stmt) {
        $stmt->bind_param("ss", $telefone, $senha);
        $stmt->execute();

        // Obtenha o resultado
        $resultado = $stmt->get_result();

        // Verifique se a consulta retornou exatamente 1 linha
        if ($resultado->num_rows == 1) {
            $usuario = $resultado->fetch_assoc();
            $_SESSION["id"] = $usuario["id"];
            $_SESSION["nome"] = $usuario["nome"];
            header("Location: index.php");
            exit();
        } else {
            $erro = "Telefone ou senha incorretos.";
        }

        // Feche o statement
        $stmt->close();
    } else {
        die("Erro na preparação da consulta: " . $conexao->error);
    }
}
?>
