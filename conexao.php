<?php

$host = getenv('PG_HOST') ?: '127.0.0.1';
$porta = getenv('PG_PORT') ?: '5432';
$banco = getenv('PG_DB') ?: 'bdaula1';
$usuario = getenv('PG_USER') ?: 'postgres';
$senha = getenv('PG_PASS') ?: '';

try {
    $pdo = new PDO(
        "pgsql:host={$host};port={$porta};dbname={$banco}",
        $usuario,
        $senha,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    $stmt = $pdo->query("
        SELECT
            inet_server_addr() AS servidor_ip,
            inet_server_port() AS servidor_porta,
            current_database() AS banco,
            current_user AS usuario,
            version() AS versao
    ");

    $row = $stmt->fetch();

    echo "=== PROVA DA CONEXÃO ===\n";
    echo "Servidor PostgreSQL: {$row['servidor_ip']}\n";
    echo "Porta PostgreSQL: {$row['servidor_porta']}\n";
    echo "Banco: {$row['banco']}\n";
    echo "Usuário: {$row['usuario']}\n";
    echo "Versão: {$row['versao']}\n";

} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage() . "\n";
    exit(1);
}
