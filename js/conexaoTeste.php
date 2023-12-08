<?php

$host = "devweb2sql.mysql.dbaas.com.br";
$usuario = "devweb2sql";
$senha = "g2023_FaTEC#$";
$nome_do_banco = "devweb2sql";

$conexao = new mysqli($host, $usuario, $senha, $nome_do_banco);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}