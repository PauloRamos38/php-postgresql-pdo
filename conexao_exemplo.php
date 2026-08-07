<?php

$host = "localhost";
$porta = "5432";
$banco = "bdaula1";
$usuario = "postgres";
$senha = "SUA_SENHA_AQUI";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$porta;dbname=$banco",
        $usuario,
        $senha
    );

    echo "Conexão com PostgreSQL realizada com sucesso!";

} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
