# PHP + PostgreSQL com PDO

Projeto simples em PHP demonstrando como conectar uma aplicação a um banco de dados PostgreSQL usando PDO.

## Tecnologias

- PHP
- PostgreSQL
- PDO (`pdo_pgsql`)

## Arquivos do projeto

- `conexao.php` — configura a conexão com o banco de dados.
- `teste.php` — arquivo simples para testar se a conexão foi realizada.
- `.gitignore` — evita o envio de arquivos locais e sensíveis.

## Pré-requisitos

Antes de executar, tenha instalado:

- PHP
- PostgreSQL
- Extensão PDO para PostgreSQL habilitada no PHP (`pdo_pgsql`)

## Configuração

Configure os dados do seu banco diretamente no arquivo `conexao.php`.

Exemplo de dados que podem ser ajustados:

```php
$host = "localhost";
$porta = "5432";
$banco = "seu_banco";
$usuario = "seu_usuario";
$senha = getenv('PG_PASS') ?: '';

## Como testar

No terminal, dentro da pasta do projeto, execute:

```bash
php teste.php
```

Se tudo estiver configurado corretamente, será exibida uma mensagem confirmando a conexão com o PostgreSQL.

## Autor

Paulo Ramos
